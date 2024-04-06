<x-layout>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <div class="max-w-md mx-auto">
        <h1 class="text-3xl font-bold mt-12 text-center mb-8">Bem-vindo ao App de Organização de Objetos</h1>

        <div class="flex justify-center">
        <table class="w-full bg-white shadow-md rounded my-4">
            <thead class="bg-gray-200">
            <tr>
                <th class="text-center py-2 px-4">Objeto</th>
                <th class="text-center py-2 px-4">Local</th>
                <th class="text-center py-2 px-4">Adicionado</th>
                <th class="text-center py-2 px-4">Tags</th>
                <th class="text-center py-2 px-4">Editar</th>
                <th class="text-center py-2 px-4">Apagar</th>
            </tr>
            </thead>
            <tbody>
{{--            <tr class="{{$loop->iteration % 2 == 0 ? 'bg-white' : 'bg-gray-100'}}">--}}
                <tr>
                <td class="border px-4 py-2 truncate max-w-48">Objeto cujo o nome é extremamente grande</td>
                <td class="border px-4 py-2 truncate max-w-64">Modelo de local cujo o nome é muito grande</td>
                <td class="border text-sm px-4 py-2 truncate max-w-xs">2024/11/11 as 11:11</td>
                <td class="border text-sm px-4 py-2 truncate max-w-xs">#ExemploDeTag</td>
                <td class="border px-4 py-2 truncate max-w-xs"></td>
                <td class="flex justify-center border px-4 py-2">
                    <form action="/overview" method="POST">
                    <button type="submit" class="text-red-500 hover:text-red-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                        <i class="fas fa-trash-alt"></i>
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                        </svg>--}}
                    </button>
                    </form>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2 truncate max-w-xs">Objeto 2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="flex justify-center border px-4 py-2">
                    <button class="text-red-500 hover:text-red-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        <form action="/create-form" method="GET">
        <div class="text-center">
            <button type="submit" class="bg-purple-500 hover:bg-purple-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all text-white font-bold py-2 px-4 rounded-2xl">
                Adicionar Novo Objeto
            </button>
        </div>
        </form>
    </div>
</x-layout>