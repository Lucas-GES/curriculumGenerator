<x-admin-layout>
    <div x-data="{ principaisInformacoes : false, formacao: false, formacaoComplementar: false, experiencia: false, habilidades: false}">
        @livewire('edit-curriculum', ['curriculums' => $curriculum])
    </div>
</x-admin-layout>
