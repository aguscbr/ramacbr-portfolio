@props(['about'])

<section class="max-w-5xl mx-auto px-6 pt-16 pb-24">
    <div class="flex flex-col md:flex-row gap-12 items-start">

        <div class="flex-1">
            <p class="font-mono text-[#c8f04c] text-xs tracking-widest uppercase flex items-center gap-2 mb-4">
                <span class="inline-block w-5 h-px bg-[#c8f04c]"></span>
                Desarrollador fullstack
            </p>
            <h1 class="font-serif text-6xl leading-tight mb-4">
                Hola, soy<br><em class="text-[#c8f04c] not-italic">{{ $about->name }}</em>
            </h1>
            <p class="font-mono text-sm text-[#4cffc8] mb-6 tracking-wide">{{ $about->tagline }}</p>
            <p class="text-gray-400 text-lg max-w-xl mb-8 leading-relaxed">{{ $about->bio }}</p>

            @if ($about->location)
                <p class="font-mono text-xs text-gray-500 mb-8 flex items-center gap-2">
                    <span>📍</span> {{ $about->location }}
                </p>
            @endif

            <div class="flex gap-3 flex-wrap">
                <a href="#proyectos"
                    class="bg-[#c8f04c] text-[#0f1117] px-6 py-2.5 rounded text-sm font-semibold hover:opacity-85 transition">
                    Ver proyectos
                </a>
                @if ($about->cv_url)
                    <a href="{{ $about->cv_url }}" target="_blank" rel="noopener noreferrer"
                        class="border border-white/10 text-gray-400 px-6 py-2.5 rounded text-sm hover:border-white/25 hover:text-white transition">
                        Descargar CV
                    </a>
                @endif
                @if ($about->github_url)
                    <a href="{{ $about->github_url }}" target="_blank" rel="noopener noreferrer"
                        class="border border-white/10 text-gray-400 px-6 py-2.5 rounded text-sm hover:border-white/25 hover:text-white transition">
                        GitHub
                    </a>
                @endif
                @if ($about->linkedin_url)
                    <a href="{{ $about->linkedin_url }}" target="_blank" rel="noopener noreferrer"
                        class="border border-white/10 text-gray-400 px-6 py-2.5 rounded text-sm hover:border-white/25 hover:text-white transition">
                        LinkedIn
                    </a>
                @endif
            </div>
        </div>

        @if ($about->avatar)
            <div class="flex-shrink-0">
                <img src="{{ Storage::url($about->avatar) }}" alt="{{ $about->name }}"
                    class="w-48 h-48 rounded-2xl object-cover border border-white/8">
            </div>
        @endif

    </div>
</section>
