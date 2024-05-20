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
                                        Job Vacancy
                                    </h2>
                                    <p class="text-sm text-gray-600">
                                        Add job vacancy, edit and more.
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-yellow-400 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none"
                                            href="{{ route('admin.careers.create') }}">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                            Add Job Vacancy
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 justify-beetween">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start">
                                            <label for="hs-at-with-checkboxes-main" class="flex">
                                                <input type="checkbox"
                                                    class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                    id="hs-at-with-checkboxes-main">
                                                <span class="sr-only">Checkbox</span>
                                            </label>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Image
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Title
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Deskripsi
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-start">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                    Created At
                                                </span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-end"></th>
                                    </tr>
                                </thead>

                                @forelse($careers as $career)
                                    <tbody class="divide-y divide-gray-200">
                                        <tr>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 py-3">
                                                    <label for="hs-at-with-checkboxes-1" class="flex">
                                                        <input type="checkbox"
                                                            class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                            id="hs-at-with-checkboxes-1">
                                                        <span class="sr-only">Checkbox</span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <img class="inline-block max-w-28 h-auto object-cover rounded"
                                                            src="{{ Storage::url($career->cover) }}"
                                                            alt="Image Description">

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <div class="grow">
                                                            <span
                                                                class="block font-bold text-sm text-gray-800">{{ $career->title }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span
                                                        class="block italic text-sm text-gray-800">{{ Str::limit($career->description, 20) }}
                                                    </span>
                                                </div>
                                            </td>

                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span
                                                        class="italic text-sm text-gray-500">{{ $career->created_at->format('d F Y') }}</span>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5 ">
                                                    <a class="rounded-lg py-1.5 px-6 border border-yellow-400 hover:bg-yellow-400 hover:text-gray-800 text-yellow-400 font-bold text-sm w-full block text-center"
                                                        href="{{ route('admin.careers.edit', $career) }}">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="px-6 py-1.5">
                                                    <form action="{{ route('admin.careers.destroy', $career) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="rounded-lg py-1.5 px-6 bg-red-500 hover:bg-red-400 text-white font-bold text-sm w-full">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="size-px whitespace-nowrap">

                                            </td>
                                        </tr>
                                    </tbody>
                                @empty
                                    <p class="px-6 py-6 text-lg font-bold text-yellow-400">Belum ada lowongan kerja
                                        tersedia
                                    </p>
                                @endforelse

                            </table>
                            <!-- End Table -->

                            <!-- Footer -->

                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                                <div>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-semibold text-gray-800">{{ $careers->count() }}</span>
                                        Lowongan kerja pada halaman ini
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Total
                                        <span class="font-semibold text-gray-800">
                                            {{ $careers->total() }}</span>
                                        Lowogan kerja
                                    </p>
                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a href="{{ $careers->previousPageUrl() ?? '#' }}"
                                            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="m15 18-6-6 6-6" />
                                            </svg>
                                            Sebelumnya
                                        </a>

                                        <a href="{{ $careers->nextPageUrl() }}"
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
