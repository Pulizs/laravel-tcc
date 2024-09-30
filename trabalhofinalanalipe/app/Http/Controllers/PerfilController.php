<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;
use App\Models\Perfil;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $perfil = Perfil::orderBy("id")->paginate(10);
        return view("perfil.index")
        ->with('user', $user)
        ->with('perfil', $perfil);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("perfil.create");
              
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
        
        $perfil = new Perfil();
        $perfil->titulo = $storeData["titulo"];
        $perfil->conteudo = $storeData["conteudo"];
        // $perfil->imagem = $storeData["imagem"];
        $perfil->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $perfil->user_id = $user_id;
        
        $perfil->save();
        return redirect()->route('perfil.index')->withSuccess(__('perfil criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfil = Perfil::findOrFail($id);
        return view("perfil.show",compact("perfil"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil = Perfil::findOrFail($id);
        $users = User::all();
        return view("perfil.edit",compact("perfil"))
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
        
        $perfil = new Perfil();
        $perfil->titulo = $storeData["titulo"];
        $perfil->conteudo = $storeData["conteudo"];
        $perfil->imagem = $storeData["imagem"];
        $perfil->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $perfil->user_id = $user_id;
        
        $perfil->update();
        return redirect()->route('perfil.index')->withSuccess(__('perfil atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->delete();
        return redirect()->route('perfil.index')->withSuccess(__('perfil removida com sucesso.'));
    }
}
