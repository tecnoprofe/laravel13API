<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Base</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 text-xl font-bold">
                    MiApp
                </div>
                <!-- Menús -->
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-gray-200">Inicio</a>
                    <a href="#" class="hover:text-gray-200">Servicios</a>
                    <a href="#" class="hover:text-gray-200">Productos</a>
                    <a href="#" class="hover:text-gray-200">Blog</a>
                    <a href="#" class="hover:text-gray-200">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto p-6">
        <!-- Aquí se inyecta el contenido dinámico -->
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4 mt-10">
        <p>&copy; 2026 MiApp. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
