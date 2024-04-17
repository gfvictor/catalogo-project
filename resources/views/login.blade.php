<x-layout>
<form action="/logout" method="POST">
    @csrf
    <div class="flex items-center justify-center h-screen bg-gray-200">
        <div class="container">
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
                <div class="text-center">
                    <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Meu<span class="text-indigo-600">APP</span>
                    </h2>
                    <p class="text-md md:text-xl mt-10"><a class="hover:underline" href="https://www.quicktoolz.com">Nome do App</a> um web app que torna mais fácil a organização da casa.</p>
                </div>
                <div>
                    <div class="flex justify-center text-center">
                        <a href="/overview/{{auth()->user()->id}}" title="Quicktoolz On Facebook"
                           class="bg-purple-500 mt-16 py-3 px-6 rounded-2xl hover:bg-purple-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">
                            @csrf
                            <span class="mx-auto">Sua Lista de Objetos</span>
                        </a>
                    </div>
                    <div class="flex justify-center text-center">
                        <button type="submit" class="bg-purple-500 mt-2 py-3 px-6 rounded-2xl hover:bg-purple-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Logout</button>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                @csrf

            </div>
        </div>
    </div>
</form>
</x-layout>

