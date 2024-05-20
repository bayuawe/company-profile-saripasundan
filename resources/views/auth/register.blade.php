<x-guest-layout>

    <section class=" w-full h-screen flex items-center justify-center   ">
        <div class="flex justify-center w-full h-full">
            <div class="hidden bg-cover lg:block lg:w-2/5"
                style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
            </div>

            <div class="flex  items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Login
                    </h1>

                    <div class="mt-6">
                        <h1 class="text-gray-500 dark:text-gray-300">Have an account? <a href="{{ route('login') }}"
                                class="text-yellow-400 hover:underline">Login</a></h1>
                    </div>

                    <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" method="POST"
                        action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class=" w-full col-span-2">
                            <label for="avatar" :value="__('avatar')" class="sr-only">Choose file</label>
                            <input type="file" name="avatar" id="avatar"
                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-yellow-400 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                              file:bg-gray-50 file:border-0
                              file:me-4
                              file:py-3 file:px-4
                             "
                                required>
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="name"
                                :value="__('Name')">Name</label>
                            <input id="name" type="name" name="name" placeholder="Your full name"
                                :value="old('name')" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="email"
                                :value="__('Email')">Email</label>
                            <input id="email" type="email" name="email" placeholder="johnsnow@example.com"
                                :value="old('email')" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password" :value="__('Password')"
                                class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <input id="password" type="password" placeholder="Enter your password"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password-confirmation" :value="__('Confirm Password')"
                                class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm Password</label>
                            <input id="password-confirmation" type="password"
                                placeholder="Enter your password-confirmation"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password-confirmation')" class="mt-2" />
                        </div>

                        <button
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-yellow-400 rounded-md hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>{{ __('Register') }}</span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
