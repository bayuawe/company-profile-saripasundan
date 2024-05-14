<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-white text-sm py-3 md:py-0">
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
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                    <div
                        class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid">
                        <a class="font-medium text-gray-800 py-3 md:py-6" href="#" aria-current="page">Home</a>

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
                                    <img src="{{ asset('images/ic_template.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Kue</span>
                                        Temukan kue yang tersedia di Sari Pasundan
                                    </div>
                                </a>

                                <div class="my-2 border-t border-gray-100"></div>

                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 2) }}">
                                    <img src="{{ asset('images/ic_template.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Snack</span>
                                        Temukan snack yang tersedia di Sari Pasundan
                                    </div>
                                </a>

                                <div class="my-2 border-t border-gray-100"></div>

                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 3) }}">
                                    <img src="{{ asset('images/ic_template.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Minuman</span>
                                        Temukan minuman yang tersedia di Sari Pasundan
                                    </div>
                                </a>

                                <div class="my-2 border-t border-gray-100"></div>

                                <a class="inline-flex gap-x-5 w-full p-4 text-gray-600 rounded-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                    href="{{ route('front.category', 4) }}">
                                    <img src="{{ asset('images/ic_template.svg') }}" class="flex-shrink-0 size-5 mt-1"
                                        width="24" height="24">
                                    <div class="grow">
                                        <span class="block font-semibold mb-1 text-gray-800">Produk Lainnya</span>
                                        Temukan produk lainnya yang tersedia di Sari Pasundan
                                    </div>
                                </a>
                            </div>
                        </div>

                        <a class="font-medium text-gray-800 hover:text-gray-600 py-3 md:py-6"
                            href="{{ route('front.about') }}">
                            Tentang Kami
                        </a>

                        <a class="font-medium text-gray-800 hover:text-gray-600 py-3 md:py-6" href="#">
                            Lokasi Outlet
                        </a>

                        <div class="pt-3 md:pt-0">
                            @guest
                                <a class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-yellow-400 bg-transparent text-yellow-400 hover:border-yellow-500 hover:text-yellow-500 disabled:opacity-50 disabled:pointer-events-none"
                                    href="{{ route('login') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20 8v6m0 0v6m0-6h-6m6 0h6" />
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
