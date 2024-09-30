<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;
use App\Models\Configuracao;

class ConfiguracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $configuracao = Configuracao::orderBy("id")->paginate(10);
        return view("configuracao.index")
        ->with('user', $user)
        ->with('configuracao', $configuracao);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("configuracao.create");
              
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
        
        $configuracao = new Configuracao();
        $configuracao->titulo = $storeData["titulo"];
        $configuracao->conteudo = $storeData["conteudo"];
        // $configuracao->imagem = $storeData["imagem"];
        $configuracao->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $configuracao->user_id = $user_id;
        
        $configuracao->save();
        return redirect()->route('configuracao.index')->withSuccess(__('configuracao criada com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracao = Configuracao::findOrFail($id);
        return view("configuracao.show",compact("configuracao"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configuracao = Configuracao::findOrFail($id);
        $users = User::all();
        return view("configuracao.edit",compact("configuracao"))
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
        
        $configuracao = new Configuracao();
        $configuracao->titulo = $storeData["titulo"];
        $configuracao->conteudo = $storeData["conteudo"];
        $configuracao->imagem = $storeData["imagem"];
        $configuracao->curtidas = $storeData["curtidas"];
        
        $user_id = $request["user_id"];
        
        $configuracao->user_id = $user_id;
        
        $configuracao->update();
        return redirect()->route('configuracao.index')->withSuccess(__('configuracao atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $configuracao = Configuracao::findOrFail($id);
        $configuracao->delete();
        return redirect()->route('configuracao.index')->withSuccess(__('configuracao removida com sucesso.'));
    }
}
