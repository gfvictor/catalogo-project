<x-layout>
    <div class="h-screen bg-white flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form action="{{route('update', ['id' => $object->id])}}" method="POST" class="bg-white rounded-md shadow-2xl p-5 min-w-full">
                @csrf
                @method('PUT')
                <h1 class="text-center text-2xl mb-12 text-gray-600 font-bold font-sans rounded-2xl">Editar Objeto</h1>
                <div>
                    <input value="{{$object->object_name}}" class="w-full bg-gray-100 placeholder-gray-400 text-gray-500 px-4 py-3 rounded-2xl focus:outline-none" type="text" name="object_name" id="object_name"
                           placeholder="Nome do Objeto" />
                    @error('object_name')
                    <p class="text-sm text-red-500 ml-4" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input value="{{$object->quantity}}" class="w-full bg-gray-100 placeholder-gray-400 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="number" min="1" name="quantity" id="quantity"
                           placeholder="Quantidade" />
                    @error('quantity')
                    <p class="text-sm text-red-500 ml-4" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input value="{{$object->container_type}}" class="w-full bg-gray-100 placeholder-gray-400 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="text" name="container_type" id="container_type"
                           placeholder="Tipo de Container" />
                    @error('container_type')
                    <p class="text-sm text-red-500 ml-4" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input value="{{$object->container_room}}" class="w-full bg-gray-100 placeholder-gray-400 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="text" name="container_room" id="container_room"
                           placeholder="Local do Container" />
                    @error('container_room')
                    <p class="text-sm text-red-500 ml-4" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input value="{{$object->object_tag}}" class="w-full bg-gray-100 placeholder-gray-400 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="text" name="object_tag" id="object_tag"
                           placeholder="" />
                    @error('object_tag')
                    <p class="text-sm text-red-500 ml-4" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div class="container flex justify-center items-center">
                    <button type="submit" class="block w-1/4 bg-purple-500 mt-12 py-2 px-4 rounded-2xl hover:bg-purple-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Editar</button>
                </div>
            </form>

            <form action="{{route('overview', ['id' => auth()->user()->id])}}" method="POST">
                @csrf
                @method('GET')
                <div class="container flex justify-center items-center">
                    <button type="submit" class="block bg-purple-500 mt-6 py-2 px-4 rounded-2xl hover:bg-purple-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Voltar</button>
                </div>
            </form>

        </div>
    </div>
</x-layout>