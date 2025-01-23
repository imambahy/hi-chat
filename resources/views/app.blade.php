<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- class="dark" --}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        {{-- icon --}}
        <link rel="icon" href="{{ asset('images/logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,400..700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.tsx', "resources/js/pages/{$page['component']}.tsx"])
        @inertiaHead

        <script>
            const html = document.documentElement
            const theme = localStorage.getItem('theme')

            if(theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)')){
                html.classList.add('dark')
            }else if (theme === 'dark'){
                html.classList.add('dark')
            }else if(theme === 'light'){
                html.classList.remove('dark')
            }else {
                // if ini jika localStorage = theme belum ada
                if(window.matchMedia('(prefers-color-scheme)')){
                    html.classList.add('dark')
                }else{
                    html.classList.remove('dark')
                }
            }
        </script>

        <style>
            /* saat html punya kelas dark */
            html.dark{
                background: hsl(200, 6%, 10%);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
