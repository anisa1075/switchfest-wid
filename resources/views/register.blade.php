<x-layout :title="$title">
    <section>
        <img src={{ asset('assets/register.png') }} alt="Background Artikel" class="">

        <div class=" flex flex-col items-center justify-center w-full p-20 ">

            <div class="border-1 border-[#E4CDE4] w-[40%] p-10 rounded-xl">
                <h1 class=" text-purple font-semibold text-[2rem] text-center">Register</h1>

                <!-- Form -->
                <form action="" method="POST" class="space-y-5">
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
                        class="w-full cursor-pointer bg-gradient-to-r from-[#7E4190] to-[#AD74C3] text-white py-3 rounded-lg font-semibold text-lg hover:opacity-90 transition duration-300">
                        Sign Up
                    </button>
                </form>
            </div>

        </div>
    </section>
</x-layout>
