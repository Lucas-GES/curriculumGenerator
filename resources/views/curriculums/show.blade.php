<x-admin-layout>
    <div class="m-4 text-center flex justify-between">
        <br>
        <h1 class="font-bold text-xl mb-4">Curriculo #{{$curriculum->id}}</h1>
        <div class="flex">
            <a href="{{route('curriculums.edit', $curriculum)}}"><button class="w-48 h-8 rounded text-white font-bold bg-green-600">Editar</button></a>
            <form class="ml-2" action="{{route('curriculums.destroy', $curriculum)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="w-48 h-8 rounded text-white font-bold bg-red-400">Excluir</button>
            </form>
        </div>
    </div>
    <div class="ml-12">
        <div>
            <label for="nome"><span class="font-bold text-xl">Seu nome: </span><span class="text-xl uppercase">{{$curriculum->nome}}</span></label>
        </div>
        <div class="mt-4">
            <label for="nacionalidade"><span class="font-bold text-xl">Sua nacionalidade: </span><span class="text-xl uppercase">{{$curriculum->nacionalidade}}</span></label>
        </div>
        <div class="mt-4">
            <label for="idade"><span class="font-bold text-xl">Sua idade: </span><span class="text-xl uppercase">{{$curriculum->idade}}</span></label>
        </div>
        <div class="mt-4">
            <label for="estadoCivil"><span class="font-bold text-xl">Seu estado civil: </span><span class="text-xl uppercase">{{$curriculum->estadoCivil}}</span></label>
        </div>
        <div class="mt-4">
            <label for="rua"><span class="font-bold text-xl">Sua rua: </span><span class="text-xl uppercase">{{$curriculum->rua}}</span></label>
        </div>
        <div class="mt-4">
            <label for="numero"><span class="font-bold text-xl">Numero da casa: </span><span class="text-xl uppercase">{{$curriculum->numero}}</span></label>
        </div>
        <div class="mt-4">
            <label for="bairro"><span class="font-bold text-xl">Seu bairro: </span><span class="text-xl uppercase">{{$curriculum->bairro}}</span></label>
        </div>
        <div class="mt-4">
            <label for="cidade"><span class="font-bold text-xl">Sua cidade: </span><span class="text-xl uppercase">{{$curriculum->cidade}}</span></label>
        </div>
        <div class="mt-4">
            <label for="estado"><span class="font-bold text-xl">Seu estado: </span><span class="text-xl uppercase">{{$curriculum->estado}}</span></label>
        </div>
        <div class="mt-4">
            <label for="email"><span class="font-bold text-xl">Seu email: </span><span class="text-xl uppercase">{{$curriculum->email}}</span></label>
        </div>
        <div class="mt-4">
            <label for="telefone"><span class="font-bold text-xl">Seu telefone: </span><span class="text-xl uppercase">{{$curriculum->telefone}}</span></label>
        </div>
        <div class="mt-4">
            <label for="perfil"><span class="font-bold text-xl">Breve descrição do seu perfil: </span><span class="text-xl">{{$curriculum->perfil}}</span></label>
            <p></p>
        </div>
    </div>
    <div class="ml-12 mr-4 mt-4 border-t-2 border-t-black">
        <div class="text-center m-4">
            <h1 class="font-bold text-xl mb-4">Formação Acadêmica</h1>
        </div>
        @foreach ($curriculum->formacao as $index => $formacao)
            <div class="mt-4 mb-4">
                <h1 class="text-xl font-bold">Formação #{{$index + 1}}</h1>
                <div class="mt-4">
                    <label for="nome"><span class="font-bold">Nome: </span><span class=" uppercase">{{$formacao->nome}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="descricao"><span class="font-bold ">Descrição: </span><span class=" uppercase">{{$formacao->descricao}}</span></label>
                </div>
            </div>
        @endforeach
    </div>

    <div class="ml-12 mr-4 mt-4 border-t-2 border-t-black">
        <div class="text-center m-4">
            <h1 class="font-bold text-xl mb-4">Formação Complementar</h1>
        </div>
        @foreach ($curriculum->formacaoComplementar as $index => $formacao)
            <div class="mt-4 mb-4">
                <h1 class="text-xl font-bold">Formação Complementar #{{$index + 1}}</h1>
                <div class="mt-4">
                    <label for="nome"><span class="font-bold">Nome: </span><span class=" uppercase">{{$formacao->nome}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="descricao"><span class="font-bold ">Descrição: </span><span class=" uppercase">{{$formacao->descricao}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="descricao"><span class="font-bold ">Horas: </span><span class=" uppercase">{{$formacao->horas}}</span></label>
                </div>
            </div>
        @endforeach
    </div>

    <div class="ml-12 mr-4 mt-4 border-t-2 border-t-black">
        <div class="text-center m-4">
            <h1 class="font-bold text-xl mb-4">Experiência</h1>
        </div>
        @foreach ($curriculum->experiencia as $index => $experiencia)
            <div class="mt-4 mb-4">
                <h1 class="text-xl font-bold">Experiência #{{$index + 1}}</h1>
                <div class="mt-4">
                    <label for="nome"><span class="font-bold">Nome: </span><span class=" uppercase">{{$experiencia->nome}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="cargo"><span class="font-bold ">Cargo: </span><span class=" uppercase">{{$experiencia->cargo}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="inicioContrato"><span class="font-bold ">Inicio do Contrato: </span><span class=" uppercase">{{$experiencia->inicioContrato}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="fimContrato"><span class="font-bold ">Fim do Contrato: </span><span class=" uppercase">{{$experiencia->fimContrato}}</span></label>
                </div>
                <div class="mt-4">
                    <label for="descricao"><span class="font-bold ">Descrição: </span><span class=" uppercase">{{$experiencia->descricao}}</span></label>
                </div>
            </div>
        @endforeach
    </div>

    <div class="ml-12 mr-4 mt-4 border-t-2 border-t-black">
        <div class="text-center m-4">
            <h1 class="font-bold text-xl mb-4">Habilidades</h1>
        </div>
        @foreach ($curriculum->habilidades as $index => $habilidade)
            <div class="mt-4 mb-4">
                <h1 class="text-xl font-bold">Habilidade #{{$index + 1}}</h1>
                <div class="mt-4">
                    <label for="nome"><span class="font-bold">Descrição: </span><span class=" uppercase">{{$habilidade->descricao}}</span></label>
                </div>
            </div>
        @endforeach
    </div>

</x-admin-layout>
