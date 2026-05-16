<section id="proyectos" class="max-w-5xl mx-auto px-6 pb-24">
    <div class="flex justify-between items-baseline mb-8">
        <h2 class="font-serif text-3xl">Proyectos</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($projects as $project)
            <x-project-card :project="$project" :class="$project->featured ? 'md:col-span-2' : ''" />
        @endforeach
    </div>
</section>
