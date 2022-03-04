<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::get();
        return view('professor.index',['professores' => $professores]);
    }

    public function create()
    {
        return view('professor.create');
    }

    public function store(Request $request)
    {
        $professor=Professor::create($request->all());
        return redirect()->route('professor.index');
    }

    public function show($id)
    {
        $professor = Professor::find($id);
        if(!$professor){
            return redirect()->route('professor.index');
        }
        return view('professor.show',compact('professor'));
    }

    public function edit($id)
    {
        $professor = Professor::find($id);
        if(!$professor){
            return redirect()->route('professor.index');
        }
        return view('professor.edit',compact('professor'));
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find($id);
        if(!$professor){
            return redirect()->back();
        }
        $professor->update($request->all());
        return redirect()->route('professor.index')->with('messsage','Alterado com sucesso');
    }

    public function destroy($id)
    {
        $professor = Professor::find($id);
        $professor->delete();
        return redirect()->route('professor.index');
    }
}
