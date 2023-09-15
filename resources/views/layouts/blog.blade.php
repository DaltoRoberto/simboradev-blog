<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('app.name') .  (isset($title) ? " - ".$title : '')  }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite('resources/css/app.css')
</head>
<body>

@include('components.navbar')

<!-- begin:content -->
<main class="py-10">
    @yield('content')
</main>
<!-- end:content -->
@include('components.footer')

@vite('resources/js/app.js')
</body>
</html>
