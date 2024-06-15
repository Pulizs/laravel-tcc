<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\TesteMail;
use App\Models\Disciplina;
use App\Models\Professor;


class MailController extends Controller
{
    public function index($id)
    {
        $professor= Professor::findOrFail($id);
        $disciplinas = Disciplina::where("professor_id", $id)->get();
        
        
        $emailData = [
            'title' => 'Disciplinas que o professor da aula',
            "disciplinas" => $disciplinas,
        ];
        Mail::to($professor->email)->send(
            new TesteMail($emailData));
        dd("Email enviado com sucesso.");
        
    
    }
}
