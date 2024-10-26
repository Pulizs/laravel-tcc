<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\telaAdmin;
use App\Models\User;
use App\Models\Material;

class TelaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        $users = User::orderBy("id", "desc")->paginate(10);
        $telaAdmin = TelaAdmin::orderBy("id")->paginate(10);
        return view("telaAdmin.index")
        ->with('users', $users)
        ->with('telaAdmin', $telaAdmin);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("telaAdmin.create");
              
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $storeData = $request->validate([
            'titulo' => 'required|max:255',
            'conteudo' => 'max:255',
            // 'imagem' => 'max:255',
            'curtidas' => 'bigInteger',
        ]);
        
        $telaAdmin = new TelaAdmin();
        $telaAdmin->titulo = $storeData["titulo"];
        $telaAdmin->conteudo = $storeData["conteudo"];
        // $telaAdmin->imagem = $storeData["imagem"];
        $telaAdmin->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $telaAdmin->user_id = $user_id;
        
        $telaAdmin->save();
        return redirect()->route('telaAdmin.index')->withSuccess(__('telaAdmin criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telaAdmin = TelaAdmin::findOrFail($id);
        return view("telaAdmin.show",compact("telaAdmin"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telaAdmin = TelaAdmin::findOrFail($id);
        $users = User::all();
        return view("telaAdmin.edit",compact("telaAdmin"))
        ->with('users',$users );
       
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            
        $storeData = $request->validate([
            'titulo' => 'required|max:255',
            'conteudo' => 'max:255',
            'imagem' => 'required|max:255',
            'curtidas' => 'required|max:255',
        ]);
        
        $telaAdmin = new TelaAdmin();
        $telaAdmin->titulo = $storeData["titulo"];
        $telaAdmin->conteudo = $storeData["conteudo"];
        $telaAdmin->imagem = $storeData["imagem"];
        $telaAdmin->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $telaAdmin->user_id = $user_id;
        
        $telaAdmin->update();
        return redirect()->route('telaAdmin.index')->withSuccess(__('telaAdmin atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telaAdmin = TelaAdmin::findOrFail($id);
        $telaAdmin->delete();
        return redirect()->route('telaAdmin.index')->withSuccess(__('telaAdmin removida com sucesso.'));
    }
}
