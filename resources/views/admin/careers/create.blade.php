<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Careers') }}
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

                <form method="POST" action="{{ route('admin.careers.store') }}" enctype="multipart/form-data">
                    @csrf

                    <h1 class="text-indigo-950 text-3xl font-bold">Add New Career</h1>

                    <div class="mt-4">
                        <x-input-label for="cover" :value="__('Cover')" />
                        <x-text-input id="cover" class="block mt-1 w-full" type="file" name="cover" required />
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                            :value="old('description')" required autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="requirements" :value="__('Requirments')" />
                        <x-forms.richtext id="requirements" class="block mt-1 w-full" type="text" name="requirements"
                            :value="old('requirements')" required autofocus autocomplete="requirements" />
                        <x-input-error :messages="$errors->get('requirements')" class="mt-2" />
                        <p class="text-sm text-gray-500 mt-2">Tambahkan " | " pada setiap belakang poin</p>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="benefits" :value="__('Benefits')" />
                        <x-text-input id="benefits" class="block mt-1 w-full" type="text" name="benefits"
                            :value="old('benefits')" required autofocus autocomplete="benefits" />
                        <x-input-error :messages="$errors->get('benefits')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="how_to_apply" :value="__('How to Apply')" />
                        <x-text-input id="how_to_apply" class="block mt-1 w-full" type="text" name="how_to_apply"
                            :value="old('how_to_apply')" required autofocus autocomplete="how_to_apply" />
                        <x-input-error :messages="$errors->get('how_to_apply')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Add Career') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
