<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Lotacao;
use App\Models\Disciplina;


class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from tb_produto order by id desc limit 10
        $professores = Professor::orderBy("id", "desc")->paginate(10);
        return view("professores.index", compact("professores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("professores.create");
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
            'email' => 'required|max:255',
            'dataNascimento' => 'required|max:255',
            'cpf' => 'required|max:255',
        ]);
        
        $dados = array_merge($storeData, ["role" => "ROLE_USER"]);
        
        $lotacao = new Lotacao();
        $lotacao->nomeCampus = $request['nomeCampus'];
        $lotacao->departamento = $request['departamento'];
        $lotacao->areaAtuacao = $request['areaAtuacao'];

        
        //Insere o usuário no BD e retorna o obj
        //com o id criado
        $professor = Professor::create($dados);
        //salva o endreço relacionando com o usuário que foi criado
        $professor->lotacao()->save($lotacao);
        return redirect()->route('professores.index')->withSuccess(__('Professor criado com sucesso.'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::findOrFail($id);
        return view("professores.show", compact("professor"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::findOrFail($id);
        return view("professores.edit", compact("professor"));
        
    }
    
    public function disciplinas($id)
    {
        $disciplinas = Disciplina::where("professor_id", $id)->orderBy("id")->get();
        
        return view("disciplinas.index", compact("disciplinas"));
        
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
            'email' => 'required|max:255',
            'dataNascimento' => 'required|max:255',
            'cpf' => 'required|max:255',
        ]);
        
        $lotacao = Professor::find($id)->lotacao;
        $lotacao->nomeCampus = $request['nomeCampus'];
        $lotacao->departamento = $request['departamento'];
        $lotacao->areaAtuacao = $request['areaAtuacao'];
        Professor::whereId($id)->update($storeData);
        return redirect()->route('professores.index')->withSuccess(__('Professor atualizado com sucesso.'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return redirect('/professores')->with('completed', 'Professor removido com sucesso');
    }
}
