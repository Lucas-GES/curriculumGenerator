<div>
    <form name="curriculums" id="curriculums" action="{{ route('curriculums.store') }}" method="POST">
        @csrf
        {{-- Principais informações --}}
        <div class="text-center mb-6">
            <button class="bg-blue-500 w-48 h-12 rounded" type="button"
                @click="principaisInformacoes = !principaisInformacoes">Principais Informações</button>
        </div>
        <div :class="{ 'hidden': !principaisInformacoes }">
            <div>
                <label for="nome">Seu nome:</label>
                <input type="text" id="nome" name="nome" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="nacionalidade">Sua nacionalidade:</label>
                <input type="text" id="nacionalidade" name="nacionalidade" class="form-control w-full rounded"
                    required="">
            </div>
            <div class="mt-4">
                <label for="idade">Sua idade:</label>
                <input type="number" id="idade" name="idade" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="estadoCivil">Seu estado civil:</label>
                <input type="text" id="estadoCivil" name="estadoCivil" class="form-control w-full rounded"
                    required="">
            </div>
            <div class="mt-4">
                <label for="rua">Sua rua:</label>
                <input type="text" id="rua" name="rua" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="numero">Numero da casa:</label>
                <input type="number" id="numero" name="numero" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="bairro">Seu bairro:</label>
                <input type="text" id="bairro" name="bairro" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="cidade">Sua cidade:</label>
                <input type="text" id="cidade" name="cidade" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="estado">Seu estado:</label>
                <input type="text" id="estado" name="estado" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="email">Seu email:</label>
                <input type="email" id="email" name="email" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="telefone">Seu telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control w-full rounded" required="">
            </div>
            <div class="mt-4">
                <label for="perfil">Breve descrição do seu perfil:</label>
                <textarea id="perfil" name="perfil" class="form-control w-full rounded" required=""></textarea>
            </div>
        </div>

        {{-- Formação acadêmica --}}
        <div class="text-center mt-6">
            <button class="bg-blue-500 w-48 h-12 rounded" type="button" @click="formacao = !formacao">Formação
                Acadêmica</button>
        </div>
        <div :class="{ 'hidden': !formacao }">
            @foreach ($formacao as $index => $form)
                <tr>
                    <td>
                        <div>
                            <label for="formacaoNome">Formacao {{$index + 1}}:</label>
                            <input type="text" id="formacaoNome[{{ $index }}]"
                                name="formacaoNome[{{ $index }}]" class="form-control w-full rounded"
                                wire:model.prevent="formacao.{{$index}}.formacaoNome"
                                required="">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="formacaoDescricao">Descrição da formação {{$index + 1}}:</label>
                            <textarea type="text" id="formacaoDescricao[{{ $index }}]" name="formacaoDescricao[{{ $index }}]"
                                class="form-control w-full rounded" required=""
                                wire:model.prevent="formacao.{{$index}}.formacaoDescricao"
                                ></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="text-end">
                            <button class="bg-red-500 w-44 h-8 rounded mt-4 text-white font-bold hover:bg-green-600"
                                    wire:click.prevent="removeFormacao({{ $index }})">Remover Formação {{$index + 1}}</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            <div class="text-center">
                <button class="bg-blue-500 w-44 h-8 rounded mt-4 text-white font-bold hover:bg-green-600"
                        wire:click.prevent="addFormacao">Adicionar formação</button>
            </div>
        </div>

        {{-- Formação Complementar --}}
        <div class="text-center mt-6">
            <button class="bg-blue-500 w-48 h-12 rounded" type="button" @click="formacaoComplementar = !formacaoComplementar">Formação
                Complementar</button>
        </div>
        <div :class="{ 'hidden': !formacaoComplementar }">

            @foreach ($formacaoComplementar as $index => $form)
                <tr>
                    <td>
                        <div>
                            <label for="formacaoComplementarNome">Formacao Complementar {{$index + 1}}:</label>
                            <input type="text" id="formacaoComplementarNome[{{ $index }}]"
                                name="formacaoComplementarNome[{{ $index }}]" class="form-control w-full rounded"
                                wire:model.prevent="formacaoComplementar.{{$index}}.formacaoComplementarNome"
                                required="">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="formacaoComplementarDescricao">Descrição da formação complementar{{$index + 1}}:</label>
                            <textarea type="text" id="formacaoComplementarDescricao[{{ $index }}]" name="formacaoComplementarDescricao[{{ $index }}]"
                                class="form-control w-full rounded" required=""
                                wire:model.prevent="formacaoComplementar.{{$index}}.formacaoComplementarDescricao"
                                ></textarea>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="formacaoComplementarHoras">Horas realizadas da formação {{$index + 1}}:</label>
                            <input type="number" id="formacaoComplementarHoras[{{ $index }}]" name="formacaoComplementarHoras[{{ $index }}]"
                                class="form-control w-full rounded" required=""
                                wire:model.prevent="formacaoComplementar.{{$index}}.formacaoComplementarHoras"
                                />
                        </div>
                    </td>
                    <td>
                        <div class="text-end">
                            <button class="bg-red-500 w-44 h-12 rounded mt-4 text-white font-bold hover:bg-green-600"
                                    wire:click.prevent="removeFormacaoComplentar({{ $index }})">Remover Formação Complementar {{$index + 1}}</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            <div class="text-center">
                <button class="bg-blue-500 w-44 h-12 rounded mt-4 text-white font-bold hover:bg-green-600"
                        wire:click.prevent="addFormacaoComplentar">Adicionar formação complementar</button>
            </div>
        </div>

        {{-- Experiência --}}
        <div class="text-center mt-6">
            <button class="bg-blue-500 w-48 h-12 rounded" type="button" @click="experiencia = !experiencia">Experiência</button>
        </div>
        <div :class="{ 'hidden': !experiencia }">

            @foreach ($experiencia as $index => $form)
                <tr>
                    <td>
                        <div>
                            <label for="experienciaNome">Experiência {{$index + 1}}:</label>
                            <input type="text" id="experienciaNome[{{ $index }}]"
                                name="experienciaNome[{{ $index }}]" class="form-control w-full rounded"
                                wire:model.prevent="experiencia.{{$index}}.experienciaNome"
                                required="">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="experienciaCargo">Cargo {{$index + 1}}:</label>
                            <input type="text" id="experienciaCargo[{{ $index }}]"
                                name="experienciaCargo[{{ $index }}]" class="form-control w-full rounded"
                                wire:model.prevent="experiencia.{{$index}}.experienciaCargo"
                                required="">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="experienciaInicioContrato">Inicio do contrato {{$index + 1}}:</label>
                            <input type="text" id="experienciaInicioContrato[{{ $index }}]"
                                name="experienciaInicioContrato[{{ $index }}]" class="form-control w-full rounded"
                                wire:model.prevent="experiencia.{{$index}}.experienciaInicioContrato"
                                required="">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="experienciaFimContrato">Fim do contrato {{$index + 1}}:</label>
                            <input type="text" id="experienciaFimContrato[{{ $index }}]"
                                name="experienciaFimContrato[{{ $index }}]" class="form-control w-full rounded"
                                wire:model.prevent="experiencia.{{$index}}.experienciaFimContrato"
                                required="">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label for="experienciaDescricao">Descrição da experiência {{$index + 1}}:</label>
                            <textarea type="text" id="experienciaDescricao[{{ $index }}]" name="experienciaDescricao[{{ $index }}]"
                                class="form-control w-full rounded" required=""
                                wire:model.prevent="experiencia.{{$index}}.experienciaDescricao"
                                ></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="text-end">
                            <button class="bg-red-500 w-44 h-8 rounded mt-4 text-white font-bold hover:bg-green-600"
                                    wire:click.prevent="removeExperiencia({{ $index }})">Remover Experiência {{$index + 1}}</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            <div class="text-center">
                <button class="bg-blue-500 w-44 h-8 rounded mt-4 text-white font-bold hover:bg-green-600"
                        wire:click.prevent="addExperiencia">Adicionar experiência</button>
            </div>
        </div>

        {{-- Habilidades --}}
        <div class="text-center mt-6">
            <button class="bg-blue-500 w-48 h-12 rounded" type="button" @click="habilidades = !habilidades">Habilidades</button>
        </div>
        <div :class="{ 'hidden': !habilidades }">
            @foreach ($habilidades as $index => $form)
                <tr>
                    <td>
                        <div>
                            <label for="habilidadesDescricao">Descreva a Habilidade {{$index + 1}}:</label>
                            <textarea type="text" id="habilidadesDescricao[{{ $index }}]" name="habilidadesDescricao[{{ $index }}]"
                                class="form-control w-full rounded" required=""
                                wire:model.prevent="habilidades.{{$index}}.habilidadesDescricao"
                                ></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="text-end">
                            <button class="bg-red-500 w-44 h-8 rounded mt-4 text-white font-bold hover:bg-green-600"
                                    wire:click.prevent="removeHabilidades({{ $index }})">Remover Habilidade {{$index + 1}}</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            <div class="text-center">
                <button class="bg-blue-500 w-44 h-8 rounded mt-4 text-white font-bold hover:bg-green-600"
                        wire:click.prevent="addHabilidades">Adicionar Habilidade</button>
            </div>
        </div>
        <div class="text-center">
            <button type="submit"
                class="bg-green-500 w-36 h-8 rounded mt-4 text-white font-bold hover:bg-green-600">Finalizar</button>
        </div>
    </form>
</div>
