<x-layout>
    <div class="h-screen bg-white flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form action="{{route('registered')}}" method="POST" class="bg-white rounded-md shadow-2xl p-5 min-w-full">
                @csrf
                <h1 class="text-center text-2xl mb-12 text-gray-600 font-bold font-sans rounded-2xl">Registre-se</h1>
                <div>
                    <input value="{{old('name')}}" class="w-full bg-gray-100 text-gray-500 px-4 py-3 rounded-2xl focus:outline-none" type="text" name="name" id="name" placeholder="Nome Completo" />
                    @error('name')
                    <p class="bg-red-50 border border-red-500 text-red-500 px-4 py-1 rounded-2xl relative" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input value="{{old('username')}}" class="w-full bg-gray-100 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="text" name="username" id="username" placeholder="Username" />
                    @error('username')
                    <p class="bg-red-50 border border-red-500 text-red-500 px-4 py-1 rounded-2xl relative" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input value="{{old('email')}}" class="w-full bg-gray-100 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="text" name="email" id="email" placeholder="Email" />
                    @error('email')
                    <p class="bg-red-50 border border-red-500 text-red-500 px-4 py-1 rounded-2xl relative" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input class="w-full bg-gray-100 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="password" name="password" id="password" placeholder="Senha" />
                    @error('password')
                    <p class="bg-red-50 border border-red-500 text-red-500 px-4 py-1 rounded-2xl relative" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <input class="w-full bg-gray-100 text-gray-500 px-4 py-3 mt-6 rounded-2xl focus:outline-none" type="password" name="password_confirmation" id="confirm" placeholder="Confirme a Senha" />
                    @error('password_confirmation')
                    <p class="bg-red-50 border border-red-500 text-red-500 px-4 py-1 rounded-2xl relative" role="alert">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="block w-full bg-purple-600 mt-12 py-2 rounded-2xl hover:bg-purple-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Registrar</button>
            </form>
            <form action="/" method="POST">
                @csrf
                @method('GET')
                <div class="text-center">
                    <button type="submit" class="bg-purple-500 mt-6 hover:bg-purple-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all text-white font-bold py-2 px-4 w-1/4 rounded-2xl">
                        Voltar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>