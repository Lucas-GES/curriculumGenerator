<?php

namespace App\Http\Livewire;

use App\Models\Experiencia;
use App\Models\Formacao;
use App\Models\FormacaoComplementar;
use App\Models\Habilidades;
use Livewire\Component;

class EditCurriculum extends Component
{

    public $formacao = [];

    public $formacaoComplementar = [];

    public $experiencia = [];

    public $habilidades = [];

    public $curriculum = [];

    public function mount($curriculums)
    {
        $this->curriculum = $curriculums;
        $index = 0;
        foreach($curriculums->formacao as $form){
            $this->formacao[$index]["formacaoId"] = $form->id;
            $this->formacao[$index]["formacaoNome"] = $form->nome;
            $this->formacao[$index]["formacaoDescricao"] = $form->descricao;
            $index++;
        }
        $index = 0;
        foreach($curriculums->formacaoComplementar as $form){
            $this->formacaoComplementar[$index]["formacaoComplementarId"] = $form->id;
            $this->formacaoComplementar[$index]["formacaoComplementarNome"] = $form->nome;
            $this->formacaoComplementar[$index]["formacaoComplementarDescricao"] = $form->descricao;
            $this->formacaoComplementar[$index]["formacaoComplementarHoras"] = $form->horas;
            $index++;
        }
        $index = 0;
        foreach($curriculums->experiencia as $form){
            $this->experiencia[$index]["experienciaId"] = $form->id;
            $this->experiencia[$index]["experienciaNome"] = $form->nome;
            $this->experiencia[$index]["experienciaCargo"] = $form->cargo;
            $this->experiencia[$index]["experienciaInicioContrato"] = $form->inicioContrato;
            $this->experiencia[$index]["experienciaFimContrato"] = $form->fimContrato;
            $this->experiencia[$index]["experienciaDescricao"] = $form->descricao;
            $index++;
        }
        $index = 0;
        foreach($curriculums->habilidades as $form){
            $this->habilidades[$index]["habilidadesId"] = $form->id;
            $this->habilidades[$index]["habilidadesDescricao"] = $form->descricao;
            $index++;
        }
    }

    public function addFormacao()
    {
        $this->formacao[] = [
            'formacaoId' => '',
            'formacaoNome' => '',
            'formacaoDescricao' => ''
        ];
    }

    public function removeFormacao($index)
    {
        if($this->formacao[$index]['formacaoId'] != ''){
            $form = Formacao::findOrFail($this->formacao[$index]['formacaoId']);
            $form->delete();
        }
        unset($this->formacao[$index]);
        $this->formacao = array_values($this->formacao);
    }

    public function addFormacaoComplentar()
    {
        $this->formacaoComplementar[] = [
            'formacaoComplementarId' => '',
            'formacaoComplementarNome' => '',
            'formacaoComplementarDescricao' => '',
            'formacaoComplementarHoras' => ''
        ];
    }

    public function removeFormacaoComplentar($index)
    {
        if($this->formacaoComplementar[$index]['formacaoComplementarId'] != ''){
            $form = FormacaoComplementar::findOrFail($this->formacaoComplementar[$index]['formacaoComplementarId']);
            $form->delete();
        }
        unset($this->formacaoComplementar[$index]);
        $this->formacaoComplementar = array_values($this->formacaoComplementar);
    }

    public function addExperiencia()
    {
        $this->experiencia[] = [
            'experienciaId' => '',
            'experienciaNome' => '',
            'experienciaHoras' => '',
            'experienciaCargo' => '',
            'experienciaInicioContrato' => '',
            'experienciaFimContrato' => '',
            'experienciaDescricao' => '',
        ];
    }

    public function removeExperiencia($index)
    {
        if($this->experiencia[$index]['experienciaId'] != ''){
            $form = Experiencia::findOrFail($this->experiencia[$index]['experienciaId']);
            $form->delete();
        }
        unset($this->experiencia[$index]);
        $this->experiencia = array_values($this->experiencia);
    }

    public function addHabilidades()
    {
        $this->habilidades[] = [
            'habilidadesId' => '',
            'habilidadesDescricao' => '',
        ];
    }

    public function removeHabilidades($index)
    {
        if($this->habilidades[$index]['habilidadesId'] != ''){
            $form = Habilidades::findOrFail($this->habilidades[$index]['habilidadesId']);
            $form->delete();
        }
        unset($this->habilidades[$index]);
        $this->habilidades = array_values($this->habilidades);
    }


    public function render()
    {
        return view('livewire.edit-curriculum');
    }
}
