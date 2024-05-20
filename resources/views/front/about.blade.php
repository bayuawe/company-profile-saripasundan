@extends('front.layouts.app')
@section('title', 'Sari Pasudan - Pekanbaru')
@section('content')

    <x-navbar />

    <header
        class="bg-[url('{{ asset('images/backgrounds/hero-image.jpg') }}')] mt-[3.9rem] md:mt-[4.3rem] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-white/70 to-white z-0"></div>
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-gray-800">
                        Tentang Kami
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section class="py-10 text-center">
        <!-- Icon Blocks -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-12">
                <div class="lg:w-full">
                    <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl">
                        Apa itu <br>“Kue Balok Sari Pasundan”?
                    </h2>
                    <p class="mt-5">
                        <a class="inline-flex items-center gap-x-1 font-medium text-yellow-400"
                            href="{{ route('front.index') }}">
                            Lihat Produk
                            <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </p>
                </div>
                <!-- End Col -->

                <div class="space-y-6 lg:space-y-10">

                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span
                            class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 10v12" />
                                <path
                                    d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Produk
                            </h3>
                            <p class="mt-1 text-gray-600">
                                Kue Balok Sari Pasundan adalah makanan khas dari Jawa Barat yang diolah dengan bahan
                                berkualitas tinggi.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span
                            class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                                <path d="M9 12h1.5v3H9z"></path>
                                <path d="M13.5 12H15v3h-1.5z"></path>
                                <path d="M12 7a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Sejarah
                            </h3>
                            <p class="mt-1 text-gray-600">
                                “Sari Pasundan” adalah sebuah
                                Brand di bawah naungan CV.Sari Pasundan
                                Berkah yang sudah berdiri sejak “3 November
                                2018”
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex">
                        <!-- Icon -->
                        <span
                            class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                                <path d="M9 9h.01" />
                                <path d="M15 9h.01" />
                            </svg>
                        </span>
                        <div class="ms-5 sm:ms-8">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Tagline
                            </h3>
                            <p class="mt-1 text-gray-600">
                                Sari Pasundan memiliki tagline yaitu “Lembut,
                                Lumer, Coklat Asli” yang telah terdaftar di
                                “HAKI”
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Icon Blocks -->
    </section>

    <section class="py-10 text-center">
        <p class="mt-3 text-lg text-gray-800 italic">Visi Sari Pasundan</p>
        <h2 class="text-xl font-bold text-gray-800 sm:text-2xl md:text-3xl lg:text-4xl px-4" style="line-height: 60px;">
            Memberikan
            <span class="text-yellow-400">produk berkualitas kepada
                konsumen</span>, dengan harga yang
            terjangkau dan produk yang mudah
            didapat di seluruh Indonesia.
        </h2>
    </section>

    <section>
        <!-- Features -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="relative p-6 md:p-16">
                <!-- Grid -->
                <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                    <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                        <h2 class="text-2xl text-yellow-400 font-bold sm:text-3xl">
                            Misi Sari Pasundan
                        </h2>

                        <!-- Tab Navs -->
                        <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl active"
                                id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1"
                                role="tab">
                                <span class="flex">
                                    <span class="grow ms-6">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-yellow-400 text-gray-800">Menggunakan
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
                                    <span class="grow ms-6">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-yellow-400 text-gray-800">Pelestarian
                                            Budaya</span>
                                        <span class="block mt-1 text-gray-800">Kami berdedikasi untuk melestarikan dan
                                            mempromosikan budaya Jawa Barat melalui jajanan khas kami.</span>
                                    </span>
                                </span>
                            </button>

                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 p-4 md:p-5 rounded-xl"
                                id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3"
                                aria-controls="tabs-with-card-3" role="tab">
                                <span class="flex">
                                    <span class="grow ms-6">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-yellow-400 text-gray-800">Inovasi
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
                                    <img class="shadow-xl shadow-gray-200 w-auto h-96 rounded-xl object-cover"
                                        src="https://img.freepik.com/free-photo/young-brunette-woman-checking-information-about-delivery-parcels_23-2148944571.jpg?t=st=1715828990~exp=1715832590~hmac=5b22fd2a6ccc921b31c5f0f049ab4ab27cef6c62a259848612067807673fced4&w=740"
                                        alt="Image Description">
                                </div>

                                <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                    aria-labelledby="tabs-with-card-item-2">
                                    <img class="shadow-xl shadow-gray-200 w-auto h-96 rounded-xl object-cover"
                                        src="https://img.freepik.com/free-photo/city-seen-from-top-mountain_1232-997.jpg?t=st=1715828933~exp=1715832533~hmac=1d73fdfad1e269722514887d116b54bd1781135bc6cb983058b4cf4b363f5f2f&w=740"
                                        alt="Image Description">
                                </div>

                                <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                    aria-labelledby="tabs-with-card-item-3">
                                    <img class="shadow-xl shadow-gray-200 w-auto h-96 rounded-xl object-cover"
                                        src="https://img.freepik.com/free-photo/asian-businessmen-businesswomen-meeting-brainstorming-ideas-about-creative-web-design-planning-application-developing-template-layout-mobile-phone-project-working-together-small-office_7861-2682.jpg?t=st=1715829023~exp=1715832623~hmac=9bebf3c18f52fd61944c388f663f42b15b39dc8ce3131037d5bb1c775b798853&w=826"
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
