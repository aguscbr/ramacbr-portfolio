<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'Desarrollador fullstack especializado en Laravel y Vue.js' }}">
    <title>{{ $title ?? 'Tu Nombre — Fullstack Developer' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#0f1117] text-white font-sans antialiased">

    <nav class="max-w-5xl mx-auto px-6 py-6 flex justify-between items-center">
        <span class="font-mono text-[#c8f04c] text-sm tracking-widest">/* ramacbr.dev */</span>
        <div class="flex gap-8">
            <a href="#proyectos" class="text-sm text-gray-400 hover:text-white transition">proyectos</a>
            <a href="#skills" class="text-sm text-gray-400 hover:text-white transition">skills</a>
            <a href="#experiencia" class="text-sm text-gray-400 hover:text-white transition">experiencia</a>
            <a href="#contacto" class="text-sm text-gray-400 hover:text-white transition">contacto</a>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer class="max-w-5xl mx-auto px-6 py-8 border-t border-white/8 mt-8">
        <p class="text-xs text-gray-600 font-mono text-center">
            Construido con Laravel {{ app()->version() }} · {{ now()->year }}
        </p>
    </footer>

</body>

</html>
