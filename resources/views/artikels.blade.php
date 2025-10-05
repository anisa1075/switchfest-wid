<x-layout :title="$title">
    <section class="relative">
        <img src={{ asset('assets/bg-artikel.png') }} alt="Background Artikel" class="absolute h-full lg:h-auto lg:block">
        <div style="margin: 0 auto;" class="layout flex items-center ">
            <div class="lg:w-[60%] flex flex-col gap-5 z-10 mt-20 mx-8 lg:mx-0">
                <h1 class="text-light font-bold lg:text-[2.5rem] text-[1rem] font-philosopher">Ruang Setara: Menginspirasi Aksi,
                    Merayakan Kemanusiaan</h1>
                <p class=" text-light font-tint lg:text-[1rem] text-xs">Kami percaya keadilan sosial dimulai dari kesetaraan. Saat
                    perempuan diberdayakan, seluruh masyarakat
                    ikut maju. Mari bergerak bersama menuju perubahan nyata.</p>
            </div>
        </div>
        <img src={{ asset('assets/img-artikel.png') }} alt="Image Artikel" class="">
    </section>

    {{-- Section 2 --}}
    <section class="lg:my-[4rem] my-[2rem]">
        <div class="layout flex flex-col gap-4 text-center lg:text-left">
            <h2 class="text-purple lg:text-[2rem] font-semibold mx-4 lg:mx-0">Menemukan Suara yang Selama Ini Terbungkam</h2>
            <p class="text-[#4D4D4D] lg:font-normal text-xs lg:text-base mx-4 lg:mx-0">Dalam dunia yang terus berubah, kita sering kali lupa bahwa perjuangan
                untuk kesetaraan masih terus
                berlangsung. Artikel ini akan membawa Anda pada sebuah perjalanan untuk memahami mengapa kesetaraan
                gender bukan hanya isu bagi satu kelompok, melainkan sebuah fondasi untuk masyarakat yang lebih adil dan
                makmur. Anda akan menemukan data mengejutkan, pandangan dari para ahli, dan kisah-kisah nyata yang
                membuktikan bahwa setiap langkah kecil kita memiliki dampak besar.</p>
            <div>
                <button
                    class="bg-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                    Baca Selengkapnya
                </button>
            </div>
        </div>
    </section>

    {{-- section 3 --}}
    <section class=" bg-gradient-to-t from-[#E4CDE4] to-[#F0F3FF] lg:py-[4rem] py-[2rem]">
        <div class="layout px-8">
            <img src={{ asset('assets/circle-artikel.png') }} alt="Circle Artikel" class=" w-[10%]">

            <div class=" flex flex-col gap-14">
                <div class="text-center">
                    <h3 class="text-purple font-bold lg:text-[1.8rem] text-base">Temukan Artikel Kami</h3>
                    <p class="text-[#4E596B] font-normal text-[1rem]">Jelajahi beragam topik dan temukan perspektif
                        baru.
                    </p>
                </div>
                <div class=" grid lg:grid-cols-3 gap-x-10 lg:gap-y-20 gap-y-10">

                    @foreach ($nonPopulerArtikels as $artikel)
                        {{-- artikel 1 --}}
                        <div class="bg-light rounded-[20px] flex flex-col h-full">
                            <img src="{{ $artikel['image'] }}" alt="Logo WID"
                                class=" h-[200px] object-cover rounded-t-2xl">

                            <div class="p-5 flex flex-col gap-2 flex-grow">
                                <h3 class="text-dark font-semibold text-[1.2rem]">{{ $artikel['title'] }}</h3>
                                <p class="font-normal text-[.9rem] text-dark opacity-[75%]">
                                    {{ Str::limit($artikel['body'], 100) }}
                                </p>
                                <p class="font-normal text-[.8rem] text-[#5E6775] opacity-[75%]">12 September 2025 |
                                    {{ $artikel['author'] }}
                                </p>
                                <div class="mt-auto text-right">
                                    <a href="/artikel/{{ $artikel['slug'] }}"
                                        class="bg-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Baca Artikel
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- section 4 --}}
    <section class=" my-[4rem] flex flex-col gap-10">
        <div class="layout px-8">
            <div class="text-center">
                <h3 class="text-purple font-bold lg:text-[1.8rem] text-base">Arikel Terpopuler</h3>
                <p class="text-[#4E596B] font-normal text-[1rem]">
                    Kumpulan artikel yang paling banyak dibaca dan dibagikan.
                </p>
            </div>
        </div>

        <div class=" ml-[2rem]">

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper gap-4">

                    @foreach ($populerArtikels as $artikel)
                        <div class="swiper-slide">
                            <div class="">
                                <img src={{ asset('assets/artikel17.png') }} alt="Edukasi">
                                <div
                                    class="bg-[#E9DEE9] rounded-b-2xl p-5 text-[#555547] text-left flex flex-col gap-2">
                                    <h4 class="font-bold text-[.9rem]">{{$artikel['title']}}</h4>
                                    <p class=" font-normal text-xs">Mengangkat kisah inspiratif perempuan yang sukses
                                        mendobrak batasan di bidang-bidang yang didominasi oleh pria.</p>
                                    <div class="mt-auto text-right">
                                        <a href="/artikel/{{ $artikel['slug'] }}"
                                            class="bg-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                            Baca Artikel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>


    </section>

    {{-- Section 5 --}}
    <section>
        <div class="layout">
            <div class="">

                <div class="flex flex-col-reverse lg:flex-row justify-center mx-8 lg:mx-0 bg-[#E4CDE4] my-10 rounded-2xl gap-12 ">
                    <div class="flex flex-col text-left gap-4 lg:p-8 p-4">
                        <h5 class="text-[#161810] font-semibold text-[1.8rem]">Langkah Kecil, Perubahan Besar. Mulai
                            dari Diri
                            Sendiri.</h5>
                        <p class="font-normal text-[#555547] text-[1rem]">Wujudkan kesetaraan gender bersama kami
                            sekarang dan jadilah bagian dari generasi yang berani menciptakan masa depan. Peluang untuk
                            perubahan tidak datang dua kali.</p>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/whatsapp.png') }}" alt="WhatsappIcon" class=" w-[40px] h-[40px]">
                            <h5 class="text-[#161810] font-semibold text-[1.4rem]">Hubungi Kami</h5>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('assets/circle-article2.png') }}" alt="Circle" class="absolute top-0 z-0 hidden lg:block">
                        <img src="{{ asset('assets/artikel-foot.png') }}" alt="Women" class=" relative top-10 z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
