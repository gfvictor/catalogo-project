<x-layout>
    @csrf
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <div class="max-w-md mx-auto">
        <h1 class="text-3xl font-bold mt-12 text-center mb-2">Bem-vindo ao App de Organização de Objetos,</h1>
        <h2 class="text-3xl font-bold text-center mb-8">{{auth()->user()->name}}</h2>

        <div class="flex justify-center">
        <table class="w-full bg-white shadow-md rounded my-4">
            <thead class="bg-gray-200">
            <tr>
                <th class="text-center py-2 px-4">Objeto</th>
                <th class="text-center py-2 px-4">Unid.</th>
                <th class="text-center py-2 px-4">Local</th>
                <th class="text-center py-2 px-4">Adicionado</th>
                <th class="text-center py-2 px-4">Modificado</th>
                <th class="text-center py-2 px-4">Categoria</th>
                <th class="text-center py-2 px-4">Apagar</th>
            </tr>
            </thead>
            <tbody>
                 @foreach($objects as $object)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="border px-4 py-2 truncate max-w-48"><a class="hover:text-purple-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all rounded"
                                                                      href="/edit-form/{{$object->id}}">{{$object->object_name}}</a></td>
                    <td class="border text-center text-sm px-4 py-2 truncate max-w-48">{{$object->quantity}}</td>
                    <td class="border text-center text-sm px-4 py-2 truncate max-w-64">{{$object->container_type.' '.$object->container_name}}<strong> &rarr; </strong>{{$object->container_room}}</td>
                    <td class="border text-sm px-4 py-2 truncate max-w-xs">{{$object->created_at->format('Y/m/d')}}</td>
                    @if($object->updated_at == $object->created_at)
                    <td class="border text-center text-sm px-4 py-2 truncate max-w-xs"> - </td>
                    @else
                    <td class="border text-sm px-4 py-2 truncate max-w-xs">{{$object->updated_at->format('Y/m/d')}}</td>
                    @endif
                    <td class="border text-center text-sm px-4 py-2 truncate max-w-xs">{{$object->object_tag}}</td>
                    <td class="flex justify-center border px-4 py-2">
                        <form action="{{route('objects.delete', ['id' => $object->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                            <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        </div>
        <form action="/create-form" method="POST">
        @csrf
        @method('GET')
            <div class="text-center">
                <button type="submit" class="bg-purple-500 hover:bg-purple-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all text-white font-bold mt-6 py-2 px-4 rounded-2xl modal-open-btn"
                        data-target="modal">
                    Adicionar Novo Objeto
                </button>
            </div>
        </form>
        <form action="/" method="POST">
        @csrf
        @method('GET')
            <div class="text-center">
                <button type="submit" class="bg-purple-500 mt-6 hover:bg-purple-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all text-white font-bold py-2 px-4 rounded-2xl">
                    Voltar
                </button>
            </div>
        </form>
    </div>
</x-layout>