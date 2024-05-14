@extends('front.layouts.app')
@section('title', 'Sari Pasudan - Pekanbaru')
@section('content')

    <x-navbar />

    <header
        class="bg-[url('{{ asset('images/backgrounds/hero-image.jpg') }}')] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-white/70 to-white z-0"></div>
        <div class="relative overflow-hidden">

            <x-breadcrumbs />

            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-yellow-600">
                        Tentang Kami
                    </h1>
                </div>
            </div>
        </div>
    </header>


    <section class="py-10 text-center">
        <p class="mt-3 text-lg text-gray-800 italic">Visi Kami</p>
        <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl lg:text-6xl" style="line-height: 80px;">Menjadi
            yang
            terdepan dalam
            melestarikan jajanan khas<span class="text-yellow-400"> Jawa Barat</span></h1>
    </section>

    <section>
        <!-- Features -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="relative p-6 md:p-16">
                <!-- Grid -->
                <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                    <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                        <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl">
                            Misi Sari Pasundan
                        </h2>

                        <!-- Tab Navs -->
                        <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl active"
                                id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1"
                                role="tab">
                                <span class="flex">
                                    <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2v20M2 12h20" />
                                    </svg>
                                    <span class="grow ms-6">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Menggunakan
                                            Bahan Lokal</span>
                                        <span class="block mt-1 text-gray-800">Kami berkomitmen untuk menggunakan
                                            bahan-bahan lokal berkualitas tinggi untuk mendukung petani lokal.</span>
                                    </span>
                                </span>
                            </button>

                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl"
                                id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2"
                                role="tab">
                                <span class="flex">
                                    <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2v20M2 12h20" />
                                    </svg>
                                    <span class="grow ms-6">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Pelestarian
                                            Budaya</span>
                                        <span class="block mt-1 text-gray-800">Kami berdedikasi untuk melestarikan dan
                                            mempromosikan budaya Jawa Barat melalui jajanan khas kami.</span>
                                    </span>
                                </span>
                            </button>

                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl"
                                id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3"
                                role="tab">
                                <span class="flex">
                                    <svg class="flex-shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 2v20M2 12h20" />
                                    </svg>
                                    <span class="grow ms-6">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800">Inovasi
                                            Produk</span>
                                        <span class="block mt-1 text-gray-800">Kami terus berinovasi untuk menciptakan
                                            varian rasa baru yang unik dan menarik, memperkaya pengalaman kuliner pelanggan
                                            kami.</span>
                                    </span>
                                </span>
                            </button>
                        </nav>
                        <!-- End Tab Navs -->
                    </div>
                    <!-- End Col -->

                    <div class="lg:col-span-6">
                        <div class="relative">
                            <!-- Tab Content -->
                            <div>
                                <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                    <img class="shadow-xl shadow-gray-200 rounded-xl"
                                        src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                        alt="Image Description">
                                </div>

                                <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                    aria-labelledby="tabs-with-card-item-2">
                                    <img class="shadow-xl shadow-gray-200 rounded-xl"
                                        src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                        alt="Image Description">
                                </div>

                                <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                    aria-labelledby="tabs-with-card-item-3">
                                    <img class="shadow-xl shadow-gray-200 rounded-xl"
                                        src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&h=1220&q=80"
                                        alt="Image Description">
                                </div>
                            </div>
                            <!-- End Tab Content -->

                            <!-- SVG Element -->
                            <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                                <svg class="w-16 h-auto text-orange-500" width="121" height="135"
                                    viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                        stroke-width="10" stroke-linecap="round" />
                                    <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                    <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                </svg>
                            </div>
                            <!-- End SVG Element -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <!-- Background Color -->
                <div class="absolute inset-0 grid grid-cols-12 size-full">
                    <div
                        class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full">
                    </div>
                </div>
                <!-- End Background Color -->
            </div>
        </div>
        <!-- End Features -->
    </section>


    <x-testimonials />

    <x-faq />

    <x-reseller />

    <x-footer />


@endsection

@push('after-script')
    <script>
        $('.testi-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
        });

        // previous
        $('.btn-prev').on('click', function() {
            $('.testi-carousel').flickity('previous', true);
        });

        // next
        $('.btn-next').on('click', function() {
            $('.testi-carousel').flickity('next', true);
        });
    </script>

    <script>
        const searchInput = document.getElementById('searchInput');
        const resetButton = document.getElementById('resetButton');

        searchInput.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                resetButton.classList.remove('hidden');
            } else {
                resetButton.classList.add('hidden');
            }
        });

        resetButton.addEventListener('click', function() {
            resetButton.classList.add('hidden');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            menuButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event
                    .target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
@endpush
