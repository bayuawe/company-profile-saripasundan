<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

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

            <div class="w-full flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                                <div>
                                    <h2 class="font-bold text-2xl text-gray-800">
                                        Categories
                                    </h2>
                                    <p class="text-sm text-gray-600">
                                        Add Categories, edit and more.
                                    </p>
                                </div>

                                <div class="flex items-center gap-x-2">
                                    <form method="GET" action="{{ route('admin.categories.index') }}"
                                        class="flex items-center">
                                        <input type="text" name="search" placeholder="Search Categories"
                                            value="{{ request('search') }}"
                                            class="py-2 px-3 border border-gray-300 rounded-lg text-sm focus:border-yellow-400 focus:ring-yellow-400">
                                        <button type="submit"
                                            class="py-2 px-3 ml-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-400 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none">
                                            Search
                                        </button>
                                    </form>
                                    <div class="inline-flex gap-x-2">
                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-400 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none"
                                            href="{{ route('admin.categories.create') }}">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                            Add Category
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <label for="hs-at-with-checkboxes-main" class="flex items-center">
                                                <input type="checkbox"
                                                    class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                    id="hs-at-with-checkboxes-main">
                                                <span class="sr-only">Checkbox</span>
                                            </label>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                icon
                                            </span>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Name
                                            </span>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Slug
                                            </span>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                Created
                                            </span>
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($categories as $category)
                                        <tr>
                                            <td class="px-6 py-4 text-left">
                                                <input type="checkbox"
                                                    class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <img class="inline-block max-w-28 h-auto object-cover rounded"
                                                            src="{{ $category->icon }}" alt="Image Description">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-left">
                                                <span
                                                    class="font-bold text-sm text-gray-800">{{ $category->name }}</span>
                                            </td>
                                            <td class="px-6 py-4 text-left">
                                                <span
                                                    class="italic text-sm text-gray-800">{{ Str::limit($category->slug, 15) }}</span>
                                            </td>
                                            <td class="px-6 py-4 text-left">
                                                <span
                                                    class="italic text-sm text-gray-500">{{ $category->created_at->format('d F Y') }}</span>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 ">
                                                    <a class="rounded-lg py-1.5 px-6 border border-yellow-400 hover:bg-yellow-400 hover:text-gray-800 text-yellow-400 font-bold text-sm w-full block text-center"
                                                        href="{{ route('admin.categories.edit', $category) }}">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="px-6 py-1.5">
                                                    <form action="{{ route('admin.categories.destroy', $category) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="rounded-lg py-1.5 px-6 bg-red-500 hover:bg-red-400 text-white font-bold text-sm w-full">
                                                            Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5"
                                                class="px-6 py-6 text-lg font-bold text-yellow-400 text-center">
                                                Belum ada kategori tersedia
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!-- End Table -->

                            <!-- Footer -->

                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                                <div>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-semibold text-gray-800">{{ $categories->count() }}</span>
                                        Categories pada halaman ini
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Total
                                        <span class="font-semibold text-gray-800">
                                            4</span>
                                        Categories
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a href="{{ $categories->previousPageUrl() ?? '#' }}"
                                            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m15 18-6-6 6-6" />
                                            </svg>
                                            Sebelumnya
                                        </a>

                                        <a href="{{ $categories->nextPageUrl() }}"
                                            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                            Selanjutnya
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m9 18 6-6-6-6" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- End Footer -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
