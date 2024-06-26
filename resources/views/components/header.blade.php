<header class="w-full flex flex-col gap-4 relative font-PoiretOne">
    <div class="w-full h-6 bg-black"></div>
    <div class="container mx-auto max-w-[1280px] p-4 flex items-center gap-6 justify-between border-b border-black/10">
        <a href="{{ route('index') }}">
            <img src="{{ asset('Images/header/logo.png') }}" alt="" class="w-40">
        </a>
        <nav id="menu"
            class="flex items-center gap-6 max-lg:bg-white max-lg:absolute max-lg:top-0 max-lg:-translate-y-full max-lg:left-0 max-lg:flex-col max-lg:w-full transition-all duration-500 max-lg:py-6 max-lg:z-[4]">
            <a href="{{ route('catalog') }}"
                class="flex flex-col after:w-0 after:h-px after:bg-black after:transition-all after:duration-300 hover:after:w-full">Каталог</a>
            <form action="{{ route('Search') }}" class="relative" method="POST">
                @csrf
                <input type="text" class="pl-4 pr-10 py-2 rounded-xl border border-black/10 focus:outline-none"
                    placeholder="Хочу найти" name="word">
                <button class="absolute right-2 top-1/2 -translate-y-1/2" type="submit">
                    <img src="{{ asset('Images/header/search.png') }}" alt="" class="w-8">
                </button>
            </form>
            <div class="flex items-center gap-4">
                <a href="Pages/profile.html">
                    <img src="{{ asset('Images/header/profile.png') }}" alt="" class="w-8">
                </a>
                <a href="{{ route('OpenLike') }}">
                    <img src="{{ asset('Images/header/heart.png') }}" alt="" class="w-8">
                </a>
                <a href="{{ route('OpenBasket') }}">
                    <img src="{{ asset('Images/header/cart.png') }}" alt="" class="w-8">
                </a>
            </div>
            <a href="{{ route('profile') }}"
                class="px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent">
                @guest
                    Вход
                @else
                    Профиль
                @endguest
            </a>
        </nav>
        <button id="toggler" class="lg:hidden">
            <img src="{{ asset('Images/header/menu.png') }}" alt="">
        </button>
    </div>
    <div id="overlay" class="w-full fixed inset-0 top-32 bg-black/70 max-lg:z-[3] hidden lg:hidden"></div>
</header>
