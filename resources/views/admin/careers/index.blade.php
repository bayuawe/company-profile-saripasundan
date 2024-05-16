<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lowongan Pekerjaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">

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

                <div class="flex flex-row justify-between items-center mb-5">
                    <h3 class="text-indigo-950 font-bold text-2xl">Lowongan Pekerjaan</h3>
                    <a href="{{ route('admin.careers.create') }}"
                        class="rounded-full w-fit py-3 px-5 bg-indigo-950 text-white">
                        Tambahkan Lowongan Pekerjaan
                    </a>
                </div>
                @forelse($careers as $career)
                    <div class="item-career flex flex-row justify-between items-center">
                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($career->cover) }}" class="rounded-2xl h-[100px] object-cover"
                                alt="">
                            <div>
                                <h3 class="text-indigo-950 font-bold text-xl">{{ $career->title }}</h3>
                                <p class="text-slate-500 text-sm">{{ Str::limit($career->description, 20) }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-3">
                            <a href="{{ route('admin.careers.edit', $career) }}"
                                class="rounded-full font-bold py-3 px-5 border border-yellow-400 hover:bg-yellow-400 hover:text-white text-yellow-400">
                                Edit
                            </a>

                            <form action="{{ route('admin.careers.destroy', $career) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="rounded-full py-3 px-5 bg-red-500 hover:bg-red-600 text-white">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </div>
                @empty
                    <p class="text-yellow-400">Belum ada karir tersedia</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
