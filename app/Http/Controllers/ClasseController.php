<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::get();
        return view('classe.index',['classes' => $classes]);
    }

    public function create()
    {
        return view('classe.create');
    }

    public function store(Request $request)
    {
        $classe=Classe::create($request->all());
        return redirect()->route('classe.index');
    }

    public function show($id)
    {
        $classe = Classe::find($id);
        if(!$classe){
            return redirect()->route('classe.index');
        }
        return view('classe.show',compact('classe'));
    }

    public function edit($id)
    {
        $classe = Classe::find($id);
        if(!$classe){
            return redirect()->route('classe.index');
        }
        return view('classe.edit',compact('classe'));
    }

    public function update(Request $request, $id)
    {
        $classe = Classe::find($id);
        if(!$classe){
            return redirect()->back();
        }
        $classe->update($request->all());
        return redirect()->route('classe.index')->with('messsage','Alterado com sucesso');
    }

    public function destroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete();
        return redirect()->route('classe.index');
    }
}
