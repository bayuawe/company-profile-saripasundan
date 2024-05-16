@extends('front.layouts.app')
@section('title', 'Sari Pasudan - Pekanbaru')
@section('content')

    <x-navbar />

    <header
        class="bg-[url('{{ asset('images/backgrounds/hero-image.jpg') }}')] bg-cover bg-no-repeat bg-center relative z-0">
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-white/70 to-white z-0"></div>
        <div class="relative overflow-hidden">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
                <div class="text-center">
                    <h1 class="text-4xl sm:text-6xl font-bold text-yellow-400">
                        Yuk berkontribusi dalam menjalin kebermanfaatan jajanan khas Jawa Barat
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="grid lg:grid-cols-2 gap-6">

                @forelse ($careers as $career)
                    <a class="group relative block rounded-xl" href="{{ route('front.career_details', $career->slug) }}">
                        <div
                            class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:z-[1] before:size-full before:bg-gradient-to-t before:from-gray-900/70">
                            <img class="size-full absolute top-0 start-0 object-cover"
                                src="{{ Storage::url($career->cover) }}" alt="{{ $career->title }}">
                        </div>

                        <div class="absolute bottom-0 inset-x-0 z-10">
                            <div class="flex flex-col h-full p-4 sm:p-6">
                                <h3 class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80">
                                    {{ $career->title }}
                                </h3>
                                <p class="mt-2 text-white/80">
                                    {{ Str::limit($career->description, 20) }}
                                </p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-center text-yellow-400 text-xl">Lowongan pekerjaan tidak tersedia</p>
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
