<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <script>

        let helpers = document.createElement('script')
        helpers.setAttribute('src', '/vuexy-vendor-assets/js/helpers.js')
        document.body.appendChild(helpers)

        let configScript = document.createElement('script')
        configScript.setAttribute('src', '/vuexy-vendor-assets/js/config.js')
        document.body.appendChild(configScript)

        let jquery = document.createElement('script')
        jquery.setAttribute('src', '/vuexy-vendor-assets/libs/jquery/jquery.js')
        jquery.setAttribute('id', 'jquery-js')
        document.body.appendChild(jquery)

        let popper = document.createElement('script')
        popper.setAttribute('src', '/vuexy-vendor-assets/libs/popper/popper.js')
        document.body.appendChild(popper)

        let bootstrap = document.createElement('script')
        bootstrap.setAttribute('src', '/vuexy-vendor-assets/js/bootstrap.js')
        document.body.appendChild(bootstrap)

        let perfectScrollbar = document.createElement('script')
        perfectScrollbar.setAttribute('src', '/vuexy-vendor-assets/libs/perfect-scrollbar/perfect-scrollbar.js')
        document.body.appendChild(perfectScrollbar)

        let nodeWaves = document.createElement('script')
        nodeWaves.setAttribute('src', '/vuexy-vendor-assets/libs/node-waves/node-waves.js')
        document.body.appendChild(nodeWaves)

        let hammer = document.createElement('script')
        hammer.setAttribute('src', '/vuexy-vendor-assets/libs/hammer/hammer.js')
        document.body.appendChild(hammer)

        let apexCharts = document.createElement('script')
        apexCharts.setAttribute('src', '/vuexy-vendor-assets/libs/apex-charts/apexcharts.js')
        document.body.appendChild(apexCharts)

        </script>

    </body>


</html>
