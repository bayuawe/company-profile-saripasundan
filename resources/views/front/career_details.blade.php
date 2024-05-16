@extends('front.layouts.app')
@section('title', 'Sari Pasudan - Pekanbaru')
@section('content')

    <x-navbar />

    <section>
        <!-- Blog Article -->
        <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
            <!-- Content -->
            <div class="space-y-5 md:space-y-8">

                <div class="space-y-3">
                    <h1 class="text-2xl font-bold md:text-3xl text-yellow-400">We're Hiring: Team {{ $career->title }}
                    </h1>
                </div>

                <figure>
                    <img class="w-full object-cover rounded-xl" src="{{ Storage::url($career->cover) }}"
                        alt="{{ $career->title }}">
                </figure>

                <h2 class="text-xl items-center text-yellow-400 font-bold">Description</h2>
                <p class="text-lg text-gray-800">{{ $career->description }}</p>

                <h2 class="text-xl text-yellow-400 font-bold">Requirements</h2>
                <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800">
                    @foreach (explode('|', $career->requirements) as $requirement)
                        <li class="ps-2">{{ $requirement }}</li>
                    @endforeach
                </ul>

                <h2 class="text-xl items-center text-yellow-400 font-bold">Benefits</h2>
                <p class="text-lg text-gray-800">{{ $career->benefits }}</p>

                <div>
                    <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200"
                        href="#">
                        Lowongan Pekerjaan
                    </a>
                    <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200"
                        href="#">
                        {{ $career->title }}
                    </a>
                </div>
            </div>
            <!-- End Content -->
        </div>
        </div>
        <!-- End Blog Article -->
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
