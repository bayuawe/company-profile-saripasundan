<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

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

                            <form method="POST" action="{{ route('admin.careers.update', $career) }}"
                                enctype="multipart/form-data" class="px-10 py-6">

                                @csrf

                                @method('PUT')
                                <h1 class="text-indigo-950 text-3xl font-bold">Edit Career</h1>

                                <div class="mt-4">
                                    <x-input-label for="cover" :value="__('Existing Cover')" />
                                    <img src="{{ Storage::url($career->cover) }}"
                                        class="object-cover h-80 w-full rounded-lg" alt="">
                                    <x-text-input id="cover"
                                        class="block shadow-md mt-1 w-full border border-gray-300" type="file"
                                        name="cover" />
                                    <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                                </div>

                                <!-- Title -->
                                <div class="mt-4">
                                    <x-input-label for="title" :value="__('Judul')" />
                                    <x-text-input value="{{ $career->title }}" id="title" class="block mt-1 w-full"
                                        type="text" name="title" autofocus autocomplete="title" />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>

                                <!-- Description -->
                                <div class="mt-4">
                                    <x-input-label for="description" :value="__('Deskripsi')" />
                                    <x-text-input value="{{ $career->description }}" id="description"
                                        class="block mt-1 w-full" type="text" name="description" autofocus
                                        autocomplete="description" />
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>

                                <!-- Requirements -->
                                <div class="mt-4">
                                    <x-input-label for="requirements" :value="__('Persyaratan')" />
                                    <x-text-input value="{{ $career->requirements }}" id="requirements"
                                        class="block mt-1 w-full" type="text" name="requirements" autofocus
                                        autocomplete="requirements" />
                                    <x-input-error :messages="$errors->get('requirements')" class="mt-2" />
                                </div>

                                <!-- Benefits -->
                                <div class="mt-4">
                                    <x-input-label for="benefits" :value="__('Keuntungan')" />
                                    <x-text-input value="{{ $career->benefits }}" id="benefits"
                                        class="block mt-1 w-full" type="text" name="benefits" autofocus
                                        autocomplete="benefits" />
                                    <x-input-error :messages="$errors->get('benefits')" class="mt-2" />
                                </div>

                                <!-- How to Apply -->
                                <div class="mt-4">
                                    <x-input-label for="how_to_apply" :value="__('Cara Melamar')" />
                                    <x-text-input value="{{ $career->how_to_apply }}" id="how_to_apply"
                                        class="block mt-1 w-full" type="text" name="how_to_apply" autofocus
                                        autocomplete="how_to_apply" />
                                    <x-input-error :messages="$errors->get('how_to_apply')" class="mt-2" />
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Update Job Vacancy') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
