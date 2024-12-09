<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\comentario;
use App\Models\User;
use App\Models\Image;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $postagem = Auth::user();
        $comentarios = Comentario::with('user')->orderBy('id', 'DESC')->get();
        return view("comentarios.index")
            ->with('users', $user)
            ->with('comentario', $comentarios)
            ->with('postagem', $postagem);


        $comentarios = Comentario::with('images')->orderBy('id', 'DESC')->get();
        return view('comentarios.index', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comentarios.create");
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
            'imagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'curtidas' => 'bigInteger',
        ]);



        $comentario = new Comentario();
        $comentario->titulo = $storeData["titulo"];
        $comentario->conteudo = $storeData["conteudo"];
        // $comentario->curtidas = $storeData["curtidas"];
        // $comentario = array_merge($storeData, ["curtidas" => 0]);
        $comentario->user_id = auth()->user()->id;

        $postagem_id = $request["postagem_id"];

        $comentario->postagem_id = $postagem_id;

        // Salva a comentario no banco
        $comentario->save();

        // Salva as imagens associadas
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imagePath = $imageFile->store('uploads', 'public');

                // Cria um novo registro de imagem relacionado à comentario
                $image = new Image();
                $image->path = $imagePath;
                $image->comentario_id = $comentario->id;
                $image->save();
            }
        }
        return redirect()->route('comentarios.index')->withSuccess(__('comentario criada com sucesso.'));
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentario = Comentario::findOrFail($id);
        return view("comentarios.show", compact("comentario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = Comentario::findOrFail($id);
        $users = User::all();
        return view("comentarios.edit", compact("comentario"))
            ->with('user', $users);
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

        $comentario = new Comentario();
        $comentario->titulo = $storeData["titulo"];
        $comentario->conteudo = $storeData["conteudo"];
        $comentario->imagem = $storeData["imagem"];
        $comentario->curtidas = $storeData["curtidas"];



        $user_id = $request["user_id"];

        $comentario->user_id = $user_id;

        $postagem_id = $request["postagem_id"];

        $comentario->postagem_id = $postagem_id;

        $comentario->update();
        return redirect()->route('comentarios.index')->withSuccess(__('comentario atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();
        return redirect()->route('comentarios.index')->withSuccess(__('comentario removida com sucesso.'));
    }
}
