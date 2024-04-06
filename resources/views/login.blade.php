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
                    <h3 class='text-xl md:text-3xl mt-10'>Coming Soon</h3>
                    <p class="text-md md:text-xl mt-10"><a class="hover:underline" href="https://www.quicktoolz.com">Nome do App</a> um web app que torna mais fácil a organização da casa.</p>
                </div>
                <div class="flex flex-wrap mt-10 justify-center">
                    <div class="m-3">
                        <a href="#" title="Quicktoolz On Facebook"
                           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mx-auto">Sobre</span>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" title="Quicktoolz On Twitter"
                           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mx-auto">Imagens</span>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="#" title="Quicktoolz On Pinterest"
                           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mx-auto">Criadores</span>
                        </a>
                    </div>
                    <div class="m-3">
                        <a href="/overview" title="Quicktoolz On Facebook"
                           class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-orange-500 hover:border-orange-500 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mx-auto">Demo</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
            <button type="submit" class="bg-purple-500 mt-12 py-3 px-6 rounded-2xl hover:bg-purple-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold
                    mb-2">Logout</button>
            </div>
        </div>
    </div>
</form>
</x-layout>

