<section id="skills" class="max-w-5xl mx-auto px-6 pb-24">
    <h2 class="font-serif text-3xl mb-8">Skills</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($skills as $category => $items)
            <x-skill-group :category="$category" :skills="$items" />
        @endforeach
    </div>
</section>
