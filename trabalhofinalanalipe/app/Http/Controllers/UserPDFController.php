<?php
namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;

class UserPDFController extends Controller
{

    public function index(Request $request)
    {
        $users = User::orderBy("id", "desc")->paginate(100);
        $dados = [
            "title" => "Título do PDF",
            "users" => $users,
            "data" => date('d/m/Y')
        ];

        if ($request->has('download')) {
            $pdf = PDF::loadView('usuarios.relatorio', $dados);
            return $pdf->download('users_pdf_example.pdf');
        }
    }
}
