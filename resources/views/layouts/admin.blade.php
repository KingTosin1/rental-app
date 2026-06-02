<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Rental Application Portal') }} - Admin</title>

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        html { font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, 'Apple Color Emoji','Segoe UI Emoji'; }
    </style>
</head>
<body class="bg-white text-slate-900">
    <div class="min-h-screen">
        <header class="border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-blue-600 text-white flex items-center justify-center font-bold">R</div>
                    <div>
                        <div class="text-sm font-semibold">Rental Application Portal</div>
                        <div class="text-xs text-slate-500">Admin</div>
                    </div>
                </div>

                <a href="{{ route('home') }}" class="text-sm text-slate-600 hover:text-slate-900">Back to site</a>
            </div>
        </header>

        <main class="max-w-6xl mx-auto px-4 py-6">
            @yield('content')
        </main>
    </div>
</body>
</html>

