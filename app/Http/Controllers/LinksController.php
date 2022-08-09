<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\links;

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
            $links;
            if(session()->get("nivelAcesso") == "Comum"){
                $links = links::where("criador_id", session()->get("userId"));
            }else{
                $links = links::all();
            }
            return view('links.index')->with("curTab", "inicio")->with("links", $links);
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
        $link = new links;
        $link->linkOriginal = $request->linkOriginal;
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
            $url = "https://";   
        }else{
            $url = "http://";   
        }  
        $url .= $_SERVER['HTTP_HOST'];
        $url .= "/". rand("100000", "999999"); 
        $link->linkEncurtado = $url;
        $link->save();
        return view("links.success")->with("url", $link->linkEncurtado)->with("originalUrl", $link->linkOriginal);
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
        //TODO pegar o link pelo id
        $curLink = links::where("id", $id)->first();
        //passar pra view
        return view("links.edit", ["link" => $curLink]);
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

    public function delete($id){
        $curLink = links::where("id", $id)->first();
        return view('links.delete',compact('curLink'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $curLink = links::where("id", $id)->first();

        $curLink->delete();

        $request->session()->flash('status', 'Link deletado com sucesso!');
        return redirect()->route("links.index");
    }
}
