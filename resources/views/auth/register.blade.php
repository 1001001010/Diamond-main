@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4 grow">
        <div class="flex flex-col gap-6 items-center justify-center grow">
            <p class="text-3xl font-PoiretOne uppercase text-center">Регистрация</p>
            <form class="flex flex-col gap-4 items-center w-full md:w-2/3 lg:w-1/2" action="{{ route('register') }}"
                method="POST">
                @csrf
                <div class="flex items-center max-md:flex-col gap-4 w-full">
                    <input type="text" name="surname"
                        class="w-full md:w-1/3 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Фамилия">
                    <input type="text" name="name"
                        class="w-full md:w-1/3 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Имя">
                    <input type="text" name="fathername"
                        class="w-full md:w-1/3 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Отчество">
                </div>
                <div class="flex items-center max-md:flex-col gap-4 w-full">
                    <input type="email" name="email"
                        class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Email">
                    <input type="password" name="password"
                        class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="••••••">
                </div>
                <div class="flex items-center max-md:flex-col gap-4 w-full">
                    <input type="text" name="phone"
                        class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Телефон">
                    <input type="text" name="city"
                        class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Город">
                </div>
                <div class="flex items-center max-md:flex-col gap-4 w-full">
                    <div class="flex flex-col gap-2 w-full md:w-1/2">
                        <p class="font-PoiretOne text-2xl">Пол</p>
                        <div class="flex items-center gap-2">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="gender" value="male">
                                <span>Мужской</span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="gender" value="female">
                                <span>Женский</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2 w-full md:w-1/2">
                        <p class="font-PoiretOne text-2xl">Дата рождения</p>
                        <input type="date" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                            name="birthday">
                    </div>
                </div>
                <button type="submit"
                    class="w-[260px] px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent text-center font-PoiretOne">Зарегистрироваться</button>
            </form>
            <div class="flex items-center justify-center gap-4 w-full md:w-2/3 lg:w-1/2">
                <div class="w-1/3 h-px bg-black/10"></div>
                <p class="font-PoiretOne">или</p>
                <div class="w-1/3 h-px bg-black/10"></div>
            </div>
            <a href="{{ route('login') }}"
                class="w-[260px] px-4 py-2 rounded-xl border border-[#FF6C01] bg-[#FF6C01] text-white transition-all duration-500 hover:text-[#FF6C01] hover:bg-transparent text-center font-PoiretOne">Войти</a>
        </div>
    </main>
@endsection
