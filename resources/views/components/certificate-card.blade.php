@props(['certificate'])

<div
    class="bg-[#1a1d26] border border-white/8 rounded-xl overflow-hidden hover:border-[#4cffc8]/30 hover:-translate-y-0.5 transition-all">

    @if ($certificate->image)
        <img src="{{ Storage::url($certificate->image) }}" alt="{{ $certificate->title }}"
            class="w-full aspect-video object-cover">
    @else
        <div class="w-full aspect-video bg-[#22263a] flex items-center justify-center">
            <span class="font-mono text-xs text-[#4cffc8]/40 tracking-widest">certificado</span>
        </div>
    @endif

    <div class="p-4">
        <p class="font-mono text-[10px] text-[#4cffc8] tracking-widest uppercase mb-1">
            {{ $certificate->issuer }}
        </p>
        <h3 class="text-sm font-medium text-white mb-1">{{ $certificate->title }}</h3>
        <p class="font-mono text-xs text-gray-500 mb-3">{{ $certificate->issued_at->format('M Y') }}</p>

        @if ($certificate->credential_url)
            href="{{ $certificate->credential_url }}"
            target="_blank"
            rel="noopener noreferrer"
            class="font-mono text-xs text-gray-400 bg-white/5 px-3 py-1.5 rounded hover:text-[#4cffc8] transition"
            >
            ver credencial →
            </a>
        @endif
    </div>
</div>
