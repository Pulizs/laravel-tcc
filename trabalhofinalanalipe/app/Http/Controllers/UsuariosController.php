<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Postagem;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from tb_produto order by id desc limit 10
        $usuarios = User::orderBy("id", "desc")->paginate(10);
        return view("usuarios.index", compact("usuarios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usuarios.create");
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
            'nome' => 'required|max:255',
            'nickname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuarios,email',
            'celular' => 'required|max:255',
            'role' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
        
        ([
            'email.unique' => 'O e-mail informado já está em uso. Por favor, utilize outro.',
        ]);



        $dados = array_merge($storeData, ["role" => "USER"]);
        
        // $endereco = new Endereco();
        // $endereco->logradouro = $request['logradouro'];
        // $endereco->cep = $request['cep'];
        // $endereco->cidade = $request['cidade'];
        // $endereco->numero = $request['numero'];
        // $endereco->complemento = $request['complemento'];
        
        //Insere o usuário no BD e retorna o obj
        //com o id criado
        $user = User::create($dados);
        //salva o endreço relacionando com o usuário que foi criado
        // $user->endereco()->save($endereco);
        return redirect()->route('usuarios.index')->withSuccess(__('Usuario criado com sucesso.'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view("usuarios.show", compact("usuario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view("usuarios.edit", compact("usuario"));
        
    }

    public function postagens($id)
    {
        $postagens = Postagem::where("user_id", $id)->orderBy("id")->get();
        
        return view("postagens.index", compact("postagens"));
        
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
            'nome' => 'required|max:255',
            'nickname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuarios,email',
            'celular' => 'required|max:255',
            'role' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
        
        ([
            'email.unique' => 'O e-mail informado já está em uso. Por favor, utilize outro.',
        ]);
        
        // $endereco = User::find($id)->endereco;
        // $endereco->logradouro = $request["logradouro"];
        // $endereco->cep = $request["cep"];
        // $endereco->cidade = $request["cidade"];
        // $endereco->numero = $request["numero"];
        // $endereco->complemento = $request["complemento"];
        User::whereId($id)->update($storeData);
        return redirect()->route('usuarios.index')->withSuccess(__('Usuario atualizado com sucesso.'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios')->with('completed', 'Usuario removido com sucesso');
    }
}
