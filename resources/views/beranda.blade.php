<x-layout :title="$title">
    <section style=" background-image: url('assets/bg-ungu.png'); background-position: bottom; position: relative;" class=" lg:h-auto h-full bg-cover pb-20 lg:pb-0">
        <div style="max-width: 1180px; margin: 0 auto;" class="flex-col-reverse lg:flex-row flex items-center">
            <img src="{{ asset('assets/blur1.png') }}" alt="Line" class=" absolute left-0 z-0 w-100 lg:block hidden">
            <div class="lg:w-[60%] m-4 lg:m-0 flex flex-col gap-5 z-10">
                <h1 class="text-light font-bold lg:text-[2.5rem] text-[1.5rem]">Kesetaraan Gender Kunci Masa Depan Berkelanjutan</h1>
                <p class=" text-light font-tint lg:text-[1.2rem] text-base">Kami percaya keadilan sosial dimulai dari kesetaraan. Saat
                    perempuan diberdayakan, seluruh masyarakat
                    ikut maju. Mari bergerak bersama menuju perubahan nyata.</p>
                <div>
                    <button class=" text-dark bg-light font-bold lg:text-[1rem] text-[.8rem] py-2 px-4 rounded-[90px]">Bergabung Dalam
                        Gerakan</button>
                </div>
                <div class="lg:flex items-center gap-6 hidden">
                    <img src="{{ asset('assets/people.png') }}" alt="People" class=" w-[10%]">
                    <div>
                        <p class=" font-semibold text-[#fff] lg:text-[1.5rem]">4,359</p>
                        <p class=" font-normal text-[0.9rem] text-light opacity-[60%]">Bersama Lebih Kuat</p>
                    </div>
                    <img src="{{ asset('assets/line.png') }}" alt="Line">
                    <div>
                        <p class=" font-semibold text-[#fff] text-[1.5rem]">4,359</p>
                        <img src="{{ asset('assets/start.png') }}" alt="Line">
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('assets/blur2.png') }}" alt="" class=" absolute right-0 top-0 z-0">
                <img src="{{ asset('assets/women.png') }}" alt="2 Women" class=" lg:pt-28 pt-16 w-[80%] z-10">
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section>
        <div class="layout flex flex-col gap-4">
            <div class="lg:flex justify-between items-center  lg:mt-[4rem] mt-[2rem] mx-4 lg:mx-0">
                <h2 class=" text-[#212121] font-bold lg:text-[1.8rem] text-[1.5rem]">Mengapa <span
                        class=" bg-gradient-to-r from-[#663A66] to-gray-300 bg-clip-text text-transparent">Kesetaraan
                        Gender</span> Penting?</h2>
                <div class="lg:flex items-center hidden">
                    <img src={{ asset('assets/logo.png') }} alt="Logo WID" class="w-[75x] h-[48px]">
                    <img src={{ asset('assets/wid.png') }} alt="WID" class="w-[75x] h-[48px]">
                </div>
            </div>

            <div class="mx-4 lg:mx-0">
                <p class=" text-[1rem] font-normal tracking-wide">Kesetaraan gender bukan hanya isu perempuan, melainkan
                    isu kemanusiaan. Dunia yang setara memberikan
                    kesempatan bagi setiap orang baik laki-laki maupun perempuan untuk mengakses pendidikan, pekerjaan,
                    kesehatan, serta kepemimpinan tanpa hambatan diskriminasi. Sayangnya, realitas masih menunjukkan
                    bahwa perempuan dan anak perempuan di berbagai belahan dunia menghadapi tantangan besar yang
                    menghambat potensi mereka.</p>
            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class=" mx-4 lg:mx-4">
        <div class="layout">
            <div class="lg:flex justify-between items-center mt-[4rem]">
                <div>
                    <button class="font-normal text-[.9rem] border-1 rounded-3xl py-2 px-4">Lihat Semua Artikel</button>
                </div>
                <h2 class=" text-[#212121] font-bold text-[1.8rem] lg:text-right text-left mt-2 lg:mt-0">Ringkasan Fakta <br><span
                        class="text-[#663A66]">
                        Kesetaraan Gender</span></h2>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper mt-10">
                <div class="swiper-wrapper gap-4">
                    <div class="swiper-slide">
                        <div class="bg-light rounded-[24px] shadow-[0_0_10px_rgba(0,0,0,0.2)] flex flex-col h-full">
                            <img src="{{ asset('assets/artikel1.png') }}" alt="Logo WID" class="rounded-t-[24px]">
                            <div class="p-6 flex flex-col gap-2 flex-grow">
                                <h3 class="text-dark font-bold text-[1.2rem]">Kesetaraan Gender</h3>
                                <p class=" font-light text-[.9rem] text-dark opacity-[75%]">
                                    1 dari 3 perempuan alami kekerasan berbasis gender → lebih dari 736 juta perempuan
                                    terdampak di seluruh dunia.
                                </p>
                                <div class="mt-auto">
                                    <button
                                        class="bg-gradient-to-b from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="bg-light rounded-[24px] shadow-[0_0_10px_rgba(0,0,0,0.2)] flex flex-col h-full w-full">
                            <img src="{{ asset('assets/artikel2.png') }}" alt="Logo WID" class="rounded-t-[24px]">
                            <div class="p-6 flex flex-col gap-2 flex-grow">
                                <h3 class="text-dark font-bold text-[1.2rem]">Minim Kepemimpinan</h3>
                                <p class="font-light text-[.9rem] text-dark opacity-[75%]">
                                    Hanya 25% posisi pemimpin global diisi perempuan, meski tingkat pendidikan terus
                                    meningkat.
                                </p>
                                <div class="mt-auto">
                                    <button
                                        class="bg-gradient-to-b from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="bg-light rounded-[24px] shadow-[0_0_10px_rgba(0,0,0,0.2)] flex flex-col h-full w-full">
                            <img src="{{ asset('assets/artikel3.png') }}" alt="Logo WID" class="rounded-t-[24px]">
                            <div class="p-6 flex flex-col gap-2 flex-grow">
                                <h3 class="text-dark font-bold text-[1.2rem]">Putus Sekolah</h3>
                                <p class="font-light text-[.9rem] text-dark opacity-[75%]">
                                    Anak perempuan 2x lebih berisiko putus sekolah, dipengaruhi faktor ekonomi &
                                    perkawinan dini.
                                </p>
                                <div class="mt-auto">
                                    <button
                                        class="bg-gradient-to-b from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="bg-light rounded-[24px] shadow-[0_0_10px_rgba(0,0,0,0.2)] flex flex-col h-full w-full">
                            <img src="{{ asset('assets/artikel4.png') }}" alt="Logo WID" class="rounded-t-[24px]">
                            <div class="p-6 flex flex-col gap-2 flex-grow">
                                <h3 class="text-dark font-bold text-[1.2rem]">Krisis Pendidikan</h3>
                                <p class="font-light text-[.9rem] text-dark opacity-[75%]">
                                    Anak perempuan 2x lebih berisiko putus sekolah dibanding anak laki-laki. Hambatan
                                    ekonomi dan perkawinan dini seringkali jadi penyebab utamanya.
                                </p>
                                <div class="mt-auto">
                                    <button
                                        class="bg-gradient-to-b from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div
                            class="bg-light rounded-[24px] shadow-[0_0_10px_rgba(0,0,0,0.2)] flex flex-col h-full w-full">
                            <img src="{{ asset('assets/artikel2.png') }}" alt="Logo WID" class="rounded-t-[24px]">
                            <div class="p-6 flex flex-col gap-2 flex-grow">
                                <h3 class="text-dark font-bold text-[1.2rem]">Kesetaraan Gender</h3>
                                <p class="font-light text-[.9rem] text-dark opacity-[75%]">
                                    Anak perempuan 2x lebih berisiko putus sekolah dibanding anak laki-laki. Hambatan
                                    ekonomi dan perkawinan dini seringkali jadi penyebab utamanya.
                                </p>
                                <div class="mt-auto">
                                    <button
                                        class="bg-gradient-to-b from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Navigasi dibawah -->
                <div class="swiper-navigation ">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 4 --}}
    <section>
        <div class="layout">
            <div class="flex flex-col gap-8 mb-10 mx-4 lg:mx-0">
                <div class="text-center flex flex-col justify-center items-center">
                    <h3 class="text-purple font-bold text-[1.8rem]">Program Pelatihan</h3>
                    <p class="font-normal text-[1rem] text-[#555547] lg:w-[80%]">Meningkatkan kapasitas perempuan melalui
                        kelas online interaktif, pelatihan praktis, dan pendampingan
                        berkelanjutan di berbagai bidang keterampilan untuk membangun kemandirian dan kepemimpinan.</p>
                </div>

                {{-- Edukasi --}}
                <div class=" flex flex-col justify-center gap-8">
                    <div class=" grid lg:grid-cols-3 gap-8">
                        <div class="">
                            <img src={{ asset('assets/edukasi1.png') }} alt="Edukasi">
                            <div class="bg-[#E9DEE9] rounded-b-2xl p-5 text-[#555547]">
                                <h4 class="font-bold text-[1rem]">Program Edukasi</h4>
                                <p class=" font-normal text-[.9rem]">Membekali perempuan dengan kemampuan teknologi
                                    untuk dunia kerja modern.</p>
                            </div>
                        </div>
                        <div class="">
                            <img src={{ asset('assets/edukasi2.png') }} alt="Edukasi">
                            <div class="bg-[#E9DEE9] rounded-b-2xl p-5 text-[#555547]">
                                <h4 class="font-bold text-[1rem]">Kewirausahaan</h4>
                                <p class=" font-normal text-[.9rem]">Mendukung perempuan mengembangkan usaha mandiri &
                                    UMKM.</p>
                            </div>
                        </div>
                        <div class="">
                            <img src={{ asset('assets/edukasi3.png') }} alt="Edukasi">
                            <div class="bg-[#E9DEE9] rounded-b-2xl p-5 text-[#555547]">
                                <h4 class="font-bold text-[1rem]">literasi Keuangan</h4>
                                <p class=" font-normal text-[.9rem]">Membantu perempuan mengelola keuangan secara
                                    mandiri & berkelanjutan.</p>
                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-gradient-to-b mx-auto from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[10px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                        Lihat Semua Program
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 5 --}}
    <section>
        <div class="layout">
            <div class="grid lg:grid-cols-2 gap-10 my-24 mx-4 lg:mx-0 flex-row-reverse">

                <div class="flex flex-col gap-2 justify-center">
                    <h3 class="text-purple font-bold text-[2rem]">Aksi Nyata Untuk Masa Depan setara</h3>
                    <p class=" text-[#555547] font-light text-[1rem]">Setiap donasi yang kamu berikan adalah langkah
                        kecil
                        yang berdampak besar. Bantu perempuan dan anak
                        perempuan mendapatkan akses pendidikan, perlindungan, dan kesempatan yang adil.</p>
                    <div>
                        <button
                            class="bg-gradient-to-b from-[#7E4190] to-[#AD74C3] text-white px-6 py-2 rounded-[7px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                            Mulai Donasi
                        </button>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('assets/manwomen.png') }}" alt="Kesetaraan Gender" class="">
                </div>
            </div>
        </div>
    </section>

    {{-- Section 6 --}}
    <section>
        <div class="layout">
            <div class="text-center flex flex-col justify-center items-center">
                <h3 class="text-purple font-bold lg:text-[1.8rem] text-[1.5rem]">Komunitas Perempuan Berdaya</h3>
                <p class="font-normal text-[1rem] text-[#555547] lg:w-[70%]">Gabung bersama komunitas perempuan yang
                    saling mendukung, berbagi pengalaman, dan tumbuh bersama menuju kesetaraan.</p>
            </div>

            {{-- Testimoni --}}
            <div class="flex flex-col items-center">

                <div class="grid lg:grid-cols-4 bg-[#E9DEE9] my-10 p-10 rounded-2xl gap-12 mx-4 lg:mx-0">
                    <div class="flex flex-col items-center text-center gap-2">
                        <img src="{{ asset('assets/women1.png') }}" alt="Women 1" class="w-[200px] h-[200px]">
                        <h5 class="text-purple font-bold text-[1rem]">Rina</h5>
                        <p class="font-normal text-[#555547] text-[.9rem]">Di komunitas ini aku merasa punya teman
                            seperjuangan</p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <img src="{{ asset('assets/women2.png') }}" alt="Women 2" class="w-[200px] h-[200px]">
                        <h5 class="text-purple font-bold text-[1rem]">Nadyline</h5>
                        <p class="font-normal text-[#555547] text-[.9rem]">Bisa saling support bikin aku lebih percaya
                            diri
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <img src="{{ asset('assets/women3.png') }}" alt="Women 3" class="w-[200px] h-[200px]">
                        <h5 class="text-purple font-bold text-[1rem]">Maya</h5>
                        <p class="font-normal text-[#555547] text-[.9rem]">Banyak insight baru tentang karier dan
                            keluarga.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center gap-2">
                        <img src="{{ asset('assets/women4.png') }}" alt="Women 4" class="w-[200px] h-[200px]">
                        <h5 class="text-purple font-bold text-[1rem]">Christina</h5>
                        <p class="font-normal text-[#555547] text-[.9rem]">Komunitas ini jadi ruang aman untuk tumbuh
                            dan
                            berkembang.</p>
                    </div>
                </div>

                <div class="">
                    <button
                        class=" bg-transparent border text-black px-6 py-2 rounded-[99px] text-[1rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                        Gabung Komunitas
                    </button>
                </div>
            </div>

        </div>
    </section>

    {{-- Section 7 --}}
    <section>
        <div class="layout">
            <div class="my-10 flex flex-col gap-4 mx-4 lg:mx-0">

                <div class="text-center flex flex-col justify-center items-center">
                    <h3 class="text-purple font-bold text-[1.8rem]">FAQ</h3>
                </div>

                {{-- Accordion --}}

                <div id="accordion-collapse" data-accordion="collapse" class="flex flex-col gap-4">

                    <div>
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>Apa tujuan utama dari website ini?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden"
                            aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 2 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Apakah ada acara yang akan diselenggarakan?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 3 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>Apakah situs web ini hanya untuk perempuan?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 4 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>Di mana saya bisa menemukan data atau fakta tentang isu gender?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden"
                            aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 5 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                aria-controls="accordion-collapse-body-5">
                                <span>Bisakah saya menyumbangkan tulisan atau cerita?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden"
                            aria-labelledby="accordion-collapse-heading-5">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 6 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-6">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                aria-controls="accordion-collapse-body-6">
                                <span>Siapa yang harus terlibat dalam gerakan ini?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-6" class="hidden"
                            aria-labelledby="accordion-collapse-heading-6">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 7 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-7">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                                aria-controls="accordion-collapse-body-6">
                                <span> Siapa target audiens dari website ini?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-7" class="hidden"
                            aria-labelledby="accordion-collapse-heading-7">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Accordin 8 --}}
                    <div>
                        <h2 id="accordion-collapse-heading-8">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-semibold rtl:text-right text-light border border-b-0 border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 bg-purple dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                                aria-controls="accordion-collapse-body-8">
                                <span>Apakah kalian menerima donasi?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 cursor-pointer"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-8" class="hidden"
                            aria-labelledby="accordion-collapse-heading-8">
                            <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                                    interactive components built on top of Tailwind CSS including buttons, dropdowns,
                                    modals, navbars, and more.</p>
                                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                        href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start
                                    developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                    </div>





                </div>

            </div>
        </div>
    </section>
</x-layout>
