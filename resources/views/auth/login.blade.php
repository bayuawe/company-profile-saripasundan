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
                        <h1 class="text-gray-500 dark:text-gray-300">Didn't have an account? <a
                                href="{{ route('register') }}" class="text-yellow-400 hover:underline">Register</a></h1>
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" method="POST"
                        action="{{ route('login') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="email"
                                :value="__('Email')">Email</label>
                            <input id="email" type="email" name="email" placeholder="johnsnow@example.com"
                                :value="old('email')" required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password" :value="__('Password')"
                                class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <input id="password" type="password" placeholder="Enter your password"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-yellow-400 focus:ring-yellow-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-yellow-400 shadow-sm focus:ring-yellow-400"
                                    name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>


                        <button
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-yellow-400 rounded-md hover:bg-yellow-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>{{ __('Log in') }}</span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>


                    </form>

                    <div class="mt-6">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
