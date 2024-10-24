<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\postagem;
use App\Models\User;
use App\Models\Material;

class MateriaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $materiais = Material::orderBy("id")->paginate(10);
        return view("materiais.index")
        ->with('user', $user)
        ->with('materiais', $materiais);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("materiais.create");
              
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
        
        $postagem = new Postagem();
        $postagem->titulo = $storeData["titulo"];
        $postagem->conteudo = $storeData["conteudo"];
        // $postagem->imagem = $storeData["imagem"];
        $postagem->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $postagem->user_id = $user_id;
        
        $postagem->save();
        return redirect()->route('materiais.index')->withSuccess(__('postagem criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postagem = Postagem::findOrFail($id);
        return view("materiais.show",compact("postagem"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postagem = Postagem::findOrFail($id);
        $users = User::all();
        return view("materiais.edit",compact("postagem"))
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
        
        $postagem = new Postagem();
        $postagem->titulo = $storeData["titulo"];
        $postagem->conteudo = $storeData["conteudo"];
        $postagem->imagem = $storeData["imagem"];
        $postagem->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $postagem->user_id = $user_id;
        
        $postagem->update();
        return redirect()->route('materiais.index')->withSuccess(__('postagem atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postagem = Postagem::findOrFail($id);
        $postagem->delete();
        return redirect()->route('materiais.index')->withSuccess(__('postagem removida com sucesso.'));
    }
}
