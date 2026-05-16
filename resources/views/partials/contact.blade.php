<section id="contacto" class="max-w-5xl mx-auto px-6 pb-24">
    <div class="border border-white/8 rounded-xl p-8">
        <div class="mb-8">
            <h2 class="font-serif text-3xl mb-1">¿Hablamos?</h2>
            <p class="text-sm text-gray-400">Abierto a proyectos freelance y oportunidades laborales.</p>
        </div>

        @if (session('success'))
            <div class="bg-[#c8f04c]/10 border border-[#c8f04c]/30 text-[#c8f04c] text-sm px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="flex flex-col gap-4">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label for="name"
                        class="font-mono text-xs text-gray-500 tracking-widest uppercase">Nombre</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Tu nombre"
                        class="bg-[#22263a] border border-white/8 rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-600 focus:outline-none focus:border-[#c8f04c]/50 transition @error('name') border-red-500/50 @enderror">
                    @error('name')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="email"
                        class="font-mono text-xs text-gray-500 tracking-widest uppercase">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="tu@email.com"
                        class="bg-[#22263a] border border-white/8 rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-600 focus:outline-none focus:border-[#c8f04c]/50 transition @error('email') border-red-500/50 @enderror">
                    @error('email')
                        <span class="text-xs text-red-400">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col gap-1.5">
                <label for="message" class="font-mono text-xs text-gray-500 tracking-widest uppercase">Mensaje</label>
                <textarea id="message" name="message" rows="5" placeholder="Contame en qué puedo ayudarte..."
                    class="bg-[#22263a] border border-white/8 rounded-lg px-4 py-2.5 text-sm text-white placeholder-gray-600 focus:outline-none focus:border-[#c8f04c]/50 transition resize-none @error('message') border-red-500/50 @enderror">{{ old('message') }}</textarea>
                @error('message')
                    <span class="text-xs text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-[#c8f04c] text-[#0f1117] px-8 py-2.5 rounded text-sm font-semibold hover:opacity-85 transition">
                    Enviar mensaje
                </button>
            </div>
        </form>
    </div>
</section>
