<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mensagem;


class MessageController extends Controller
{
    function store(Request $request){
        $mensagem = new mensagem();
        $mensagem->msg = $request->msg;
        $mensagem->enviadoPeloAdmin = session()->get('nivelAcesso') == "Admin" ? true: false;
        $mensagem->solicitacao_id = $request->solicitationId;
        $mensagem->save();
        return redirect()->route("solicitation.show", $request->solicitationId);
    }
    
}
