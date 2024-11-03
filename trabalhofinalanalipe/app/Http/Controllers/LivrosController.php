<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Livro;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $livros = Livro::orderBy("id")->paginate(10);
        return view("livros.index")
        ->with('user', $user)
        ->with('livros', $livros);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("livros.create");
              
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
            'resenha' => 'required|max:255',
            //'imagem' => 'max:255',
            'tipo' => 'max:255',
            'autor' => 'max:255',
            'publicacao' => 'max:255',
        ]);
        
        $livro = new Livro();
        $livro->titulo = $storeData["titulo"];
        $livro->resenha = $storeData["resenha"];
        // $livro->imagem = $storeData["imagem"];
        $livro->tipo = $storeData["tipo"];
        $livro->autor = $storeData["autor"];
        $livro->publicacao = $storeData["publicacao"];
        
        $user_id = $request["user_id"];
        
        $livro->user_id = $user_id;
        
        $livro->save();
        return redirect()->route('livros.index')->withSuccess(__('livro criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = livro::findOrFail($id);
        return view("livros.show",compact("livro"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        $users = User::all();
        return view("livros.edit",compact("livro"))
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
            'resenha' => 'required|max:255',
            //'imagem' => 'max:255',
            'tipo' => 'max:255',
            'autor' => 'max:255',
            'publicacao' => 'max:255',
        ]);
        
        $livro = new Livro();
        $livro->titulo = $storeData["titulo"];
        $livro->resenha = $storeData["resenha"];
        // $livro->imagem = $storeData["imagem"];
        $livro->tipo = $storeData["tipo"];
        $livro->autor = $storeData["autor"];
        $livro->publicacao = $storeData["publicacao"];
        
        $user_id = $request["user_id"];
        
        $livro->user_id = $user_id;
        
        $livro->update();
        return redirect()->route('livros.index')->withSuccess(__('livro atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect()->route('livros.index')->withSuccess(__('livro removida com sucesso.'));
    }
}
