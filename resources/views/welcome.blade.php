<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-between py-2 mx-auto w-[80%]">
        <div class="">SimboraDev</div>
        <div class="flex gap-4 items-end">
            <a href="/login" class="px-4 py-2 rounded bg-blue-400 text-white">Login</a>
            <a href="/register" class="px-4 py-2 rounded bg-blue-400 text-white">Registrar</a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>