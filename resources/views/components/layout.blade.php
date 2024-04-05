<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Catalogo | APP</title>
</head>
<body>
    @if(session()->has('success'))
        <div>
            <div class="text-center mt-4 bg-green-50 border border-green-500 text-green-500 px-4 py-1 rounded-2xl relative" role="alert">{{session('success')}}</div>
        </div>
    @endif
    {{$slot}}
</body>
</html>