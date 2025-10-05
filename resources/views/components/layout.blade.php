<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- Font Poppins --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <style>
        .layout {
            max-width: 1180px;
            margin: 0 auto;
        }

        .swiper {
            width: 100%;
            padding-bottom: 50px;
            /* kasih space buat tombol */
        }

        .swiper-wrapper {
            align-items: stretch !important;
            /* semua slide ikut tinggi terpanjang */
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            display: flex !important;
            /* supaya anak ikut stretch */
            height: auto !important;
        }

        /* Tombol prev/next jadi di bawah */
        .swiper-navigation {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: static !important;
            /* biar ga nempel di samping */
            color: #7A3A8E;
            background: #F9F9F9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 100%;
            cursor: pointer;
            margin-top: 2rem;
        }

        .swiper-button-next:hover {
            border: 1px solid #7A3A8E
        }

        .swiper-button-prev:hover {
            border: 1px solid #7A3A8E
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px !important;
            color: #7E4190;
            font-weight: bold;
        }
    </style>


    @vite('resources/css/app.css')
</head>

<body class="">
    {{-- Header --}}
    <header id="mainHeader" class="fixed top-0 left-0 w-full z-50 bg-white transition-all duration-300">
        <div class="flex justify-between items-center py-3 text-[16px] max-w-[1200px] mx-auto px-6">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo WID" class="w-[75px] h-[48px]">
                <img src="{{ asset('assets/wid.png') }}" alt="WID" class="h-[48px]">
            </div>

            <!-- Nav (desktop) -->
            <nav class="hidden lg:flex list-none space-x-10 font-sans font-medium text-[#555547]">
                <a href="/"
                    class="{{ Request::is('/*') ? 'text-[#7E4190]' : 'hover:text-[#7E4190] hover:scale-110 transition-transform duration-300 inline-block' }}">
                    <li>Beranda</li>
                </a>
                <a href="/artikels"
                    class="{{ Request::is('artikels*') ? 'text-[#7E4190]' : 'hover:text-[#7E4190] hover:scale-110 transition-transform duration-300 inline-block' }}">
                    <li>Artikel</li>
                </a>
                <a href="/pelatihan"
                    class="{{ Request::is('pelatihan*') ? 'text-[#7E4190]' : 'hover:text-[#7E4190] hover:scale-110 transition-transform duration-300 inline-block' }}">
                    <li>Pelatihan</li>
                </a>
                <a href="/donasi"
                    class="{{ Request::is('donasi*') ? 'text-[#7E4190]' : 'hover:text-[#7E4190] hover:scale-110 transition-transform duration-300 inline-block' }}">
                    <li>Donasi</li>
                </a>
                <a href="/contact"
                    class="{{ Request::is('contact*') ? 'text-[#7E4190]' : 'hover:text-[#7E4190] hover:scale-110 transition-transform duration-300 inline-block' }}">
                    <li>Contact</li>
                </a>
            </nav>

            <!-- Button (desktop) -->
            <div class="hidden lg:flex font-medium gap-4">
                <button>Sign In</button>
                <button class="bg-gradient-to-r from-[#7E4190] to-[#AD74C3] text-white px-4 py-2 rounded-[7px]">
                    Sign Up
                </button>
            </div>

            <!-- Hamburger (mobile) -->
            <button id="menu-btn" class="lg:hidden text-[#7E4190] text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- 🟣 Mobile Menu dipindah ke luar header -->
    <div id="mobile-menu"
        class="fixed top-0 right-0 h-full w-2/3 bg-white text-[#7E4190] shadow-lg transform translate-x-full transition-transform duration-300 z-[9999] p-6 flex flex-col space-y-6 font-medium text-lg">
        <button id="close-btn" class="text-3xl self-end mb-4">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <a href="/" class="hover:text-[#AD74C3]">Beranda</a>
        <a href="/artikels" class="hover:text-[#AD74C3]">Artikel</a>
        <a href="/pelatihan" class="hover:text-[#AD74C3]">Pelatihan</a>
        <a href="/donasi" class="hover:text-[#AD74C3]">Donasi</a>
        <a href="/contact" class="hover:text-[#AD74C3]">Contact</a>
        <div class="flex flex-col gap-4 mt-4">
            <button class="border border-[#7E4190] text-[#7E4190] px-4 py-2 rounded-[7px]">Sign In</button>
            <button class="bg-gradient-to-r from-[#7E4190] to-[#AD74C3] text-white px-4 py-2 rounded-[7px]">Sign
                Up</button>
        </div>
    </div>


    {{-- body --}}
    <main class="lg:pt-[65px] pt-[40px]">
        <div>
            {{ $slot }}
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-purple p-12 relative ">
        <img src={{ asset('assets/ellipse.png') }} alt="Logo WID" class=" absolute top-0 bottom-0 left-0 w-[300px]">
        <div class=" layout grid lg:grid-cols-4 gap-12 items-center">

            {{-- logo --}}
            <div class="flex items-center bg-white w-fit h-fit rounded-xl py-2 px-12 justify-center">
                <img src={{ asset('assets/logo.png') }} alt="Logo WID" class="w-[70x] h-[48px]">
                <img src={{ asset('assets/wid.png') }} alt="WID"
                    class="max-w-full max-h-full object-contain w-[200px] h-[48px]">
            </div>

            {{-- Social Media --}}
            <div class="text-white lg:pl-8 flex flex-col gap-3">
                <h4 class=" text-white font-bold text-[1.2rem]">Media Sosial</h4>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Instagram</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Facebook</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Youtube</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">LinkedIn</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">WhatsApp</p>
                </a>
            </div>

            {{-- Pages --}}
            <div class="text-white flex flex-col gap-3">
                <h4 class=" text-white font-bold text-[1.2rem]">Quick Links</h4>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-light hover:underline cursor-pointer">Beranda</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Artikel</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Pendidikan & Kelas</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Donasi</p>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <p class="font-normal hover:underline cursor-pointer">Kontak</p>
                </a>
            </div>

            {{-- Pages --}}
            <div class="text-white flex flex-col gap-3">
                <h4 class=" text-white font-bold text-[1.2rem]">Kontak Kami</h4>
                <p class="font-light text-[.9rem]">WID — Women in Development Jl. Mawar No. 12,
                    Kebayoran Baru, Jakarta Selatan, DKI Jakarta 12120, Indonesia</p>
                <div class="flex flex-col gap-1">
                    <p class="font-light text-[.9rem]">+62-812-3456-7890</p>
                    <p class="font-light text-[.9rem]">hi@WID Women In Development</p>
                    <div>

                        <a href="">
                            <i class="fa-brands fa-facebook text-2xl"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-youtube text-2xl"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-pinterest text-2xl"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-linkedin text-2xl"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Header --}}
    <script>
        window.addEventListener("scroll", function() {
            const header = document.getElementById("mainHeader");
            if (window.scrollY > 10) {
                header.classList.add("shadow-md", "backdrop-blur-sm");
            } else {
                header.classList.remove("shadow-md", "backdrop-blur-sm");
            }
        });
    </script>

    <!-- SCRIPT UNTUK MENU DAN SCROLL -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const header = document.getElementById('mainHeader');

        // buka menu
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenu.classList.add('translate-x-0');
        });

        // tutup menu
        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.add('translate-x-full');
        });

        // efek scroll: header tetap putih + muncul shadow halus
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-md', 'bg-white');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>

    {{-- FLOWBITE --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    {{-- slider artikel --}}
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            grid: {
                rows: 1,
            },
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // 📱 HP
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                // 📲 Tablet
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                // 💻 Laptop / Desktop
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
        });
    </script>

</body>

</html>
