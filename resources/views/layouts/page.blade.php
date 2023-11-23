<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <title>HOMESTEAD ROAD</title>
</head>
<body>
    <header>
        @include('components.navbar')
    </header>
    <main>
        <article class="article">
            @include('components.banner')
            @include('components.aboutUs')
            @include('components.service')
            @include('components.property')
            @include('components.contact')
            @include('components.footer')
        </article>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="{{ asset('assets/js/hamburgerButton.js') }}"></script>
</body>
</html>
