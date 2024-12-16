<header class="bg-gray-800 h-[6vh] text-white p-4 flex justify-between items-center">
    <h1 class="text-lg font-bold">Wakanda Land</h1>

    {{-- PC UI --}}
    <nav class="hidden md:block">
        <ul class="flex text-white ">

            <x-nav-link href="/" :active="request()->is('/')">
                <span class="flex items-center">
                    <i class="fa-solid fa-house mr-2"></i>Home
                </span>
            </x-nav-link>

            <x-nav-link href="/struktur" :active="request()->is('struktur')">
                <span class="flex items-center">
                    <i class="fa-solid fa-users-cog mr-2"></i>Struktur
                </span>
            </x-nav-link>

            <x-nav-link href="/program" :active="request()->is('program')">
                <span class="flex items-center">
                    <i class="fa-solid fa-tasks mr-2"></i>Program
                </span>
            </x-nav-link>
            <x-nav-link href="/sejarahs" :active="request()->is('sejarahs')">
                <span class="flex items-center">
                    <i class="fa-solid fa-calendar-days mr-2"></i>Sejarah
                </span>
            </x-nav-link>

            <x-nav-link href="/laporan" :active="request()->is('laporan')">
                <span class="flex items-center">
                    <i class="fa-solid fa-book mr-2"></i>Laporan
                </span>
            </x-nav-link>
        </ul>
    </nav>

    <!-- Hamburger Button in Mobile -->
    <button id="menu-btn" class="md:hidden block focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
</header>

{{-- Mobile UI --}}
<!-- Dropdown Menu -->
<nav id="menu" class="absolute top-12 left-0 w-full bg-gray-800 shadow-md hidden">
    <ul class="flex flex-col text-white">
        <x-nav-link href="/" :active="request()->is('/')">
            <span class="flex items-center">
                <i class="fa-solid fa-house mr-2"></i>Home
            </span>
        </x-nav-link>

        <x-nav-link href="/struktur" :active="request()->is('struktur')">
            <span class="flex items-center">
                <i class="fa-solid fa-users-cog mr-2"></i>Struktur
            </span>
        </x-nav-link>

        <x-nav-link href="/program" :active="request()->is('program')">
            <span class="flex items-center">
                <i class="fa-solid fa-tasks mr-2"></i>Program
            </span>
        </x-nav-link>
        
        <x-nav-link href="/sejarahs" :active="request()->is('sejarahs')">
            <span class="flex items-center">
                <i class="fa-solid fa-calendar-days mr-2"></i>Sejarah
            </span>
        </x-nav-link>

        <x-nav-link href="/laporan" :active="request()->is('laporan')">
            <span class="flex items-center">
                <i class="fa-solid fa-book mr-2"></i>Laporan
            </span>
        </x-nav-link>
    </ul>
</nav>
