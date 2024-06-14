@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">Новинки</p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach ($product as $item)
                    <div class="flex flex-col gap-4">
                        <a href="Pages/product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset($item->photo) }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110 w-full">
                        </a>
                        <p class="text-base opacity-50">Парфюмерная вода</p>
                        <p class="font-PoiretOne">{{ $item->name }} {{ $item->volume }} мл</p>
                        <p class="text-2xl">{{ $item->price }}₽</p>
                    </div>
                @endforeach
            </div>
        </div>
        <img src="{{ asset('Images/hero/main.png') }}" alt="" class="rounded-xl w-full">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">ПОПУЛЯРНЫЕ БРЕНДЫ</p>
            <img src="{{ asset('Images/brands/1.png') }}" alt="">
        </div>
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">СВЕЖИЕ НОВОСТИ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                <div class="flex flex-col gap-4 rounded-xl p-4 shadow-[0px_0px_13px_-7px_black] border border-black/10">
                    <img src="{{ asset('Images/news/1.png') }}" alt="" class="w-full roundeed-xl">
                    <p class="font-PoiretOne">Tom Ford Neroli Portofino Parfum: такой же, но еще ярче</p>
                    <p class="opacity-50 self-end">5 мая 2024, 10:32</p>
                </div>
                <div class="flex flex-col gap-4 rounded-xl p-4 shadow-[0px_0px_13px_-7px_black] border border-black/10">
                    <img src="{{ asset('Images/news/2.png') }}" alt="" class="w-full roundeed-xl">
                    <p class="font-PoiretOne">D'Otto Romantic Collection: союз литературы и парфюмерии</p>
                    <p class="opacity-50 self-end">3 мая 2024, 12:48</p>
                </div>
                <div class="flex flex-col gap-4 rounded-xl p-4 shadow-[0px_0px_13px_-7px_black] border border-black/10">
                    <img src="{{ asset('Images/news/3.png') }}" alt="" class="w-full roundeed-xl">
                    <p class="font-PoiretOne">French Collection от Birkholz: красота Франции в 6 ароматах</p>
                    <p class="opacity-50 self-end">3 мая 2024, 15:53</p>
                </div>
                <div class="flex flex-col gap-4 rounded-xl p-4 shadow-[0px_0px_13px_-7px_black] border border-black/10">
                    <img src="{{ asset('Images/news/4.png') }}" alt="" class="w-full roundeed-xl">
                    <p class="font-PoiretOne">Versace Eros Energy: солнечный фланкер знаменитого «Эроса»</p>
                    <p class="opacity-50 self-end">3 мая 2024, 13:01</p>
                </div>
            </div>
        </div>
    </main>
@endsection
