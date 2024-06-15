<?php
namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Professor;

class DisciplinaPDFController extends Controller
{

    public function index(Request $request)
    {
        
        $disciplinas = Disciplina::where("professor_id", $request['professor_id'])->get();
        
        $professores = Professor::where('id',$request['professor_id'])->get();
   
      
        $dados = [
            "title" => "Disciplinas do professor",
            "disciplinas" => $disciplinas,
            "professores" => $professores,
            "data" => date('d/m/Y')
        ];
        
        if ($request->has('download')) {
            
            $pdf = PDF::loadView('disciplinas.relatorio', $dados); 
            return $pdf->download('disciplinas_pdf_example.pdf');
        }
    }
}
