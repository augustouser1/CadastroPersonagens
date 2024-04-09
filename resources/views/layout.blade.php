<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('navbar')
    @endcomponent
    <main role="main" class="flex-shrink-0">
        <div class="container">
            @hasSection('content')
              @yield('content')
            @endif
</div>
</main>

    @hasSection('javascript')
         @yield('javascript')
    @endif

</body>
</html>