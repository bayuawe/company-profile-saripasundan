<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lowongan Pekerjaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm p-10 sm:rounded-lg">

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

                <form method="POST" action="{{ route('admin.careers.update', $career) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h1 class="text-indigo-950 text-3xl font-bold">Edit Lowongan Pekerjaan</h1>

                    <div class="mt-4">
                        <x-input-label for="cover" :value="__('Cover yang ada')" />
                        <img src="{{ Storage::url($career->cover) }}" class="h-[100px] w-auto" alt="">
                        <x-text-input id="cover" class="block mt-1 w-full" type="file" name="cover" />
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
                        <x-text-input value="{{ $career->description }}" id="description" class="block mt-1 w-full"
                            type="text" name="description" autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Requirements -->
                    <div class="mt-4">
                        <x-input-label for="requirements" :value="__('Persyaratan')" />
                        <x-text-input value="{{ $career->requirements }}" id="requirements" class="block mt-1 w-full"
                            type="text" name="requirements" autofocus autocomplete="requirements" />
                        <x-input-error :messages="$errors->get('requirements')" class="mt-2" />
                    </div>

                    <!-- Benefits -->
                    <div class="mt-4">
                        <x-input-label for="benefits" :value="__('Keuntungan')" />
                        <x-text-input value="{{ $career->benefits }}" id="benefits" class="block mt-1 w-full"
                            type="text" name="benefits" autofocus autocomplete="benefits" />
                        <x-input-error :messages="$errors->get('benefits')" class="mt-2" />
                    </div>

                    <!-- How to Apply -->
                    <div class="mt-4">
                        <x-input-label for="how_to_apply" :value="__('Cara Melamar')" />
                        <x-text-input value="{{ $career->how_to_apply }}" id="how_to_apply" class="block mt-1 w-full"
                            type="text" name="how_to_apply" autofocus autocomplete="how_to_apply" />
                        <x-input-error :messages="$errors->get('how_to_apply')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Update Lowongan Pekerjaan') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
