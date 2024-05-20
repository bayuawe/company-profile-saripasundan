<!-- ========== HEADER ========== -->
<header
    class="flex top-0 fixed shadow-md flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-white  text-sm py-3 md:py-0">
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
        <div class="relative md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <a href="#" aria-label="Brand">
                    <img src="{{ asset('images/logos/logosp.png') }}" alt="Brand Logo" class="h-8">
                </a>
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle flex justify-center items-center size-9 text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="navbar-collapse-with-animation"
                class="hs-collapse  hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                    <div
                        class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid">
                        <a class="font-medium text-gray-800 py-3 md:py-6" href="{{ route('front.index') }}"
                            aria-current="page">Home</a>

                        <div
                            class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-6">
                            <button type="button"
                                class="flex items-center w-full text-gray-800 hover:text-gray-600 font-medium">
                                Produk Kami
                                <svg class="flex-shrink-0 ms-2 size-2.5" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-80 hidden z-10 bg-white md:shadow-2xl rounded-lg py-2 md:p-2 before:absolute top-full before:-top-5 before:start-0 before:w-full before:h-5">
                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 1) }}">
                                    <img src="{{ asset('images/cake.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Kue</span>
                                        Temukan kue yang tersedia di Sari Pasundan
                                    </div>
                                </a>

                                <div class="my-2 border-t border-gray-100"></div>

                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 2) }}">
                                    <img src="{{ asset('images/snack.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Snack</span>
                                        Temukan snack yang tersedia di Sari Pasundan
                                    </div>
                                </a>

                                <div class="my-2 border-t border-gray-100"></div>

                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 3) }}">
                                    <img src="{{ asset('images/drink.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Minuman</span>
                                        Temukan minuman yang tersedia di Sari Pasundan
                                    </div>
                                </a>

                                <div class="my-2 border-t border-gray-100"></div>

                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 4) }}">
                                    <img src="{{ asset('images/another.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Produk Lainnya</span>
                                        Temukan produk lainnya yang tersedia di Sari Pasundan
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div
                            class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-4">
                            <button type="button"
                                class="flex items-center w-full text-gray-800 hover:text-gray-900 font-medium ">
                                Perusahaan
                                <svg class="flex-shrink-0 ms-2 size-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full start-0 min-w-60 bg-white md:shadow-2xl rounded-lg py-2 md:p-4 before:absolute before:-top-5 before:start-0 before:w-full before:h-5">
                                <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div class="flex flex-col mx-1 md:mx-0">
                                        <a class="group flex gap-x-5 hover:bg-gray-100 rounded-lg p-4 text-gray-800 hover:text-gray-900"
                                            href="{{ route('front.certificate') }}">
                                            <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                            </svg>
                                            <div class="grow">
                                                <p class="font-medium text-gray-800">
                                                    Sertifikasi dan Izin
                                                </p>
                                                <p class="text-sm text-gray-500 hover:text-gray-800">
                                                    Sertifikasi produk halal dan izin lainnya</p>
                                            </div>
                                        </a>

                                        <a class="group flex gap-x-5 hover:bg-gray-100 rounded-lg p-4 text-gray-800 hover:text-gray-900"
                                            href="{{ route('front.about') }}">
                                            <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <rect width="7" height="7" x="14" y="3" rx="1" />
                                                <path
                                                    d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3" />
                                            </svg>
                                            <div class="grow">
                                                <p class="font-medium text-gray-800">Tentang Kami
                                                </p>
                                                <p class="text-sm text-gray-500 hover:text-gray-800">
                                                    Tentang Sari Pasundan</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="flex flex-col mx-1 md:mx-0">
                                        <a class="group flex gap-x-5 hover:bg-gray-100 rounded-lg p-4 text-gray-800 hover:text-gray-900"
                                            href="{{ route('front.contact') }}">
                                            <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                <circle cx="9" cy="7" r="4" />
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            </svg>
                                            <div class="grow">
                                                <p class="font-medium text-gray-800">Kontak Kami
                                                </p>
                                                <p class="text-sm text-gray-500 hover:text-gray-800">
                                                    Learn, share, and connect with other Preline users.</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="flex flex-col pt-4 md:pt-0 mx-1 md:mx-0">
                                        <span class="text-sm font-semibold uppercase text-gray-800">Karir</span>

                                        <!-- Link -->
                                        <a class="group mt-2 p-3 flex gap-x-5 items-center rounded-xl hover:bg-gray-100"
                                            href="{{ route('front.career') }}">
                                            <img class="size-32 rounded-lg"
                                                src="https://images.unsplash.com/photo-1648737967328-690548aec14f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90oy1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80"
                                                alt="Image Description">
                                            <div class="grow">
                                                <p class="text-sm text-gray-800">
                                                    Kesempatan kerja yang tersedia di Sari Pasundan
                                                </p>
                                                <p
                                                    class="mt-3 inline-flex items-center gap-x-1 text-sm text-yellow-400 decoration-2 hover:underline font-medium">
                                                    Lihat
                                                    <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </p>
                                            </div>
                                        </a>
                                        <!-- End Link -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="font-medium text-gray-800 hover:text-gray-600 py-3 md:py-6"
                            href="{{ route('front.contact') }}">
                            Lokasi Outlet
                        </a>

                        <div class="pt-3 md:pt-0">
                            @guest
                                <a class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-yellow-400 bg-transparent text-yellow-400 hover:border-yellow-500 hover:text-yellow-500 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('login') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 12c2.28 0 4-1.72 4-4s-1.72-4-4-4-4 1.72-4 4 1.72 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                    Login
                                </a>
                                <a class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-500 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('register') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    Register
                                </a>
                            @endguest

                            @auth
                                <a class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-500 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('register') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                                    </svg>
                                    My Dashboard
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->
