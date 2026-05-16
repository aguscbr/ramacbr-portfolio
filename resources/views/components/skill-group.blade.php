@props(['category', 'skills'])

<div class="bg-[#1a1d26] border border-white/8 rounded-xl p-5">
    <p class="font-mono text-[#c8f04c] text-[10px] tracking-widest uppercase mb-4">
        {{ $category }}
    </p>
    <div class="flex flex-col gap-3">
        @foreach ($skills as $skill)
            <div class="flex items-center gap-3">
                <i class="devicon-{{ $skill->icon }}-plain text-2xl text-gray-300" title="{{ $skill->name }}"></i>
                <span class="text-sm text-gray-400">{{ $skill->name }}</span>
            </div>
        @endforeach
    </div>
</div>
