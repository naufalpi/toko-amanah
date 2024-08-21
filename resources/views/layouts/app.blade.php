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
            
            @include('layouts.partials.navbar') 
            @include('layouts.partials.header', ['slot' => $title])
    

            <main class="p-4 md:ml-64 h-auto pt-20">
                
                @yield('content')
               
            </main>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
