<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditCurriculum extends Component
{

    public $formacao = [];

    public $formacaoComplementar = [];

    public $experiencia = [];

    public $habilidades = [];

    public function mount($curriculum)
    {
        $this->formacao = $curriculum->formacao;
        $this->formacaoComplementar = $curriculum->formacaoComplementar;
        $this->experiencia = $curriculum->experiencia;
        $this->habilidades = $curriculum->habilidades;
        dd($this->formacao);
    }

    public function render()
    {
        return view('livewire.edit-curriculum');
    }
}
