<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitacoes;
use App\Http\Requests\solicitationRequest;


class SolicitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitations = solicitacoes::paginate(6);
        if(session()->get("nivelAcesso")!="Admin"){
            $solicitations->where("criador_id", session()->get("userId"));
        }
        return view("solicitations.index")->with("curTab", "solicitacoes")->with("solicitations", $solicitations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("solicitations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(solicitationRequest $request)
    {
        $solicitacao = new solicitacoes;
        $solicitacao->assunto = $request->assunto;
        $solicitacao->descricao = $request->descricao;
        $solicitacao->criador_id = session()->get('userId');

        $solicitacao->save();
        $request->session()->flash('status', 'Solicitação criada com sucesso!');
        return redirect()->route("solicitation.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitation = solicitacoes::where("id",$id)->get();
        return view("solicitations.show")->with("solicitation", $solicitation[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
