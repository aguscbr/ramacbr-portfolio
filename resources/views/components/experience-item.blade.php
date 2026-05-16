@props(['experience'])

<div class="relative mb-10 last:mb-0">
    <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-[#c8f04c]"></span>

    <p class="font-mono text-xs text-gray-500 mb-1 tracking-wide">
        {{ $experience->start_date->format('Y') }} —
        {{ $experience->current ? 'presente' : $experience->end_date->format('Y') }}
    </p>

    <h3 class="font-medium text-white">{{ $experience->role }}</h3>

    <p class="text-sm text-[#4cffc8] mb-2">
        {{ $experience->company }}
        @if ($experience->location)
            · {{ $experience->location }}
        @endif
    </p>

    <p class="text-sm text-gray-400 leading-relaxed">{{ $experience->description }}</p>
</div>
