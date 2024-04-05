<x-layout>
    <div class="max-w-md mx-auto">
        <!-- Mensagem de boas-vindas -->
        <h1 class="text-3xl font-bold text-center mb-8">Bem-vindo ao App de Organização de Objetos</h1>

        <!-- Tabela com objetos existentes -->
        <table class="w-full bg-white shadow-md rounded my-4">
            <thead class="bg-gray-200">
            <tr>
                <th class="text-left py-2 px-4">Objeto</th>
                <th class="text-left py-2 px-4">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border px-4 py-2">Objeto 1</td>
                <td class="border px-4 py-2">
                    <button class="text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Objeto 2</td>
                <td class="border px-4 py-2">
                    <button class="text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="text-center">
            <button class="bg-purple-500 hover:bg-purple-700 cursor-pointer hover:-translate-y-1 duration-500 transition-all text-white font-bold py-2 px-4 rounded-2xl">
                Adicionar Novo Objeto
            </button>
        </div>
    </div>
</x-layout>