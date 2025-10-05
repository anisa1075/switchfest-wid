<x-layout :title="$title">
    <section class="flex pb-0">
        <div class=" bg-gradient-to-t from-[#AD74C3] to-[#7A3A8E] w-[50%]">
            <img src={{ asset('assets/women.png') }} alt="Background Artikel" class="">
        </div>
        <div class=" flex flex-col items-center justify-center w-[50%]">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo WID" class="w-[75px] h-[48px]">
                <img src="{{ asset('assets/wid.png') }}" alt="WID" class="h-[48px]">
            </div>

            <h1 class=" text-purple font-semibold text-[2rem]">Login</h1>

            <!-- Form -->
            <form action="" method="POST" class="space-y-5 w-full px-20">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#AD74C3] focus:outline-none"
                        placeholder="example@email.com" required>
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-[#AD74C3] focus:outline-none"
                        placeholder="Enter your password" required>
                </div>

                <!-- Forgot Password -->
                <div class="flex justify-end">
                    <a href="" class="text-sm text-[#7E4190] hover:underline">Forgot
                        Password?</a>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-gradient-to-r from-[#7E4190] to-[#AD74C3] text-white py-3 rounded-lg font-semibold text-lg hover:opacity-90 transition duration-300">
                    Login
                </button>
            </form>
        </div>


    </section>
</x-layout>
