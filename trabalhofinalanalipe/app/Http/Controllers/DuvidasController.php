<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Duvida;

class DuvidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $duvidas = Duvida::orderBy("id")->paginate(10);
        return view("duvidas.index")
        ->with('user', $user)
        ->with('duvidas', $duvidas);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("duvidas.create");
              
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
        
        $duvida = new Duvida();
        $duvida->titulo = $storeData["titulo"];
        $duvida->conteudo = $storeData["conteudo"];
        // $duvida->imagem = $storeData["imagem"];
        $duvida->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $duvida->user_id = $user_id;
        
        $duvida->save();
        return redirect()->route('duvidas.index')->withSuccess(__('duvida criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $duvida = Duvida::findOrFail($id);
        return view("duvidas.show",compact("duvida"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $duvida = Duvida::findOrFail($id);
        $users = User::all();
        return view("duvidas.edit",compact("duvida"))
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
        
        $duvida = new Duvida();
        $duvida->titulo = $storeData["titulo"];
        $duvida->conteudo = $storeData["conteudo"];
        $duvida->imagem = $storeData["imagem"];
        $duvida->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $duvida->user_id = $user_id;
        
        $duvida->update();
        return redirect()->route('duvidas.index')->withSuccess(__('duvida atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $duvida = Duvida::findOrFail($id);
        $duvida->delete();
        return redirect()->route('duvidas.index')->withSuccess(__('duvida removida com sucesso.'));
    }
}
