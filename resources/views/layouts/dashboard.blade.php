<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-green-900 text-white min-h-screen">
        <div class="p-6 text-2xl font-bold border-b border-green-700">
            Mis vuelos
        </div>
        <nav class="mt-6 space-y-2">
            <a href="#" class="flex items-center px-4 py-2 hover:bg-green-700 rounded">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 12l2-2m0 0l7-7 7 7M13 5v14"></path>
                </svg>
                Inicio
            </a>
            <a href="{{ route('aerolineas.index') }}" class="flex items-center px-4 py-2 hover:bg-green-700 rounded">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M9 17v-6h13v6H9z"></path>
                </svg>
                Aerolineas
            </a>
            <a href="{{ route('vuelos.index') }}" class="flex items-center px-4 py-2 hover:bg-green-700 rounded">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M20 13V7a2 2 0 00-2-2h-4l-4-4H4a2 2 0 00-2 2v6"></path>
                </svg>
                Vuelos
            </a>
            <a href="{{ route('pasajeros.index') }}" class="flex items-center px-4 py-2 hover:bg-green-700 rounded">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 8c-1.1 0-2 .9-2 2v8h4v-8c0-1.1-.9-2-2-2z"></path>
                </svg>
                Pasajeros
            </a>
            
            <a href="#" class="flex items-center px-4 py-2 hover:bg-green-700 rounded">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4"></path>
                </svg>
                Ayuda
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <h1 class="text-3xl font-bold text-green-900 mb-6">Bienvenido al Dashboard</h1>
        <div class="bg-white shadow rounded p-6">
            @yield('content')
        </div>
    </main>

</body>
</html>
