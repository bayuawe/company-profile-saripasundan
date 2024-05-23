<!-- ========== FOOTER ========== -->
<footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Grid -->
    <div class="text-center">
        <div>
            <a class="flex items-center justify-center h-11 py-2">
                <img src="{{ asset('images/logos/logosp.png') }}" alt="Sari Pasundan Logo" class="h-full w-auto">
            </a>
            <a class="flex-none text-xl font-semibold text-yellow-400" href="{{ route('front.index') }}"
                aria-label="Brand">Sari Pasundan</a>
        </div>
        <!-- End Col -->

        <div class="mt-3">
            <p class="text-yellow-500"> Kami adalah bagian dari<a
                    class="font-semibold text-yellow-400 hover:text-yellow-500" href="{{ route('front.about') }}"> CV.
                    Sari Pasundan
                    Berkah</a>.</p>
            <p class="text-yellow-500">© {{ date('Y') }} CV. Sari Pasundan Berkah. All rights reserved.</p>
        </div>

    </div>
    <!-- End Grid -->
</footer>
<!-- ========== END FOOTER ========== -->
