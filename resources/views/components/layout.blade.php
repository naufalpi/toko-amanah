<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>TOKO AMANAH</title>
       
    </head>
    <body class="h-full">

        <div class="min-h-full">
            
            <x-navbar></x-navbar>
            <x-header>{{ $title }}</x-header>

            <main>
                <div class="mx-auto max-w-full py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>

        </div>
  
    </body>
</html>
