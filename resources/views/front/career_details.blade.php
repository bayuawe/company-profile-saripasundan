@extends('front.layouts.app')
@section('title', 'Sari Pasudan | Career Details')
@section('content')

    <x-navbar />

    <section class="py-20">
        <!-- Blog Article -->
        <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
            <!-- Content -->
            <div class="space-y-5 md:space-y-8">

                <div class="flex justify-between items-center mb-6">
                    <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                        <div class="flex-shrink-0">
                            <img class="size-12 rounded-full" src="{{ $career->creator->avatar }}" alt="Image Description">
                        </div>

                        <div class="grow">
                            <div class="flex justify-between items-center gap-x-2">
                                <div>
                                    <!-- Tooltip -->
                                    <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                        <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                            <span class="font-semibold text-gray-800">
                                                {{ $career->creator->name }}
                                            </span>

                                            <!-- Dropdown Card -->
                                            <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-white divide-y divide-gray-700 shadow-lg rounded-xl"
                                                role="tooltip">
                                                <!-- Body -->
                                                <div class="p-4 sm:p-5">
                                                    <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                                                        <div class="flex-shrink-0">
                                                            <img class="size-8 rounded-full"
                                                                src="{{ $career->creator->avatar }}"
                                                                alt="Image Description">
                                                        </div>

                                                        <div class="grow">
                                                            <p class="text-lg font-semibold text-gray-800">
                                                                {{ $career->creator->name }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="italic text-sm text-gray-800 dark:text-neutral-400">
                                                        Supervisor Sari Pasundan Pekanbaru
                                                    </p>
                                                </div>
                                                <!-- End Body -->

                                            </div>
                                            <!-- End Dropdown Card -->
                                        </div>
                                    </div>
                                    <!-- End Tooltip -->

                                    <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                        <li
                                            class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                            {{ $career->created_at->format('d F Y') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Avatar Media -->

                <div class="space-y-3">
                    <h1 class="text-2xl font-bold md:text-3xl text-yellow-400">We're Hiring: Posisi {{ $career->title }}
                    </h1>
                </div>

                <figure>
                    <img class="h-96 w-full object-cover rounded-xl" src="{{ $career->cover }}" alt="{{ $career->title }}">
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
