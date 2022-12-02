<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = Curriculum::all();

        return view('curriculums.index')->with('curriculums', $curriculums);
    }

    public function create()
    {
        return view('curriculums.create');
    }

    public function store(Request $request)
    {
        dd($request);
        // $curriculum = new Curriculum;
        // $curriculum->nome = $request->nome;
        // $curriculum->nacionalidade = $request->nacionalidade;
        // $curriculum->idade = $request->idade;
        // $curriculum->estadoCivil = $request->estadoCivil;
        // $curriculum->rua = $request->rua;
        // $curriculum->numero = $request->numero;
        // $curriculum->bairro = $request->bairro;
        // $curriculum->cidade = $request->cidade;
        // $curriculum->estado = $request->estado;
        // $curriculum->email = $request->email;
        // $curriculum->telefone = $request->telefone;
        // $curriculum->perfil = $request->perfil;
        // $curriculum->save();

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
