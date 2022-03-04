<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::get();
        return view('aluno.index',['alunos' => $alunos]);
    }

    public function create()
    {
        return view('aluno.create');
    }

    public function store(Request $request)
    {
        $aluno=Aluno::create($request->all());
        return redirect()->route('aluno.index');
    }

    public function show($id)
    {
        $aluno = Aluno::find($id);
        if(!$aluno){
            return redirect()->route('aluno.index');
        }
        return view('aluno.show',compact('aluno'));
    }

    public function edit($id)
    {
        $aluno = Aluno::find($id);
        if(!$aluno){
            return redirect()->route('aluno.index');
        }
        return view('aluno.edit',compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        if(!$aluno){
            return redirect()->back();
        }
        $aluno->update($request->all());
        return redirect()->route('aluno.index')->with('messsage','Alterado com sucesso');
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect()->route('aluno.index');
    }
}
