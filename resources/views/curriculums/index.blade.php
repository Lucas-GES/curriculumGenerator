<x-admin-layout>

    <div class="m-4 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($curriculums as $curriculum)
            <a href="{{route('curriculums.show', $curriculum)}}" class="group">
                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                    <img src='{{asset('document.png')}}' alt="Document" class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h1 class="mt-4 text-xl text-black-700 font-bold">Curriculo: {{$curriculum->nome}}</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Criado: {{$curriculum->created_at}}</p>
            </a>

        @endforeach
    </div>

</x-admin-layout>
