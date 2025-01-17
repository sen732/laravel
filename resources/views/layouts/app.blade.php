<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
    <ul>
        <li><a href="{{ route('sanitation-facilities.index') }}" style="color: #FFFFFF; text-decoration: none; padding: 0.5rem 1rem; border-radius: 0.25rem; display: inline-block; background-color: #3490dc;" class="btn btn-primary mb-2">Sanitation Facilities</a></li>
        <li><a href="{{ route('water-sources.index') }}" style="color: #FFFFFF; text-decoration: none; padding: 0.5rem 1rem; border-radius: 0.25rem; display: inline-block; background-color: #3490dc;" class="btn btn-primary mb-2">Water Sources</a></li>
    </ul>
</main>

</div>
    </div>
            </main>
        </div>
    </body>
</html>
