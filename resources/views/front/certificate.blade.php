@extends('front.layouts.app')
@section('title', 'Sari Pasudan | Certificate')
@section('content')

    <x-navbar />

    <header
        class="bg-[url('{{ asset('images/backgrounds/hero-image.jpg') }}')] mt-[3.9rem] md:mt-[4.3rem] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-white/70 to-white z-0"></div>
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-gray-800">
                        Sertifikasi dan Izin
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-gray-700 mb-3">Sertifikasi Halal MUI</h3>
                    <div class="inline-block relative overflow-hidden shadow-lg">
                        <div class="relative w-full max-w-full overflow-hidden">
                            <object data="{{ asset('images/certificates/halal.pdf') }}" type="application/pdf"
                                style="width: 100%; height: 300px;">
                                <a href="{{ asset('images/certificates/halal.pdf') }}"
                                    class="absolute inset-0 flex items-center justify-center">
                                    <span
                                        class="text-lg text-white bg-yellow-500 hover:bg-yellow-600 rounded-md px-6 py-3">Unduh
                                        PDF</span>
                                </a>
                            </object>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-gray-700 mb-3">Sertifikasi Halal</h3>
                    <div class="inline-block relative overflow-hidden shadow-lg">
                        <div class="relative w-full max-w-full overflow-hidden">
                            <object data="{{ asset('images/certificates/halal.pdf') }}" type="application/pdf"
                                style="width: 100%; height: 300px;">
                                <a href="{{ asset('images/certificates/halal.pdf') }}"
                                    class="absolute inset-0 flex items-center justify-center">
                                    <span
                                        class="text-lg text-white bg-yellow-500 hover:bg-yellow-600 rounded-md px-6 py-3">Unduh
                                        PDF</span>
                                </a>
                            </object>
                        </div>
                    </div>
                </div>
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
