<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //se tiver logado vai pro mostrar links
        if(session()->has('userId')){
            return view('links.index')->with("curTab", "inicio");;
        }
        //se não tiver vai pro forms de criar link
        return redirect()->route('links.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //se tiver logado como comum o create é "Novo Link"
        if(session()->get("nivelAcesso") == "Comum"){
            return view('links.create')->with("curTab", "novoLink");
        }
        //se tiver deslogado o create é "Início"
        if(!session()->has('userId')){
            return view('links.create')->with("curTab", "inicio");
        }
        //se for qualquer outro tipo de usuário, não tem acesso ao create de links
        //TODO mostrar erro de sem acesso a rota
        return redirect("/welcome");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
