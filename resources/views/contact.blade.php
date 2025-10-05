<x-layout :title="$title">

    <section class=" mt-[4rem]">
        <div class="layout flex flex-col items-center justify-center gap-12">
            <div class=" text-center lg:w-[70%] mx-4">
                <h2 class=" text-purple font-bold lg:text-[1.8rem] text-[1.5rem]">Contact Us</h2>
                <p class=" text-[1rem] text-[#4E596B] font-normal ">Jangan ragu untuk menghubungi kami melalui form ini
                    atau informasi kontak di bawah. Tim kami akan dengan senang hati membantu Anda.</p>
            </div>

            <div class=" bg-white shadow-[0px_0px_60px_black]/10 lg:flex items-center rounded-xl p-4 gap-12">
                <div class=" bg-[#522566] m-4 rounded-xl  lg:w-[40%] relative">

                    <div class="p-10 flex flex-col gap-40">
                        <div class=" flex flex-col gap-8">
                            <div>
                                <h5 class="font-semibold text-white text-[1.8rem]">Contact Information</h5>
                                <p class=" text-[#C9C9C9] font-normal text-[1rem]">Women In Development</p>
                            </div>

                            <div class=" flex flex-col gap-6">
                                <div class="flex items-center text-white font-normal gap-4">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <p class=" text-[.9rem]">+62-812-3456-7890</p>
                                </div>
                                <div class="flex items-center text-white font-normal gap-4">
                                    <i class="fa-solid fa-envelope"></i>
                                    <p class=" text-[.9rem]">hi@WID Women In Development</p>
                                </div>
                                <div class="flex items-center text-white font-normal gap-4">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p class=" text-[.8rem]">WID — Women in Development Jl. Mawar No. 12, Kebayoran
                                        Baru,
                                        Jakarta Selatan, DKI Jakarta
                                        12120, Indonesia</p>
                                </div>
                            </div>
                        </div>

                        <div class=" text-purple flex justify-between relative">
                            <div class="flex gap-2">
                                <div class="w-[30px] h-[30px] bg-white rounded-full flex items-center justify-center">
                                    <i class="fa-brands fa-twitter "></i>
                                </div>
                                <div class="w-[30px] h-[30px] bg-white rounded-full flex items-center justify-center">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div class="w-[30px] h-[30px] bg-white rounded-full flex items-center justify-center">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src={{ asset('assets/circle-contact.png') }} alt="Circle Contact"
                        class=" absolute top-82 bottom-0 right-0">


                </div>
                <div class=" flex flex-col gap-8">
                    <div class="grid lg:grid-cols-2 gap-10">
                        <div class=" flex flex-col">
                            <label for="nama_depan"
                                class="text-[#8D8D8D] font-medium text-[1rem] peer-focus:text-black transition-colors">
                                Nama Depan
                            </label>
                            <input type="text" id="nama_depan"
                                class="peer border-0 border-b-2 border-gray-300 focus:border-[#7E4190] focus:outline-none" />
                        </div>
                        <div class=" flex flex-col">
                            <label for="nama_belakang"
                                class="text-[#8D8D8D] font-medium text-[1rem] peer-focus:text-black transition-colors">
                                Nama Belakang
                            </label>
                            <input type="text" id="nama_depan"
                                class="peer border-0 border-b-2 border-gray-300 focus:border-[#7E4190] focus:outline-none" />
                        </div>
                        <div class=" flex flex-col">
                            <label for="email"
                                class="text-[#8D8D8D] font-medium text-[1rem] peer-focus:text-black transition-colors">
                                Email
                            </label>
                            <input type="email" id="email"
                                class="peer border-0 border-b-2 border-gray-300 focus:border-[#7E4190] focus:outline-none" />
                        </div>
                        <div class=" flex flex-col">
                            <label for="nomor"
                                class="text-[#8D8D8D] font-medium text-[1rem] peer-focus:text-black transition-colors">
                                Nomor Telepon
                            </label>
                            <input type="number" id="nomor"
                                class="peer border-0 border-b-2 border-gray-300 focus:border-[#7E4190] focus:outline-none" />
                        </div>
                    </div>

                    <div>
                        <p class="text-[#011C2A] font-medium text-base">Pilih Subject?</p>

                        <div class="lg:flex gap-4 mt-2">
                            <label class="flex items-center space-x-1 cursor-pointer select-none">
                                <input type="checkbox"
                                    class="peer appearance-none w-5 h-5 border-2 border-[#7E4190] rounded-full
                                    checked:bg-[#7E4190] checked:border-[#7E4190]
                                    focus:outline-none transition-all duration-200
                                    relative
                                    after:content-[''] after:absolute after:top-[2px] after:left-[6px]
                                    after:w-[5px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-white
                                    after:rotate-45 after:opacity-0
                                    checked:after:opacity-100" />
                                <span class="text-[#011C2A] text-base font-normal">Informasi Program</span>
                            </label>
                            <label class="flex items-center space-x-1 cursor-pointer select-none">
                                <input type="checkbox"
                                    class="peer appearance-none w-5 h-5 border-2 border-[#7E4190] rounded-full
                                    checked:bg-[#7E4190] checked:border-[#7E4190]
                                    focus:outline-none transition-all duration-200
                                    relative
                                    after:content-[''] after:absolute after:top-[2px] after:left-[6px]
                                    after:w-[5px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-white
                                    after:rotate-45 after:opacity-0
                                    checked:after:opacity-100" />
                                <span class="text-[#011C2A] text-base font-normal">Donasi & Kemitraan</span>
                            </label>
                            <label class="flex items-center space-x-1 cursor-pointer select-none">
                                <input type="checkbox"
                                    class="peer appearance-none w-5 h-5 border-2 border-[#7E4190] rounded-full
                                    checked:bg-[#7E4190] checked:border-[#7E4190]
                                    focus:outline-none transition-all duration-200
                                    relative
                                    after:content-[''] after:absolute after:top-[2px] after:left-[6px]
                                    after:w-[5px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-white
                                    after:rotate-45 after:opacity-0
                                    checked:after:opacity-100" />
                                <span class="text-[#011C2A] text-base font-normal">Pelatihan </span>
                            </label>
                            <label class="flex items-center space-x-1 cursor-pointer select-none">
                                <input type="checkbox"
                                    class="peer appearance-none w-5 h-5 border-2 border-[#7E4190] rounded-full
                                    checked:bg-[#7E4190] checked:border-[#7E4190]
                                    focus:outline-none transition-all duration-200
                                    relative
                                    after:content-[''] after:absolute after:top-[2px] after:left-[6px]
                                    after:w-[5px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-white
                                    after:rotate-45 after:opacity-0
                                    checked:after:opacity-100" />
                                <span class="text-[#011C2A] text-base font-normal">Lainnya </span>
                            </label>
                        </div>
                    </div>

                    <div class=" flex flex-col">
                        <label for="nama_depan"
                            class="text-[#8D8D8D] font-medium text-[1rem] peer-focus:text-black transition-colors">
                            Pesan Anda
                        </label>
                        <input type="text" id="nama_depan" placeholder=""
                            class="peer border-0 border-b-2 border-gray-300 focus:border-[#7E4190] focus:outline-none" />
                    </div>


                    <div class="mt-auto text-right">
                        <button
                            class="bg-[#522566] text-white px-6 py-2 rounded-[7px] text-[.8rem] cursor-pointer transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:from-[#AD74C3] hover:to-[#7E4190]">
                            Kirim Pesan
                        </button>
                    </div>

                </div>


            </div>



        </div>
    </section>
</x-layout>
