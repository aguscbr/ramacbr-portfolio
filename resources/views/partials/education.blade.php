<section id="educacion" class="max-w-5xl mx-auto px-6 pb-24">
    <h2 class="font-serif text-3xl mb-8">Educación & Certificados</h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

        <div>
            <p class="font-mono text-xs text-gray-500 tracking-widest uppercase mb-6">Formación</p>
            <div class="relative pl-5 border-l border-white/8">
                @foreach ($education as $item)
                    <x-education-item :education="$item" />
                @endforeach
            </div>
        </div>

        <div>
            <p class="font-mono text-xs text-gray-500 tracking-widest uppercase mb-6">Certificados</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach ($certificates as $certificate)
                    <x-certificate-card :certificate="$certificate" />
                @endforeach
            </div>
        </div>

    </div>
</section>
