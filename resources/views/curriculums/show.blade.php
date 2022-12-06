<x-admin-layout>
    <div class="m-4 text-center flex justify-between">
        <br>
        <h1 class="font-bold text-xl mb-4">Curriculo #{{$curriculum->id}}</h1>
        <a href="{{route('curriculums.edit', $curriculum)}}"><button class="w-48 h-8 rounded text-white font-bold bg-green-600">Editar</button></a>
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

</x-admin-layout>
