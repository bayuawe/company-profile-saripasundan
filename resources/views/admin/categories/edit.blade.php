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

                            <form method="POST" action="{{ route('admin.categories.update', $category) }}"
                                enctype="multipart/form-data" class="px-10 py-6">

                                @csrf

                                @method('PUT')
                                <h1 class="text-indigo-950 text-3xl font-bold">Edit Category</h1>

                                <div class="mt-4">
                                    <x-input-label for="icon" :value="__('Existing Icon')" />
                                    <img src="{{ Storage::url($category->icon) }}"
                                        class="object-cover h-80 w-full rounded-lg" alt="">
                                    <x-text-input id="cover"
                                        class="block shadow-md mt-1 w-full border border-gray-300" type="file"
                                        name="icon" />
                                    <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                </div>

                                <!-- Name -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input value="{{ $category->name }}" id="name" class="block mt-1 w-full"
                                        type="text" name="name" autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                
                                <div class="flex items-center justify-end mt-4">

                                    <x-primary-button class="ms-4">
                                        {{ __('Update Category') }}
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
