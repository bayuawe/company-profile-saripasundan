@extends('front.layouts.app')
@section('title', 'Sari Pasundan Pekanbaru - Detail Produk')
@section('content')

    <x-navbar />

    <header class="w-full pt-[74px] pb-[103px] relative z-0 mt-[3.9rem] md:mt-[4.3rem]">
        <div class="background-image w-full h-full absolute top-0 overflow-hidden z-0">
            <img src="{{ $product->cover }}" class="w-full h-full object-cover" alt="hero image">
        </div>
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-white/70 to-white z-0"></div>
    </header>

    <section>
        <!-- Hero -->
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                <div>
                    <div class="mt-7 grid gap-3 w-full sm:inline-flex py-4">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:shadow-lg disabled:opacity-50 disabled:pointer-events-none"
                            href="{{ route('front.category', $product->category->id) }}">
                            {{ $product->category->name }}
                        </a>
                    </div>

                    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">
                        {{ $product->name }}</h1>

                    <p class="mt-3 text-lg text-gray-800">{{ $product->about }}</p>

                    <h3 class="block mt-2 text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">
                        Rp. {{ number_format($product->price) }}</h3>

                </div>
                <!-- End Col -->

                <div class="relative ms-4">
                    <img class="w-full rounded-md" src="{{ $product->cover }}" alt="Image Description">
                    <div
                        class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6">
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Hero -->
    </section>

    <section class="py-10">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-yellow-400">Produk yang mungkin kamu suka
                </h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($other_products as $product)
                    <a class="group block shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition bg-yellow-400"
                        href="{{ route('front.details', $product->slug) }}">
                        <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                            <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-110 transition-transform duration-300 ease-in-out rounded-xl"
                                src="{{ $product->cover }}" alt="{{ $product->name }}">
                            <span
                                class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-sm font-semibold bg-yellow-200 text-gray-800 py-2 px-4">
                                {{ $product->category->name }}
                            </span>

                            <span
                                class="absolute bottom-4 start-4 rounded-xl text-sm font-semibold bg-yellow-400 text-gray-800 py-2 px-4">
                                Rp. {{ number_format($product->price) }}
                            </span>
                        </div>

                        <div class="p-5 flex flex-col">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-gray-800">
                                {{ $product->name }}
                            </h3>
                            <p class="mt-2 text-lg text-yellow-700">
                                {{ Str::limit($product->about, 10) }}
                            </p>
                        </div>
                    </a>
                @empty
                    <p>
                        Produk tidak tersedia
                    </p>
                @endforelse
            </div>
        </div>
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
