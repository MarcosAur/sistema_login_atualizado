<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\projectRequest;
use App\Models\projetos;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $projects = projetos::all();
        return view("projects.index")->with("curTab", "projetos")->with("projects", $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(projectRequest $request)
    {
        $projeto = new projetos;
        $projeto->nome = $request->nome;
        $projeto->hash = $request->hash;

        $projeto->save();
        $request->session()->flash('status', 'Projeto criado com sucesso!');
        return redirect()->route("project.index");
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
        $curProject = projetos::where("id", $id)->first();
        return view('projects.edit',compact('curProject'));
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

        $curProject = projetos::where("id", $id)->first();

        $curProject->nome = $request->nome;
        $curProject->hash = $request->hash;

        $curProject->save();

        $request->session()->flash('status', 'Projeto atualizado com sucesso!');
        return redirect()->route("project.index");
    }

    public function delete($id){
        $curProject = projetos::where("id", $id)->first();
        return view('projects.delete',compact('curProject'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $curProject = projetos::where("id", $id)->first();

        $curProject->delete();

        $request->session()->flash('status', 'Projeto deletado com sucesso!');
        return redirect()->route("project.index");
    }
}
