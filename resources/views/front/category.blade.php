@extends('front.layouts.app')
@section('title', 'Belibang Digital Marketplace')
@section('content')

    <x-navbar />

    <header
        class="bg-[url('{{ asset('images/backgrounds/hero-image.jpg') }}')] bg-cover bg-no-repeat bg-center relative z-0">
        <!-- Gradient Overlay -->
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-white/70 to-white z-0"></div>
        <!-- Hero -->
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
                <div class="text-center">

                    <h1 class="text-4xl sm:text-6xl font-bold text-yellow-600">
                        {{ $category->name }}
                    </h1>

                    <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                        <!-- Form -->
                        <form action="{{ route('front.search') }}" method="GET">
                            <div class="relative z-10 flex space-x-3 p-3 bg-white border rounded-lg shadow-xl">
                                <div class="flex-grow">
                                    <label for="searchInput" class="sr-only">Cari Produk..</label>
                                    <input type="search" name="keyword" id="searchInput"
                                        class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-yellow-400 focus:ring-yellow-500 text-gray-800"
                                        placeholder="Cari produk atau kategori...">
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="submit"
                                        class="inline-flex justify-center items-center p-2.5 text-sm font-semibold rounded-lg bg-yellow-400 text-white hover:bg-yellow-500">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8" />
                                            <path d="m21 21-4.3-4.3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->

                        <!-- SVG Element -->
                        <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
                            <svg class="w-16 h-auto text-yellow-500" width="121" height="135" viewBox="0 0 121 135"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->

                        <!-- SVG Element -->
                        <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
                            <svg class="w-40 h-auto text-yellow-400" width="347" height="188" viewBox="0 0 347 188"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426"
                                    stroke="currentColor" stroke-width="7" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->
    </header>


    <section id="NewProduct" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-[32px]">New Product</h2>
        <div class="grid grid-cols-4 gap-[22px]">

            @forelse($product_categories as $product)
                <a class="group block shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition bg-yellow-500"
                    href="{{ route('front.details', $product->slug) }}">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                        <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-110 transition-transform duration-300 ease-in-out rounded-xl"
                            src="{{ Storage::url($product->cover) }}" alt="{{ $product->name }}">
                        <span
                            class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-sm font-semibold bg-yellow-500 text-black py-2 px-4">
                            {{ $product->category->name }}
                        </span>
                    </div>

                    <div class="p-5">
                        <h3 class="text-2xl font-bold text-gray-900 group-hover:text-gray-800">
                            {{ $product->name }}
                        </h3>
                        <p class="mt-2 text-lg text-yellow-700">
                            {{ Str::limit($product->about, 15) }}
                        </p>
                        <div class="mt-4 text-2xl font-bold text-gray-900 relative">
                            Rp. {{ number_format($product->price) }}
                        </div>
                    </div>
                </a>
            @empty
                <p>
                    Belum ada produk tersedia.
                </p>
            @endforelse

        </div>
    </section>

    <x-testimonials />

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
