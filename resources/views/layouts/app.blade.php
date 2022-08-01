<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}
        <link rel="icon" href="{{asset('asset1/assets/images/favicon-32x32.png')}}" type="image/png" />
        <!--plugins-->
        <link href="{{asset('asset1/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="{{asset('asset1/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/css/icons.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- loader-->
        <link href="{{asset('asset1/assets/css/pace.min.css')}}" rel="stylesheet" />


        <!--Theme Styles-->
        <link href="{{asset('asset1/assets/css/dark-theme.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/css/light-theme.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/css/semi-dark.css')}}" rel="stylesheet" />
        <link href="{{asset('asset1/assets/css/header-colors.css')}}" rel="stylesheet" />

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner></x-jet-banner>


        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="p-6 bg-gray-200 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                {{ $slot }}
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Bootstrap bundle JS -->
        <script src="{{asset('asset1/assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--plugins-->
        <script src="{{asset('asset1/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('asset1/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
        <script src="{{asset('asset1/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('asset1/assets/js/pace.min.js')}}"></script>
        <script src="{{asset('asset1/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('asset1/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('asset1/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
        <!--app-->
        <script src="{{asset('asset1/assets/js/app.js')}}"></script>
        <script src="{{asset('asset1/assets/js/index.js')}}"></script>

        <script>
            new PerfectScrollbar(".best-product")
            new PerfectScrollbar(".top-sellers-list")
        </script>
    </body>
</html>

