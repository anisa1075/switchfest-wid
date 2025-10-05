<x-layout :title="$title">

    {{-- Section 1 --}}
    <section>
        <img src={{ asset('assets/bg-white.png') }} alt="Background" class="absolute z-0 h-[100vh] w-full lg:block hidden">
        <div class="z-10 relative">
            <div class="layout flex-col-reverse lg:flex-row flex items-center">
                <div class="flex flex-col gap-4 w-[75%]">
                    <h1 class=" font-semibold lg:text-[2.5rem] text-base">Latih Dirimu, Ubah Duniamu:
                        Kelas Pemberdayaan Perempuan</h1>
                    <p class="font-normal text-[1rem]">Jangan biarkan potensi terbaikmu tertidur. Bergabunglah dengan
                        program pelatihan interaktif kami yang
                        dirancang khusus untuk meningkatkan keterampilan digital, kepemimpinan, dan kemandirian
                        finansial
                        bekal
                        wajib di era ini.</p>
                </div>
                <div>
                    <img src={{ asset('assets/hero-pelatihan.png') }} alt="Hero Pelatihan" class="mt-4 ml-10 lg:ml-0 lg:mt-0">
                </div>
            </div>
        </div>
    </section>

    {{-- Section 2 --}}
    <section class=" lg:mt-[10rem] mt-[2rem] mx-9">
        <div class="layout flex flex-col items-center gap-8">
            <div class=" lg:text-center text-left">
                <h2 class=" text-purple font-bold lg:text-[2rem] text-base">Kelas Dan Pelatihan Online</h2>
                <p class=" text-[1rem]">Saatnya berinvestasi pada potensi terbaik Anda. Ikuti kelas online yang praktis,
                    kuasai skill baru yang
                    relevan, dan jadilah bagian dari generasi yang membangun masa depan setara.</p>
            </div>
            <div class=" lg:flex items-center gap-4 bg-[#AD74C3]/30 w-fit rounded-4xl p-4 border border-[#E0E0DC] hidden">
                <p class=" text-[#141414] text-xs">Keterampilan Digital & Teknologi</p>
                <div class="w-[1.5px] h-10 bg-[#171717]"></div>
                <p class=" text-[#141414] text-xs">Kewirausahaan & UMKM</p>
                <div class="w-[1.5px] h-10 bg-[#171717]"></div>
                <p class=" text-[#141414] text-xs">Literasi Keuangan & Investasi</p>
                <div class="w-[1.5px] h-10 bg-[#171717]"></div>
                <p class=" text-[#141414] text-xs">Pengembangan Soft Skill Inti</p>
                <div class="w-[1.5px] h-10 bg-[#171717]"></div>
                <p class=" text-[#141414] text-xs">Kesehatan Mental & Keseimbangan Hidup</p>
            </div>

        </div>
    </section>

    {{-- Keterampilan Digital & Teknologi --}}
    <section class=" mt-[4rem] ml-8 lg:ml-0">
        <div class="layout flex flex-col gap-8">
            <div class=" flex justify-between">
                <h4 class=" text-purple font-bold text-[1.4rem]">Keterampilan Digital & Teknologi</h4>
                <i class="fa-solid fa-chevron-right text-purple"></i>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper gap-4">

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan1.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Desain Grafis Cepat untuk Konten Bisnis</h4>
                                <p class=" font-normal text-xs">Pelatihan menggunakan tools gratis (seperti Canva) untuk
                                    membuat materi promosi yang menarik dan profesional.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan2.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Membuat Konten Visual Cepat dengan Aplikasi Gratis
                                </h4>
                                <p class=" font-normal text-xs">Pelatihan praktis menggunakan tool gratis (seperti
                                    Canva) untuk desain materi promosi.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan3.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Pengantar Pemasaran Online untuk Pemula</h4>
                                <p class=" font-normal text-xs">Dasar-dasar cara kerja Instagram, Facebook, dan WhatsApp
                                    Business untuk menjangkau pembeli.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan4.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Bisnis (UMKM) dengan Google Workspace</h4>
                                <p class=" font-normal text-xs">Cara memanfaatkan Google Drive, Spreadsheet, dan
                                    Calendar untuk operasional bisnis kecil.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan1.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Bisnis (UMKM) dengan Google Workspace</h4>
                                <p class=" font-normal text-xs">Cara memanfaatkan Google Drive, Spreadsheet, dan
                                    Calendar untuk operasional bisnis kecil.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--  Kewirausahaan & UMKM --}}
    <section class="  ml-8 lg:ml-0">
        <div class="layout flex flex-col gap-8">
            <div class=" flex justify-between">
                <h4 class=" text-purple font-bold text-[1.4rem]">Kewirausahaan & UMKM</h4>
                <i class="fa-solid fa-chevron-right text-purple"></i>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper gap-4">

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan5.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Memulai Bisnis dari Nol: Studi Kasus UMKM Sukses</h4>
                                <p class=" font-normal text-xs">Panduan langkah demi langkah cara mengidentifikasi ide
                                    bisnis, membuat perencanaan modal awal, dan legalitas dasar.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan6.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Pemasaran Digital Tepat Sasaran untuk Bisnis Kecil
                                </h4>
                                <p class=" font-normal text-xs">Strategi menggunakan Facebook & Instagram Ads untuk
                                    menjangkau target pasar secara efektif.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan7.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Branding Produk yang Berdampak dan Berkarakter</h4>
                                <p class=" font-normal text-xs">Pelatihan membangun identitas merek yang kuat, unik,
                                    dan mudah diingat oleh konsumen.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan8.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengekspor Produk: Peluang Global untuk Perempuan
                                    Pengusaha</h4>
                                <p class=" font-normal text-xs">Pengenalan prosedur ekspor, riset pasar global, dan
                                    memanfaatkan e-commerce internasional.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan1.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Bisnis (UMKM) dengan Google Workspace</h4>
                                <p class=" font-normal text-xs">Cara memanfaatkan Google Drive, Spreadsheet, dan
                                    Calendar untuk operasional bisnis kecil.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--  Literasi Keuangan & Investasi --}}
    <section class=" ml-8 lg:ml-0">
        <div class="layout flex flex-col gap-8">
            <div class=" flex justify-between">
                <h4 class=" text-purple font-bold text-[1.4rem]">Literasi Keuangan & Investasi</h4>
                <i class="fa-solid fa-chevron-right text-purple"></i>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper gap-4">

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan9.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Merdeka Finansial: Anggaran & Dana Darurat</h4>
                                <p class=" font-normal text-xs">Panduan praktis mengelola gaji bulanan, melunasi utang,
                                    dan menyusun dana darurat yang kokoh.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan10.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Dasar-Dasar Investasi Aman untuk Pemula
                                </h4>
                                <p class=" font-normal text-xs">Pengenalan investasi di Reksadana, Emas, dan Saham
                                    dengan fokus pada risiko rendah.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan11.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Memahami Layanan Keuangan Digital & Fintech</h4>
                                <p class=" font-normal text-xs">Kelas tentang penggunaan e-wallet, pinjaman online
                                    legal, dan aplikasi keuangan yang aman.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan12.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Perencanaan Keuangan Jangka Panjang</h4>
                                <p class=" font-normal text-xs">Pelatihan menyusun strategi keuangan untuk tujuan besar seperti Pensiun dan Pendidikan Anak.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan1.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Bisnis (UMKM) dengan Google Workspace</h4>
                                <p class=" font-normal text-xs">Cara memanfaatkan Google Drive, Spreadsheet, dan
                                    Calendar untuk operasional bisnis kecil.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--  Pengembangan Soft Skill Inti --}}
    <section class=" ml-8 lg:ml-0">
        <div class="layout flex flex-col gap-8">
            <div class=" flex justify-between">
                <h4 class=" text-purple font-bold text-[1.4rem]">Pengembangan Soft Skill Inti</h4>
                <i class="fa-solid fa-chevron-right text-purple"></i>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper gap-4">

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan13.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Teknik Komunikasi Asertif di Lingkungan Profesional</h4>
                                <p class=" font-normal text-xs">Belajar cara menyampaikan pendapat dan menolak secara tegas tanpa bersikap agresif.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan14.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Manajemen Waktu & Prioritas untuk Multitasking
                                </h4>
                                <p class=" font-normal text-xs">Strategi praktis mengatur jadwal dan mengatasi prokrastinasi agar hidup lebih seimbang.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan15.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Creative Problem Solving: Menghadapi Tantangan</h4>
                                <p class=" font-normal text-xs">Teknik berpikir lateral untuk menganalisis masalah dan menemukan solusi yang kreatif.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan16.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Keterampilan Negosiasi Gaji dan Kontrak Kerja</h4>
                                <p class=" font-normal text-xs">Pelatihan untuk membangun kepercayaan diri saat negosiasi gaji atau kesepakatan bisnis.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan14.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Bisnis (UMKM) dengan Google Workspace</h4>
                                <p class=" font-normal text-xs">Cara memanfaatkan Google Drive, Spreadsheet, dan
                                    Calendar untuk operasional bisnis kecil.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

     {{--  Kesehatan Mental & Keseimbangan Hidup --}}
    <section class="  ml-8 lg:ml-0">
        <div class="layout flex flex-col gap-8">
            <div class=" flex justify-between">
                <h4 class=" text-purple font-bold text-[1.4rem]">Kesehatan Mental & Keseimbangan Hidup</h4>
                <i class="fa-solid fa-chevron-right text-purple"></i>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper gap-4">

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan17.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Stres dan Burnout di Tengah Kepadatan</h4>
                                <p class=" font-normal text-xs">Teknik praktis mengenali tanda burnout dan kiat cepat memulihkan energi mental.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan18.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Membangun Batasan Diri (Boundaries) yang Sehat
                                </h4>
                                <p class=" font-normal text-xs">Cara menetapkan batas antara hidup pribadi dan pekerjaan untuk menjaga keseimbangan (work-life balance).</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan19.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Self-Care dan Self-Love: Menghargai Diri Sendiri</h4>
                                <p class=" font-normal text-xs">Workshop praktis tentang pentingnya self-care dan menumbuhkan penerimaan diri (self-love).</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan20.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Dukungan Mental untuk Ibu Bekerja & Pengasuh</h4>
                                <p class=" font-normal text-xs">Diskusi tentang tantangan ganda dan sumber daya dukungan kesehatan mental yang tersedia.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="">
                            <img src={{ asset('assets/pelatihan14.png') }} alt="Edukasi" class="rounded-t-2xl">
                            <div class="bg-[#F8F8F6] rounded-b-2xl p-6 text-[#555547] text-left flex flex-col gap-2">
                                <h4 class="font-bold text-[.9rem]">Mengelola Bisnis (UMKM) dengan Google Workspace</h4>
                                <p class=" font-normal text-xs">Cara memanfaatkan Google Drive, Spreadsheet, dan
                                    Calendar untuk operasional bisnis kecil.</p>
                                <div class="mt-auto text-right">
                                    <button
                                        class="bg-[#7A3A8E] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                                        Daftar Kelas
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



</x-layout>
