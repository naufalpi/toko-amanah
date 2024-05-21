<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <title>Dashboard</title>
       
    </head>
    <body class="h-full">

        <div class="min-h-full">
            
            <div class="antialiased bg-gray-50 dark:bg-gray-900">
                <x-dashboard-navbar></x-dashboard-navbar>
                <x-dashboard-sidebar></x-dashboard-sidebar>
                <!-- Sidebar -->
            
             
            
                <main class="p-4 md:ml-64 h-auto pt-20">
                  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                    <div
                      class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
                    ></div>
                  </div>
                  <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
                  ></div>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                  </div>
                  <div
                    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
                  ></div>
                  <div class="grid grid-cols-2 gap-4">
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                    <div
                      class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
                    ></div>
                  </div>
                </main>
              </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
</html>
