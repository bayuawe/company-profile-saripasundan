<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data"
                                class="px-10 py-6">
                                @csrf

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

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <h1 class="text-gray-800 text-3xl font-bold">Add New Product</h1>

                                <div class="mt-4 w-full ">
                                    <x-input-label for="cover" :value="__('Cover')" />
                                    <x-text-input id="cover"
                                        class="block mt-1 shadow-md w-full border border-gray-300" type="file"
                                        name="cover" required />
                                    <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                                </div>

                                <!-- Name -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full border-gray-300"
                                        type="text" name="name" :value="old('name')" required autofocus
                                        autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="price" :value="__('Price')" />
                                    <x-text-input id="price" class="block mt-1 w-full border-gray-300"
                                        type="number" name="price" :value="old('price')" required autofocus
                                        autocomplete="price" />
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="category" :value="__('Category')" />
                                    <select name="category_id" id="category"
                                        class="w-full py-3 pl-5 border border-gray-300 rounded-lg">
                                        <option value="">Select category</option>
                                        @forelse($categories as $category)
                                            <option class="rounded-lg" value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                </div>

                                <div class="mt-4">
                                    <x-input-label for="about" :value="__('About')" />
                                    <textarea name="about" id="about" class="w-full py-3 pl-5 border border-gray-300 rounded-lg"></textarea>
                                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Add Product') }}
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
