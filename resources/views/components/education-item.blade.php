@props(['education'])

<div class="relative mb-8 last:mb-0">
    <span class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-[#4cffc8]"></span>

    <p class="font-mono text-xs text-gray-500 mb-1 tracking-wide">
        {{ $education->start_date->format('Y') }} —
        {{ $education->current ? 'presente' : $education->end_date->format('Y') }}
    </p>

    <h3 class="font-medium text-white">{{ $education->degree }}</h3>
    <p class="text-sm text-[#4cffc8] mb-1">{{ $education->institution }}</p>
    <p class="text-xs text-gray-500 mb-2">{{ $education->field }}</p>

    @if ($education->description)
        <p class="text-sm text-gray-400 leading-relaxed">{{ $education->description }}</p>
    @endif
</div>
