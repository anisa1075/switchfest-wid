<x-layout :title="$title">
    {{-- Section 1 --}}
    <section>
        <img src={{ asset('assets/bg-white.png') }} alt="Background" class="absolute z-0 h-[100vh] w-full lg:block hidden">
        <div class="z-10 relative">
            <div class="layout flex-col-reverse lg:flex-row flex items-center">
                <div class="flex flex-col gap-4 lg:w-[75%] mx-4 lg:mx-0">
                    <h1 class=" font-semibold lg:text-[2.5rem] text-[1.5rem]">Dukung Suara Perempuan: Kontribusi Anda Menciptakan Kisah
                        Sukses</h1>
                    <p class="font-normal text-[1rem]">Saatnya mendukung penuh generasi pemimpin perempuan berikutnya.
                        Dengan berdonasi, Anda membantu menyediakan dukungan mental, literasi finansial, dan akses
                        teknologi yang sangat dibutuhkan untuk membangun kemandirian dan kesetaraan.</p>
                </div>
                <div>
                    <img src={{ asset('assets/women-donasi.png') }} alt="Hero Donasi" class=" mt-4 lg:mt-0">
                </div>
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section class=" lg:mt-[10rem] mt-[4rem]">
        <div class="layout flex flex-col items-center gap-12">
            <div class=" text-center mx-4 lg:mx-0">
                <h2 class=" text-purple font-bold lg:text-[2rem] text-[1.5rem]">Pilih Dampak Donasi Sesuai Visi Anda</h2>
                <p class=" text-[1rem]">Setiap nominal yang Anda pilih memiliki tujuan yang jelas dan spesifik. Tentukan
                    jumlah kontribusi Anda dan lihat langsung bagaimana dana tersebut membantu mewujudkan program
                    mentoring, pelatihan digital, atau dukungan mental bagi perempuan.</p>
            </div>

            {{-- Program Donasi --}}
            <div class="grid lg:grid-cols-3 gap-12 mx-4 lg:mx-0">
                <div>
                    <img src={{ asset('assets/donasi1.png') }} alt="Edukasi"
                        class=" rounded-tl-[2rem] rounded-br-[2rem] w-full">
                    <div class=" rounded-b-2xl text-[#555547] text-left flex flex-col gap-4 mt-4">
                        <h4 class="font-semibold text-purple text-[1.2rem]">Pahlawan Literasi Digital</h4>
                        <p class=" font-medium text-base text-[#999999]">Menyediakan modul pelatihan coding sederhana
                            untuk 1 peserta perempuan.</p>
                        <p class=" font-semibold text-base text-[#999999]">Rp 50.000</p>
                        <div class="">
                            <button
                                class=" bg-transparent border-2 font-semibold border-purple text-purple px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                Pilih Donasi Ini
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src={{ asset('assets/donasi2.png') }} alt="Edukasi"
                        class=" rounded-tl-[2rem] rounded-br-[2rem] w-full">
                    <div class=" rounded-b-2xl text-[#555547] text-left flex flex-col gap-4 mt-4">
                        <h4 class="font-semibold text-purple text-[1.2rem]">Sponsor Jaringan UMKM</h4>
                        <p class=" font-medium text-base text-[#999999]">Mendanai akses internet 1 bulan bagi pengusaha
                            UMKM di daerah.</p>
                        <p class=" font-semibold text-base text-[#999999]">Rp 100.000</p>
                        <div class="">
                            <button
                                class=" bg-transparent border-2 font-semibold border-purple text-purple px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                Pilih Donasi Ini
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src={{ asset('assets/donasi3.png') }} alt="Edukasi"
                        class=" rounded-tl-[2rem] rounded-br-[2rem] w-full">
                    <div class=" rounded-b-2xl text-[#555547] text-left flex flex-col gap-4 mt-4">
                        <h4 class="font-semibold text-purple text-[1.2rem]">Beasiswa Suara Pemimpin</h4>
                        <p class=" font-medium text-base text-[#999999]">Menjamin biaya sertifikat dan soft skill public
                            speaking untuk 1 peserta.</p>
                        <p class=" font-semibold text-base text-[#999999]">Rp 175.000</p>
                        <div class="">
                            <button
                                class=" bg-transparent border-2 font-semibold border-purple text-purple px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                Pilih Donasi Ini
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src={{ asset('assets/donasi4.png') }} alt="Edukasi"
                        class=" rounded-tl-[2rem] rounded-br-[2rem] w-full">
                    <div class=" rounded-b-2xl text-[#555547] text-left flex flex-col gap-4 mt-4">
                        <h4 class="font-semibold text-purple text-[1.2rem]">Dana Sehat Mental</h4>
                        <p class=" font-medium text-base text-[#999999]">Memberikan 1 sesi konseling dengan psikolog
                            untuk korban burnout atau isu gender.</p>
                        <p class=" font-semibold text-base text-[#999999]">Rp 250.000</p>
                        <div class="">
                            <button
                                class=" bg-transparent border-2 font-semibold border-purple text-purple px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                Pilih Donasi Ini
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src={{ asset('assets/donasi5.png') }} alt="Edukasi"
                        class=" rounded-tl-[2rem] rounded-br-[2rem] w-full">
                    <div class=" rounded-b-2xl text-[#555547] text-left flex flex-col gap-4 mt-4">
                        <h4 class="font-semibold text-purple text-[1.2rem]">Modal Awal Kemandirian</h4>
                        <p class=" font-medium text-base text-[#999999]">Membantu modal kecil dan pendampingan bisnis
                            bagi 1 perempuan prasejahtera.</p>
                        <p class=" font-semibold text-base text-[#999999]">Rp 400.000</p>
                        <div class="">
                            <button
                                class=" bg-transparent border-2 font-semibold border-purple text-purple px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                Pilih Donasi Ini
                            </button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src={{ asset('assets/donasi6.png') }} alt="Edukasi"
                        class=" rounded-tl-[2rem] rounded-br-[2rem] w-full">
                    <div class=" rounded-b-2xl text-[#555547] text-left flex flex-col gap-4 mt-4">
                        <h4 class="font-semibold text-purple text-[1.2rem]">Bintang Kampanye Edukasi</h4>
                        <p class=" font-medium text-base text-[#999999]">Mendanai 1 video kampanye edukasi kesetaraan
                            untuk menjangkau ribuan orang.</p>
                        <p class=" font-semibold text-base text-[#999999]">Rp 245.000</p>
                        <div class="">
                            <button
                                class=" bg-transparent border-2 font-semibold border-purple text-purple px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                Pilih Donasi Ini
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class=" mt-[4rem] py-[4rem] bg-gradient-to-t from-[#FFFFFF] to-[#AD74C3]/30  ">
        <div class="layout flex flex-col items-center gap-10 ">
            <div class=" text-center lg:w-[70%] mx-4">
                <h2 class=" text-purple font-bold text-[1.8rem]">Testimoni</h2>
                <p class=" text-[1rem] text-[#4E596B] font-normal">Dengarkan langsung dari mereka yang telah merasakan
                    manfaat program ini. Setiap
                    donasi adalah bekal baru, semangat baru, dan kisah sukses yang sesungguhnya.</p>
            </div>

            <div class="grid lg:grid-cols-3 mx-4 lg:mx-0 gap-8">

                {{-- Testimoni 1 --}}
                <div class=" bg-white p-8 rounded-3xl shadow-[0px_3px_27px_#7966EA]/8 flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <img src={{ asset('assets/testi1.png') }} alt="Testimoni 1" class="">
                        <h5 class="font-bold text-[#1D1D45] text-[1rem]">Ratih (32), Pemilik UMKM Makanan Ringan</h5>
                    </div>
                    <p class=" text-[#37E7EAA] font-normal text-[.8rem]">Berkat donasi yang terkumpul, saya bisa ikut
                        pelatihan desain konten. Sekarang, produk UMKM saya
                        terlihat lebih profesional di Instagram, dan penjualan saya naik 30%! Terima kasih telah memberi
                        saya skill, bukan hanya modal</p>
                    <img src={{ asset('assets/start-testi.png') }} alt="Start Testimoni" class=" w-[100px]">
                </div>

                {{-- Testimoni 2 --}}
                <div class=" bg-white p-8 rounded-3xl shadow-[0px_3px_27px_#7966EA]/8 flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <img src={{ asset('assets/testi2.png') }} alt="Testimoni 1" class="">
                        <h5 class="font-bold text-[#1D1D45] text-[1rem]">Sinta (27), Pekerja Swasta</h5>
                    </div>
                    <p class=" text-[#37E7EAA] font-normal text-[.8rem]">Setelah sesi konseling yang didanai donatur,
                        saya akhirnya bisa menghadapi burnout akibat pekerjaan. Dukungan psikologis ini sangat berharga,
                        membuat saya merasa dihargai dan punya kekuatan untuk kembali berjuang.</p>
                    <img src={{ asset('assets/start-testi.png') }} alt="Start Testimoni" class=" w-[100px]">
                </div>

                {{-- Testimoni 3 --}}
                <div class=" bg-white p-8 rounded-3xl shadow-[0px_3px_27px_#7966EA]/8 flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <img src={{ asset('assets/testi3.png') }} alt="Testimoni 1" class="">
                        <h5 class="font-bold text-[#1D1D45] text-[1rem]">Maria (45), Wirausaha Rumahan</h5>
                    </div>
                    <p class=" text-[#37E7EAA] font-normal text-[.8rem]">Dulu saya bingung bagaimana memulai usaha
                        kecil. Dengan bantuan modal dan pendampingan dari program ini, saya bisa membeli bahan baku dan
                        mulai berjualan. Donasi ini benar-benar mengubah status saya dari hanya ibu rumah tangga menjadi
                        pengusaha mandiri.</p>
                    <img src={{ asset('assets/start-testi.png') }} alt="Start Testimoni" class=" w-[100px]">
                </div>

            </div>
        </div>
    </section>

    {{-- Section 4 --}}
    <section>
        <div class="layout">
            <div class=" flex flex-col gap-4 m-6">

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
                                <span>Apakah donasi saya benar-benar disalurkan 100% untuk program ?</span>
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
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Ya. Kami menjamin 100% donasi Anda
                                    langsung dialokasikan untuk pendanaan program, seperti pelatihan, beasiswa, dan
                                    advokasi. Biaya operasional dasar ditanggung melalui sumber lain.</p>
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
                                <span>Apakah donasi ini aman dan legal ?</span>
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
                                <span>Bagaimana cara mengetahui dampak dari donasi saya ?</span>
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
                                <span>Apakah saya bisa mendapatkan bukti donasi untuk keperluan pajak ?</span>
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
                                <span>Apakah ada batas minimal atau maksimal donasi ?</span>
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
                                <span>Saya ingin mendonasi untuk program spesifik (misalnya, hanya untuk mental health).
                                    Apakah bisa?</span>
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
                                <span>Bagaimana jika terjadi kegagalan transaksi ?</span>
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
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Jika transaksi gagal, dana Anda akan
                                    dikembalikan ke rekening/metode pembayaran Anda sesuai kebijakan bank/penyedia
                                    layanan. Silakan hubungi tim kami dengan menyertakan bukti transfer untuk bantuan
                                    lebih lanjut.</p>
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
                                <span>Apakah saya bisa berdonasi secara anonim (tanpa mencantumkan nama) ?</span>
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
