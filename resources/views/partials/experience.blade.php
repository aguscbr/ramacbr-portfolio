<section id="experiencia" class="max-w-5xl mx-auto px-6 pb-24">
    <h2 class="font-serif text-3xl mb-8">Experiencia</h2>

    <div class="relative pl-5 border-l border-white/8">
        @foreach ($experiences as $experience)
            <x-experience-item :experience="$experience" />
        @endforeach
    </div>
</section>
