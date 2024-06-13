@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-6 items-center justify-center grow">
        <p class="text-3xl font-PoiretOne uppercase text-center">Авторизация</p>
        <form class="flex flex-col gap-4 items-center w-full md:w-2/3 lg:w-1/2">
            <div class="flex items-center max-md:flex-col gap-4 w-full">
                <input type="email" class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Email">
                <input type="password" class="w-full md:w-1/2 rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="••••••">
            </div>
            <button
                class="w-[260px] px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent text-center font-PoiretOne">Войти</button>
        </form>
        <div class="flex items-center justify-center gap-4 w-full md:w-2/3 lg:w-1/2">
            <div class="w-1/3 h-px bg-black/10"></div>
            <p class="font-PoiretOne">или</p>
            <div class="w-1/3 h-px bg-black/10"></div>
        </div>
        <a href="reg.html"
            class="w-[260px] px-4 py-2 rounded-xl border border-[#FF6C01] bg-[#FF6C01] text-white transition-all duration-500 hover:text-[#FF6C01] hover:bg-transparent text-center font-PoiretOne">Зарегистрироваться</a>
    </div>
@endsection
