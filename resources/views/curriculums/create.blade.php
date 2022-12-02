<x-admin-layout>
    <div class="card">
        <div class="text-center text-2xl font-bold mt-6">
            New Curriculum
        </div>
        <div class="card-body p-6" x-data="{ principaisInformacoes : false, formacao: false, formacaoComplementar: false, experiencia: false, habilidades: false}">

            @livewire('curriculum')
        </div>
</x-admin-layout>
