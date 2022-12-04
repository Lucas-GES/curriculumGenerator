<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = Curriculum::all();
        dd($curriculums);
        return view('curriculums.index')->with('curriculums', $curriculums);
    }

    public function create()
    {
        return view('curriculums.create');
    }

    public function store(Request $request)
    {
        $curriculum = new Curriculum;
        $curriculum->nome = $request->nome;
        $curriculum->nacionalidade = $request->nacionalidade;
        $curriculum->idade = $request->idade;
        $curriculum->estadoCivil = $request->estadoCivil;
        $curriculum->rua = $request->rua;
        $curriculum->numero = $request->numero;
        $curriculum->bairro = $request->bairro;
        $curriculum->cidade = $request->cidade;
        $curriculum->estado = $request->estado;
        $curriculum->email = $request->email;
        $curriculum->telefone = $request->telefone;
        $curriculum->perfil = $request->perfil;
        $curriculum->user_id = Auth::user()->id;
        $curriculum->save();
        foreach(array_combine($request->formacaoNome, $request->formacaoDescricao) as $nome => $descricao){
            $curriculum->formacao()->create([
                'nome' => $nome,
                'descricao' => $descricao,
                'curriculum_id' => $curriculum->id
            ]);
        }
        foreach($request->formacaoComplementarNome as $index => $nome){
            $curriculum->formacaoComplementar()->create([
                'nome' => $nome,
                'descricao' => $request->formacaoComplementarDescricao[$index],
                'horas' => $request->formacaoComplementarHoras[$index],
                'curriculum_id' => $curriculum->id
            ]);
        }
        foreach($request->experienciaNome as $index => $nome){
            $curriculum->experiencia()->create([
                'nome' => $nome,
                'cargo' => $request->experienciaCargo[$index],
                'inicioContrato' => $request->experienciaInicioContrato[$index],
                'fimContrato' => $request->experienciaFimContrato[$index],
                'descricao' => $request->experienciaDescricao[$index],
                'curriculum_id' => $curriculum->id
            ]);
        }
        foreach($request->habilidadesDescricao as $nome){
            $curriculum->habilidades()->create([
                'descricao' => $nome,
                'curriculum_id' => $curriculum->id
            ]);
        }

        redirect()->route('curriculums.index');
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
