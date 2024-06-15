<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Disciplina;
use App\Models\Professor;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professor = Auth::user();
        $disciplinas = Disciplina::orderBy("id")->paginate(10);
        return view("disciplinas.index")
        ->with('professor', $professor)
        ->with('disciplinas', $disciplinas);
        
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores = Professor::all();
        return view("disciplinas.create")
        ->with('professores',$professores);
              
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
            'curso' => 'required|max:255',
            'sigla' => 'required|max:255',
            'cargaHoraria' => 'required|max:255',
        ]);
        
        $disciplina = new Disciplina();
        $disciplina->nome = $storeData["nome"];
        $disciplina->curso = $storeData["curso"];
        $disciplina->sigla = $storeData["sigla"];
        $disciplina->cargaHoraria = $storeData["cargaHoraria"];
        
        $professor_id = $request["professor_id"];
        
        $disciplina->professor_id = $professor_id;
        
        $disciplina->save();
        return redirect()->route('disciplinas.index')->withSuccess(__('Disciplina salva com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        return view("disciplinas.show",compact("disciplina"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $professores = Professor::all();
        return view("disciplinas.edit",compact("disciplina"))
        ->with('professores',$professores );
       
 
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
            'curso' => 'required|max:255',
            'sigla' => 'required|max:255',
            'cargaHoraria' => 'required|max:255',
        ]);
        
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->nome = $storeData["nome"];
        $disciplina->curso = $storeData["curso"];
        $disciplina->sigla = $storeData["sigla"];
        $disciplina->cargaHoraria = $storeData["cargaHoraria"];
        
        $professor_id = $request["professor_id"];
        
        $disciplina->professor_id = $professor_id;
        
        $disciplina->update();
        return redirect()->route('disciplinas.index')->withSuccess(__('Disciplina atualizada com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();
        return redirect()->route('disciplinas.index')->withSuccess(__('Disciplina removida com sucesso.'));
    }
}
