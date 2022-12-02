<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Curriculum extends Component
{

    public $formacao = [];

    public $formacaoComplementar = [];

    public $experiencia = [];

    public $habilidades = [];

    public function mount()
    {
        $this->formacao = [
            []
        ];

        $this->formacaoComplementar = [
            []
        ];

        $this->experiencia = [
            []
        ];

        $this->habilidades = [
            []
        ];
    }

    public function addFormacao()
    {
        $this->formacao[] = [];
    }

    public function removeFormacao($index)
    {
        unset($this->formacao[$index]);
        $this->formacao = array_values($this->formacao);
    }

    public function addFormacaoComplentar()
    {
        $this->formacaoComplementar[] = [];
    }

    public function removeFormacaoComplentar($index)
    {
        unset($this->formacaoComplementar[$index]);
        $this->formacaoComplementar = array_values($this->formacaoComplementar);
    }

    public function addExperiencia()
    {
        $this->experiencia[] = [];
    }

    public function removeExperiencia($index)
    {
        unset($this->experiencia[$index]);
        $this->experiencia = array_values($this->experiencia);
    }

    public function addHabilidades()
    {
        $this->habilidades[] = [];
    }

    public function removeHabilidades($index)
    {
        unset($this->habilidades[$index]);
        $this->habilidades = array_values($this->habilidades);
    }

    public function render()
    {
        return view('livewire.curriculum');
    }
}
