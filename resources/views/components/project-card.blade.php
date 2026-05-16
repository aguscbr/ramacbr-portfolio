@props(['project'])

<div
    {{ $attributes->merge(['class' => 'bg-[#1a1d26] border border-white/8 rounded-xl p-5 hover:border-[#c8f04c]/30 hover:-translate-y-0.5 transition-all']) }}>

    @if ($project->image)
        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}"
            class="w-full aspect-video object-cover rounded-lg mb-4">
    @else
        <div class="w-full aspect-video bg-[#22263a] rounded-lg mb-4 flex items-center justify-center">
            <span class="font-mono text-xs text-[#c8f04c]/40 tracking-widest">preview</span>
        </div>
    @endif

    <div class="flex flex-wrap gap-1.5 mb-3">
        @foreach ($project->tech_stack ?? [] as $tech)
            <span class="font-mono text-[10px] bg-white/5 text-gray-400 px-2 py-0.5 rounded">
                {{ $tech }}
            </span>
        @endforeach
    </div>

    <h3 class="font-medium text-white mb-1.5">{{ $project->title }}</h3>
    <p class="text-sm text-gray-400 leading-relaxed mb-4">{{ $project->description }}</p>

    <div class="flex gap-2">
        @if ($project->demo_url)
            <a
                href="{{ $project->demo_url }}"
                target="_blank"
                rel="noopener noreferrer"
                class="font-mono text-xs text-gray-400 bg-white/5 px-3 py-1.5 rounded hover:text-[#c8f04c] transition"
            >
            demo →
            </a>
        @endif
        @if ($project->github_url)
            <a
                href="{{ $project->github_url }}"
                target="_blank"
                rel="noopener noreferrer"
                class="font-mono text-xs text-gray-400 bg-white/5 px-3 py-1.5 rounded hover:text-[#c8f04c] transition"
            >
            github →
            </a>
        @endif
    </div>

</div>
