<x-layout>
    @csrf
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <h1 class="text-3xl mt-12 text-center mb-2">Exibindo Resultados para:</h1>
        <p class="text-2xl text-purple-500 text-center mt-4 mb-4"><strong>"{{ucfirst($term)}}"</strong></p>
    <div class="max-w-md mx-auto">
        <form action="{{route('search', 'term')}}" method="GET">
            <input class="w-full shadow-md text-center bg-gray-100 placeholder-gray-400 text-gray-500 px-4 py-3 mt-6 mb-1 rounded-2xl border-0 focus:outline-none" type="search" name="search"
                   placeholder="O que você procura?">
            <div class="flex justify-center">
                <button class="container shadow-md mb-6 border bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 w-1/4 duration-500 transition-all rounded-2xl" type="submit">Buscar</button>
            </div>
        </form>
        <div class="flex justify-center">
            <table class="w-full bg-white shadow-md rounded my-4">
                <thead class="bg-gray-100">
                <tr>
                    <th class="text-center py-2 px-4">Objeto</th>
                    <th class="text-center py-2 px-4">Unid.</th>
                    <th class="text-center py-2 px-4">Local</th>
                    <th class="text-center py-2 px-4">Imagem</th>
                    <th class="text-center py-2 px-4">Adicionado</th>
                    <th class="text-center py-2 px-4">Modificado</th>
                    <th class="text-center py-2 px-4">Categoria</th>
                    <th class="text-center py-2 px-4">Apagar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($objects as $object)
                        @if(stripos($object->object_name, $term) !== false || stripos($object->container_room, $term) !== false || stripos($object->object_tag, $term) !== false )
                    <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="border px-4 py-2 truncate max-w-48"><a class="hover:text-purple-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all rounded"
                                                                              href="/edit-form/{{$object->id}}">{{$object->object_name}}</a></td>
                            <td class="border text-center text-sm px-4 py-2 truncate max-w-48">{{$object->quantity}}</td>
                            <td class="border text-center text-sm px-4 py-2 truncate max-w-64">{{$object->container_type}}<strong> &rarr; </strong>{{$object->container_room}}</td>
                            <td class="border text-center text-sm px-4 py-2 truncate max-w-64"></td>
                            <td class="border text-sm px-4 py-2 truncate max-w-xs">{{$object->created_at->format('Y/m/d')}}</td>
                            @if($object->updated_at == $object->created_at)
                                <td class="border text-center text-sm px-4 py-2 truncate max-w-xs"> -</td>
                            @else
                                <td class="border text-sm px-4 py-2 truncate max-w-xs">{{$object->updated_at->format('Y/m/d')}}</td>
                            @endif
                            <td class="border text-center text-sm px-4 py-2 truncate max-w-xs">{{$object->object_tag}}</td>
                            <td class="flex justify-center border px-4 py-2">
                                <form action="{{route('delete', ['id' => $object->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <form action="/overview/{{auth()->user()->id}}" method="POST">
            @csrf
            @method('GET')
            <div class="text-center">
                <button type="submit" class="bg-purple-500 mt-6 hover:bg-purple-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all text-white font-bold py-2 px-4 w-1/4 rounded-2xl">
                    Voltar
                </button>
            </div>
        </form>
    </div>
</x-layout>