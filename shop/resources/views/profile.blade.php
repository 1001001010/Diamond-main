@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div id="tabs" class="flex gap-6 max-lg:flex-col">
            <ul class="flex flex-col gap-2 w-full lg:w-1/3">
                <li class="w-fit">
                    <a href="{{ route('profile') }}" class="flex items-center gap-2 py-2">
                        <div class="flex items-center justify-center w-10 h-10 p-2 bg-black/10 rounded-full">
                            <img src="{{ asset('Images/header/profile.png') }}" alt="">
                        </div>
                        <span>Мои данные</span>
                    </a>
                </li>
                @if (Auth::user() and Auth::user()->is_admin == 1)
                    <li class="w-fit">
                        <a href="{{ route('admin') }}" class="flex items-center gap-2 py-2">
                            <div class="flex items-center justify-center w-10 h-10 p-2 bg-black/10 rounded-full">
                                <img src="{{ asset('Images/header/profile.png') }}" alt="">
                            </div>
                            <span>Админка</span>
                        </a>
                    </li>
                @endif
                <li class="w-fit">
                    <a href="#tab-2" class="flex items-center gap-2 py-2">
                        <div class="flex items-center justify-center w-10 h-10 p-2 bg-black/10 rounded-full">
                            <img src="{{ asset('Images/header/cart.png') }}" alt="">
                        </div>
                        <span>Мои покупки</span>
                    </a>
                </li>
                <li class="w-fit">
                    <button class="flex items-center gap-2 py-2" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <div class="flex items-center justify-center w-10 h-10 p-2 bg-black/10 rounded-full">
                            <img src="{{ asset('Images/header/logout.png') }}" alt="">
                        </div>
                        <span>Выйти</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </button>
                </li>
            </ul>
            <div id="tab-1" class="w-full lg:w-2/3 flex flex-col gap-6">
                <p class="text-3xl font-PoiretOne uppercase">ЛИЧНЫЕ ДАННЫЕ</p>
                <form class="flex flex-col gap-4 items-center w-full" action="{{ route('editProfile') }}" method="POST">
                    @csrf
                    <div class="flex items-center max-md:flex-col gap-4 w-full">
                        <input type="text" name="surname" value="{{ Auth::user()->surname }}"
                            class="w-full md:w-1/3 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="Фамилия">
                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                            class="w-full md:w-1/3 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="Имя">
                        <input type="text" name="fathername" value="{{ Auth::user()->fathername }}"
                            class="w-full md:w-1/3 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="Отчество">
                    </div>
                    <div class="flex items-center max-md:flex-col gap-4 w-full">
                        <input type="email" name="email" value="{{ Auth::user()->email }}"
                            class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="Email">
                        <input type="password" name="password"
                            class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="••••••">
                    </div>
                    <div class="flex items-center max-md:flex-col gap-4 w-full">
                        <input type="text" name="phone" value="{{ Auth::user()->number }}"
                            class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="Телефон">
                        <input type="text" name="city" value="{{ Auth::user()->city }}"
                            class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            placeholder="Город">
                    </div>
                    <div class="flex items-center max-md:flex-col gap-4 w-full">
                        <div class="flex flex-col gap-2 w-full md:w-1/2">
                            <p class="font-PoiretOne text-2xl">Пол</p>
                            <div class="flex items-center gap-2">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="gender"
                                        value="male"{{ Auth::user()->gender == 'male' ? 'checked' : '' }}>
                                    <span>Мужской</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="gender" value="female"
                                        {{ Auth::user()->gender == 'female' ? 'checked' : '' }}>
                                    <span>Женский</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-full md:w-1/2">
                            <p class="font-PoiretOne text-2xl">Дата рождения</p>
                            <input type="date" value="{{ Auth::user()->birthday }}"
                                class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                                name="birthday">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-[260px] px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent text-center font-PoiretOne">Обновить</button>
                </form>
            </div>
            <div id="tab-2" class="w-full lg:w-2/3 flex flex-col gap-6">
                <p class="text-3xl font-PoiretOne uppercase">МОИ ПОКУПКИ</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset('Images/products/1.png') }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">Nina Ricci Nina Illusion Парфюмерная вода 30 мл</p>
                        <p class="text-2xl">5 244 ₽</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset('Images/products/1.png') }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">Nina Ricci Nina Illusion Парфюмерная вода 30 мл</p>
                        <p class="text-2xl">5 244 ₽</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset('Images/products/1.png') }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">Nina Ricci Nina Illusion Парфюмерная вода 30 мл</p>
                        <p class="text-2xl">5 244 ₽</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset('Images/products/1.png') }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">Nina Ricci Nina Illusion Парфюмерная вода 30 мл</p>
                        <p class="text-2xl">5 244 ₽</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset('Images/products/1.png') }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">Nina Ricci Nina Illusion Парфюмерная вода 30 мл</p>
                        <p class="text-2xl">5 244 ₽</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset('Images/products/1.png') }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">Nina Ricci Nina Illusion Парфюмерная вода 30 мл</p>
                        <p class="text-2xl">5 244 ₽</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
