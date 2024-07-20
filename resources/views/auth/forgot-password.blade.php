<x-guest-layout>
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm max-w-md mx-auto">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <img src="{{ asset('images/logos/logosp.png') }}" alt="Logo" class="block mx-auto mb-4"
                    style="width: 30%;">
                <h1 class="block text-2xl font-bold text-gray-800">Forgot Password</h1>
                <p class="mt-2 text-sm text-gray-600">
                    Enter Your Email Address
                </p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <!-- Form Group -->
                        <div>
                            <label for="email" class="block text-sm mb-2">Email Address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-yellow-400 focus:ring-yellow-400 disabled:opacity-50 disabled:pointer-events-none"
                                    required aria-describedby="email-error">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->
                    </div>
                    <button type="submit"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-500 disabled:opacity-50 disabled:pointer-events-none mt-4">Reset
                        Password</button>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</x-guest-layout>
