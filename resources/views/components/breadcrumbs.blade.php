<nav class="py-6 px-6">
    <ol class="flex items-center whitespace-nowrap">
        @php
            $breadcrumbs = [
                ['title' => 'Home', 'url' => route('front.index')],
                ['title' => 'Tentang Kami', 'url' => route('front.about')],
                ['title' => 'Kategori', 'url' => route('front.category', optional($category)->id)],
            ];
            $lastIndex = count($breadcrumbs) - 1;
        @endphp

        @foreach ($breadcrumbs as $index => $breadcrumb)
            @if ($index === $lastIndex)
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    {{ $breadcrumb['title'] }}
                </li>
            @else
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800"
                        href="{{ $breadcrumb['url'] }}">
                        {{ $breadcrumb['title'] }}
                    </a>
                    <svg class="flex-shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
