<header
    class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64">
    <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6" aria-label="Global">
        <div class="me-5 lg:me-0 lg:hidden">
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                href="{{ route('admin.dashboard') }}" aria-label="Preline">
                <img src="{{ asset('images/logos/logosp.png') }}" alt="Logo" class="h-8 w-auto">
            </a>
        </div>

        <div class="w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
            <div class="sm:hidden">
                <button type="button"
                    class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </div>

            <div class="hidden sm:block">
                <label for="icon" class="sr-only">Search</label>
                <div class="relative min-w-72 md:min-w-80">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                        <svg class="flex-shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </div>
                    <input type="text" id="icon" name="icon"
                        class="py-2 px-4 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="Search">
                </div>
            </div>

            <div class="flex flex-row items-center justify-end gap-2">

                <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                    <button id="hs-dropdown-with-header" type="button"
                        class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <img class="inline-block size-[38px] rounded-full ring-2 ring-white"
                            src="{{ Auth::user()->avatar }}" alt="Image Description">
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2"
                        aria-labelledby="hs-dropdown-with-header">
                        <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg">
                            <p class="text-sm text-gray-500">Signed in as</p>
                            <p class="text-sm font-medium text-gray-800">{{ Auth::user()->name }}</p>
                        </div>
                        <div class="mt-2 py-2 first:pt-0 last:pb-0">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500"
                                href="{{ route('profile.edit') }}">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                </svg>
                                {{ __('Profile') }}
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 w-full">
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden">
    <div class="flex justify-between items-center py-2">

        <!-- Sidebar -->
        <button type="button"
            class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600"
            data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13" />
            </svg>
            <span class="sr-only">Sidebar</span>
        </button>
        <!-- End Sidebar -->
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Sidebar -->
<div id="application-sidebar"
    class="hs-overlay [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    hidden
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0

   ">
    <div class="px-8 pt-4">
        <!-- Logo -->
        <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
            href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('images/logos/logosp.png') }}" alt="Logo" class="h-8 w-auto">
        </a>
        <!-- End Logo -->
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100"
                    href="{{ route('front.index') }}">
                    <svg id='House_2_20' width='20' height='20' viewBox='0 0 20 20'
                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <rect width='20' height='20' stroke='none' fill='#000000' opacity='0' />


                        <g transform="matrix(0.67 0 0 0.67 10 10)">
                            <g style="">
                                <g transform="matrix(1 0 0 1 0.62 5.62)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12, -17)"
                                        d="M 20.5 12 L 20.5 21 C 20.5 21.2652 20.3946 21.5196 20.2071 21.7071 C 20.0196 21.8946 19.7652 22 19.5 22 L 14.5 22 L 14.5 16 C 14.5 15.337 14.2366 14.7011 13.7678 14.2322 C 13.2989 13.7634 12.663 13.5 12 13.5 C 11.337 13.5 10.7011 13.7634 10.2322 14.2322 C 9.76339 14.7011 9.5 15.337 9.5 16 L 9.5 22 L 4.5 22 C 4.23478 22 3.98043 21.8946 3.79289 21.7071 C 3.60536 21.5196 3.5 21.2652 3.5 21 L 3.5 12"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.62 -4.38)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12, -7)"
                                        d="M 22.776 8.553 C 22.8522 8.70542 22.8881 8.87477 22.8804 9.04499 C 22.8728 9.21521 22.8217 9.38065 22.7322 9.52561 C 22.6426 9.67056 22.5175 9.79023 22.3687 9.87326 C 22.2199 9.95628 22.0524 9.99991 21.882 10 L 2.118 10 C 1.94761 9.99991 1.78006 9.95628 1.63127 9.87326 C 1.48247 9.79023 1.35736 9.67056 1.2678 9.52561 C 1.17824 9.38065 1.12721 9.21521 1.11954 9.04499 C 1.11188 8.87477 1.14783 8.70542 1.224 8.553 L 3.5 4 L 20.5 4 L 22.776 8.553 Z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.62 -8.38)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12, -3)"
                                        d="M 3.5 4 L 3.5 3 C 3.5 2.73478 3.60536 2.48043 3.79289 2.29289 C 3.98043 2.10536 4.23478 2 4.5 2 L 19.5 2 C 19.7652 2 20.0196 2.10536 20.2071 2.29289 C 20.3946 2.48043 20.5 2.73478 20.5 3 L 20.5 4"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.62 10.62)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12, -22)" d="M 9.5 22 L 14.5 22"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.99 6.62)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12.38, -18)"
                                        d="M 12.5 18.25 C 12.3619 18.25 12.25 18.1381 12.25 18 C 12.25 17.8619 12.3619 17.75 12.5 17.75"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 1.24 6.62)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12.63, -18)"
                                        d="M 12.5 18.25 C 12.6381 18.25 12.75 18.1381 12.75 18 C 12.75 17.8619 12.6381 17.75 12.5 17.75"
                                        stroke-linecap="round" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    {{ __('Home') }}
                </a>
            </li>

            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 @if (request()->routeIs('admin.dashboard')) bg-gray-100 @endif"
                    href="{{ route('admin.dashboard') }}" :active="request() - > routeIs('admin.dashboard')">
                    <svg id='Dashboard_Layout_Square_20' width='20' height='20' viewBox='0 0 20 20'
                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <rect width='20' height='20' stroke='none' fill='#000000' opacity='0' />


                        <g transform="matrix(1.14 0 0 1.14 10 10)">
                            <g style="">
                                <g transform="matrix(1 0 0 1 3.93 -3.69)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-10.78, -3.15)"
                                        d="M 8.45352 4.41097 C 8.5128 4.96507 8.95846 5.41073 9.51229 5.47246 C 9.92365 5.51831 10.346 5.55769 10.7766 5.55769 C 11.2073 5.55769 11.6296 5.51831 12.041 5.47246 C 12.5948 5.41073 13.0405 4.96507 13.0998 4.41097 C 13.1435 4.00193 13.1805 3.58198 13.1805 3.15385 C 13.1805 2.72571 13.1435 2.30576 13.0998 1.89672 C 13.0405 1.34262 12.5948 0.896966 12.041 0.835234 C 11.6296 0.789382 11.2073 0.75 10.7767 0.75 C 10.346 0.75 9.92365 0.789382 9.51229 0.835234 C 8.95846 0.896966 8.5128 1.34262 8.45352 1.89672 C 8.40976 2.30576 8.3728 2.72571 8.3728 3.15385 C 8.3728 3.58198 8.40976 4.00193 8.45352 4.41097 Z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -3.62 -3.69)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-3.22, -3.15)"
                                        d="M 0.900298 4.41097 C 0.95958 4.96507 1.40524 5.41073 1.95906 5.47246 C 2.37043 5.51831 2.7928 5.55769 3.22343 5.55769 C 3.65406 5.55769 4.07643 5.51831 4.48779 5.47246 C 5.04162 5.41073 5.48727 4.96507 5.54656 4.41097 C 5.59032 4.00193 5.62727 3.58198 5.62727 3.15385 C 5.62727 2.72571 5.59032 2.30576 5.54656 1.89672 C 5.48727 1.34262 5.04162 0.896966 4.48779 0.835234 C 4.07643 0.789382 3.65406 0.75 3.22343 0.75 C 2.7928 0.75 2.37043 0.789382 1.95906 0.835234 C 1.40524 0.896966 0.95958 1.34262 0.900298 1.89672 C 0.856535 2.30576 0.81958 2.72571 0.81958 3.15385 C 0.81958 3.58198 0.856535 4.00193 0.900298 4.41097 Z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -3.62 4)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-3.22, -10.85)"
                                        d="M 0.900298 12.1033 C 0.95958 12.6574 1.40524 13.103 1.95906 13.1648 C 2.37043 13.2106 2.7928 13.25 3.22343 13.25 C 3.65406 13.25 4.07643 13.2106 4.48779 13.1648 C 5.04162 13.103 5.48727 12.6574 5.54656 12.1033 C 5.59032 11.6943 5.62727 11.2743 5.62727 10.8462 C 5.62727 10.418 5.59032 9.99808 5.54656 9.58904 C 5.48727 9.03495 5.04162 8.58929 4.48779 8.52756 C 4.07643 8.4817 3.65406 8.44232 3.22343 8.44232 C 2.7928 8.44232 2.37043 8.4817 1.95906 8.52756 C 1.40524 8.58929 0.95958 9.03495 0.900298 9.58904 C 0.856535 9.99808 0.81958 10.418 0.81958 10.8462 C 0.81958 11.2743 0.856535 11.6943 0.900298 12.1033 Z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 3.93 4)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-10.78, -10.85)"
                                        d="M 8.45352 12.1033 C 8.5128 12.6574 8.95846 13.103 9.51229 13.1648 C 9.92365 13.2106 10.346 13.25 10.7766 13.25 C 11.2073 13.25 11.6296 13.2106 12.041 13.1648 C 12.5948 13.103 13.0405 12.6574 13.0998 12.1033 C 13.1435 11.6943 13.1805 11.2743 13.1805 10.8462 C 13.1805 10.418 13.1435 9.99808 13.0998 9.58904 C 13.0405 9.03495 12.5948 8.58929 12.041 8.52756 C 11.6296 8.4817 11.2073 8.44232 10.7767 8.44232 C 10.346 8.44232 9.92365 8.4817 9.51229 8.52756 C 8.95846 8.58929 8.5128 9.03495 8.45352 9.58904 C 8.40976 9.99808 8.3728 10.418 8.3728 10.8462 C 8.3728 11.2743 8.40976 11.6943 8.45352 12.1033 Z"
                                        stroke-linecap="round" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    {{ __('Dashboard') }}
                </a>
            </li>

            <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 @if (request()->routeIs('admin.categories.index')) bg-gray-100 @endif"
                    href="{{ route('admin.categories.index') }}">
                    <svg id='Layers_Stacked_20' width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='20' height='20' stroke='none' fill='#000000' opacity='0'/>


                        <g transform="matrix(0.67 0 0 0.67 10 10)" >
                        <g style="" >
                        <g transform="matrix(1 0 0 1 0.62 -4.88)" >
                        <path style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -6.5)" d="M 12.2 11.413 C 12.072474768348053 11.46865657400589 11.927525231651945 11.46865657400589 11.799999999999999 11.413 L 1.555 6.958 C 1.3724882034517116 6.878608920528264 1.2544436010505227 6.698531402997043 1.2544436010505227 6.4995 C 1.2544436010505227 6.300468597002958 1.3724882034517116 6.120391079471736 1.5549999999999997 6.041 L 11.8 1.586 C 11.927525231651947 1.530343425994112 12.072474768348053 1.530343425994112 12.200000000000001 1.5859999999999999 L 22.445 6.041 C 22.627511796548287 6.120391079471736 22.74555639894948 6.300468597002958 22.74555639894948 6.4995 C 22.74555639894948 6.698531402997043 22.627511796548287 6.878608920528264 22.445 6.958 Z" stroke-linecap="round" />
                        </g>
                        <g transform="matrix(1 0 0 1 0.62 1.72)" >
                        <path style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -13.1)" d="M 17.175 9.25 L 22.445 11.542 C 22.627511796548287 11.621391079471735 22.74555639894948 11.801468597002957 22.74555639894948 12.000499999999999 C 22.74555639894948 12.199531402997042 22.627511796548287 12.379608920528263 22.445 12.459 L 12.2 16.914 C 12.072474768348053 16.96965657400589 11.927525231651945 16.96965657400589 11.799999999999999 16.914 L 1.555 12.459 C 1.3724882034517116 12.379608920528263 1.2544436010505227 12.199531402997042 1.2544436010505227 12.000499999999999 C 1.2544436010505227 11.801468597002957 1.3724882034517116 11.621391079471735 1.5549999999999997 11.542 L 6.825 9.25" stroke-linecap="round" />
                        </g>
                        <g transform="matrix(1 0 0 1 0.62 7.22)" >
                        <path style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -18.6)" d="M 17.175 14.75 L 22.445 17.042 C 22.62751179654829 17.12139107947174 22.74555639894948 17.30146859700296 22.74555639894948 17.500500000000002 C 22.74555639894948 17.699531402997046 22.62751179654829 17.879608920528266 22.445 17.959000000000003 L 12.2 22.414 C 12.072474768348053 22.46965657400589 11.927525231651945 22.46965657400589 11.799999999999999 22.414 L 1.555 17.959 C 1.3724882034517105 17.879608920528263 1.2544436010505207 17.699531402997042 1.2544436010505207 17.5005 C 1.2544436010505207 17.301468597002955 1.3724882034517105 17.121391079471735 1.5549999999999997 17.041999999999998 L 6.824999999999999 14.749999999999998" stroke-linecap="round" />
                        </g>
                        </g>
                        </g>
                        </svg>
                    Categories
                </a>
            </li>

            <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 @if (request()->routeIs('admin.products.index')) bg-gray-100 @endif"
                    href="{{ route('admin.products.index') }}">
                    <svg id='Food_Toast_20' width='20' height='20' viewBox='0 0 20 20'
                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <rect width='20' height='20' stroke='none' fill='#000000' opacity='0' />


                        <g transform="matrix(1.14 0 0 1.14 10 10)">
                            <g style="">
                                <g transform="matrix(1 0 0 1 0.16 0.16)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-7, -7)"
                                        d="M 13.5 3 C 13.5 1.6192881254230165 12.380711874576983 0.5 11 0.5 L 3 0.5 C 1.9239239798162977 0.5 0.9685768708006974 1.1885752371769596 0.6282917548737155 2.2094305849579055 C 0.2880066389467335 3.2302859327388513 0.6391391838530387 4.354354387889779 1.5000000000000004 5 L 1.5 12.5 C 1.5 13.052284749830793 1.9477152501692065 13.5 2.5 13.5 L 11.5 13.5 C 12.052284749830793 13.5 12.5 13.052284749830793 12.5 12.5 L 12.5 5 C 13.13076162931778 4.5289058437703185 13.501581652606923 3.7872657971920325 13.5 2.9999999999999996 Z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -0.34 -1.34)">
                                    <line
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        x1="2" y1="-2" x2="-2" y2="2" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.66 1.66)">
                                    <line
                                        style="stroke: rgb(0,0,0); stroke-width: 1.3157894736842106; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        x1="2" y1="-2" x2="-2" y2="2" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    Products
                </a>
            </li>
            <li><a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 @if (request()->routeIs('admin.careers.index')) bg-gray-100 @endif"
                    href="{{ route('admin.careers.index') }}">
                    <svg id='Professions_Woman_Chef_3_20' width='20' height='20' viewBox='0 0 20 20'
                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <rect width='20' height='20' stroke='none' fill='#000000' opacity='0' />


                        <g transform="matrix(0.67 0 0 0.67 10 10)">
                            <g style="">
                                <g transform="matrix(1 0 0 1 0.12 5.37)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-11.5, -16.75)"
                                        d="M 10 16.5 C 10.372790298482046 16.832999369344243 10.85827695206354 17.011749978173953 11.358000000000002 17 L 11.641 17 C 12.141015515452883 17.01170351135634 12.62679798977689 16.832975595858176 13 16.5"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -1.88 1.37)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-9.5, -12.75)"
                                        d="M 10.5 13 C 10.284496270774056 12.661543615637814 9.900067345025315 12.469329152763443 9.5 12.5 C 9.099844207489515 12.468877276325017 8.715195296566305 12.66120173178662 8.5 13"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 2.12 1.37)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-13.5, -12.75)"
                                        d="M 14.5 13 C 14.284496270774056 12.661543615637814 13.900067345025315 12.469329152763443 13.5 12.5 C 13.099844207489515 12.468877276325017 12.715195296566305 12.66120173178662 12.5 13"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -6.81 5.56)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-4.57, -16.94)"
                                        d="M 5.323 14.251 C 5.129894929889314 15.676066676867352 4.391851026944771 16.97077992477201 3.264 17.863 C 3.1162224114349697 17.94676593078478 3.0210813320026757 18.09983024363247 3.011378917308538 18.269420367140416 C 3.001676502614401 18.439010490648357 3.0787400258740467 18.601926795068415 3.216 18.701999999999998 C 4.045799868937476 19.347996140347885 5.078383875276629 19.67765735761373 6.128999999999998 19.631999999999998"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 7.06 5.56)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-18.44, -16.94)"
                                        d="M 17.685 14.251 C 17.87805673142196 15.676321075539839 18.616532679493528 16.971163368954645 19.744999999999997 17.863 C 19.892653119669855 17.94694769584804 19.98759282991046 18.10011139649337 19.997092714833638 18.26969444863268 C 20.006592599756818 18.439277500771986 19.929353386669625 18.602086504631153 19.791999999999998 18.701999999999998 C 18.962365831341465 19.348310310715735 17.92966312606893 19.678009423624577 16.878999999999998 19.631999999999998"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.12 9.73)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-11.5, -21.11)"
                                        d="M 8 19.723 L 8 21.154999999999998 C 9.988329980551818 22.949444563821203 13.011670019448182 22.9494445638212 15 21.154999999999998 L 15 19.723"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.12 9.87)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-11.5, -21.25)" d="M 11.5 20.001 L 11.5 22.501"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -7.13 9.48)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-4.25, -20.86)"
                                        d="M 8 18.219 L 8 19.719 C 7.994617017938518 20.166119582071563 7.694755197853437 20.55602143237241 7.264 20.676000000000002 L 2.2640000000000002 22.251 C 1.575460703958368 22.503188201223395 0.9665677655020362 22.934314777261918 0.4999999999999991 23.5"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 7.37 9.48)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-18.75, -20.86)"
                                        d="M 15 18.222 L 15 19.722 C 15.00324721752286 20.169531782035296 15.303453593145246 20.5604127364171 15.735 20.679000000000002 L 20.735 22.254 C 21.423560715673087 22.505192402117533 22.03278048952277 22.935270497424447 22.5 23.5"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.37 -0.13)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-11.75, -11.25)"
                                        d="M 5.5 6.62 L 5.5 12.011 C 4.654 12.468 4.928 14.402999999999999 6 14.889 C 6.30321005781625 15.027154337575462 6.517691149435488 15.307254644287998 6.572 15.636 C 7.012 18.28 10.114 20 11.5 20 L 11.5 20 C 12.887 20 15.99 18.279 16.432000000000002 15.635 C 16.485798944901664 15.307480347584216 16.6985970929127 15.027995456006343 17 14.889 C 18.07 14.402999999999999 18.344 12.465 17.5 12.01 L 17.5 6.621 C 18.325678827295704 6.071237446409509 18.693666029981156 5.0454430667080405 18.40573461742272 4.096190785785392 C 18.117803204864284 3.1469385048627436 17.241958629270083 2.498428697558646 16.25 2.5 C 15.7397677110667 2.5009837809357394 15.245418329133926 2.6775371316260155 14.85 3.0000000000000004 C 14.947908168434099 3.324367749683212 14.998430229573954 3.6611814906155793 15 3.9999999999999996"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -5.05 -6.82)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-6.33, -4.56)"
                                        d="M 5.5 6.62 C 4.676419899990987 6.068932818664729 4.310324397416688 5.043928737862371 4.598444718962034 4.095801162170017 C 4.88656504050738 3.1476735864776617 5.761061501806385 2.4996649277067062 6.751999999999999 2.5 C 7.262203914141872 2.5011465839416465 7.756500492895517 2.6776810763536627 8.152 3.0000000000000004 C 8.052930342573699 3.3241582271413694 8.001723528585416 3.661045161274818 8 4.000000000000002"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.12 -9.62)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-11.5, -1.76)"
                                        d="M 8.149 3 C 8.595751049825177 1.5235475205175404 9.956437708003401 0.5136567466356632 11.498999999999999 0.5136567466356632 C 13.041562291996598 0.5136567466356632 14.402248950174823 1.5235475205175397 14.849 2.999999999999999"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -3.31 -7.88)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-8.07, -3.5)"
                                        d="M 8 4 C 8.000102087030381 3.6612911879184273 8.049623694857582 3.324409502019104 8.147 3.000000000000001"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.12 -0.28)">
                                    <path
                                        style="stroke: rgb(0,0,0); stroke-width: 2.2388059701492535; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-11.5, -11.1)"
                                        d="M 5.5 11.707 C 9.338184266080246 10.097946942230909 13.661815733919754 10.097946942230914 17.5 11.707000000000004"
                                        stroke-linecap="round" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    Careers
                </a></li>
        </ul>
    </nav>
</div>
<!-- End Sidebar -->
