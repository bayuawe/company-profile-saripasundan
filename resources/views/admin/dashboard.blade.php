<x-app-layout>
    <div class="py-12">

        <div class="overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="py-5 bg-red-500 text-white font-bold">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-flow-col md:gap-6 justify-stretch">
                <div class="flex flex-col bg-white border-2 shadow-sm hover:shadow-lg rounded-xl">
                    <h1 class="py-5 font-bold uppercase text-yellow-400 text-2xl text-center">
                        overview : Sari Pasundan Pekanbaru
                    </h1>
                </div>
            </div>


            <div class="grid grid-flow-col md:gap-6 justify-stretch">

                <div class="flex flex-col bg-white border-2 shadow-sm hover:shadow-lg rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-lg uppercase tracking-wide text-gray-500 font-bold">
                                Total Products
                            </p>
                        </div>

                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-3xl font-bold text-yellow-400">
                                {{ count($my_products) }}
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border-2 shadow-sm hover:shadow-lg rounded-xl">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center gap-x-2">
                            <p class="text-lg uppercase tracking-wide text-gray-500 font-bold">
                                Lowongan Pekerjaan
                            </p>
                        </div>

                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-3xl font-bold text-yellow-400">
                                {{ count($my_careers) }}
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
