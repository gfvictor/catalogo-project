<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Catalogo | APP</title>
</head>
<header>
    @auth()
    <div class="flex py-4 px-4 bg-gray-100 border border-gray-300">
        <div>
            <p>Bem vindo(a), <span class=" text-purple-500"><strong>{{auth()->user()->name}}</strong></span></p>
        </div>
    </div>
    @else
    <div class="flex py-4 px-4 bg-gray-100 border border-gray-300 text-purple-500">
        <div>
        <strong>Login <span class="text-gray-400">ou</span> Registre-se</strong>
        </div>
    </div>
    @endauth
</header>
<body>
    @if(session()->has('success'))
        <div class="flex justify-center items-center">
            <div class="bg-green-50 border border-green-500 text-green-500 px-6 py-4" role="alert">{{session('success')}}</div>
        </div>
    @endif
    @if(session()->has('failure'))
        <div class="flex justify-center items-center">
            <div class="text-center bg-red-50 border border-red-500 text-red-500 px-6 py-4" role="alert">{{session('failure')}}</div>
        </div>
    @endif
    {{$slot}}
</body>
</html>