<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO -->
    <meta name="author" content="{{ $pageTitle }}">
    <meta name="title" content="{{ $pageTitle }}">
    <meta name="keyword" content="{{ $metaWord }}">
    <meta name="description" content="{{ $metaDescription }}">

    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $pageTitle }}" />
    <meta property="og:description" content="{{ $metaDescription }}" />
    <meta property="og:image" content="https://ourdharan.com/featured/1703428948.jpg" />

    <title>{{ $pageTitle }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header Section -->
    <x-topbar />
    <x-navbar />
    <!-- Main Section -->
    <main>
        {{ $slot }}
    </main>
    <!-- Footer Section -->
</body>

</html>
