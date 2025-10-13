<x-layout :title="$title">
    <section class="mt-[2rem] p-10">
        <div class="layout mx-auto px-6">
            <!-- Gambar artikel -->
            <img src="{{ $artikel['image'] }}" alt="Logo WID" class=" w-full h-[600px] rounded-3xl">

            <!-- Judul -->
            <h1 class="text-3xl font-semibold text-[#333] mt-6 mb-2 leading-tight">
                {{ $artikel['title'] }}
            </h1>

            <!-- Penulis -->
            <p class="text-sm text-gray-500 mb-6">
                Oleh <span class="font-medium text-[#7E4190]">{{ $artikel['author'] }}</span>
            </p>

            <!-- Deskripsi -->
            <p class="text-gray-700 text-[17px] leading-relaxed">
                {{ $artikel['body'] }}
            </p>

            <!-- Deskripsi -->
            <a href="/artikels">
                <p class="text-gray-700 text-[17px] leading-relaxed font-semibold mt-4">
                    &laquo;
                    Back To All Artikel
                </p>
            </a>

        </div>

    </section>
</x-layout>
