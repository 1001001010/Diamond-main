@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">Добавление товара</p>
            <form action="{{ route('NewPosition') }}" class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    name="name" placeholder="Наименование товара">
                <textarea class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2" name="description"
                    placeholder="Описание товара"></textarea>
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    name="price" placeholder="Цена">
                <input type="file" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    name="photo">
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Объём" name="volume">
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Состав" name="compound">
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Бренд" name="brand">
                <button type="submit"
                    class="w-[260px] px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent text-center font-PoiretOne">Добавить</button>
            </form>
        </div>
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">Просмотр товаров</p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach ($products as $item)
                    <div class="flex flex-col gap-4">
                        <a href="product.html"
                            class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                            <img src="{{ asset($item->photo) }}" alt=""
                                class="transition-all duration-500 group-hover:scale-110">
                        </a>
                        <p class="font-PoiretOne">{{ $item->name }}</p>
                        <div class="flex items-center gap-4">
                            <a href="edit.html" class="w-8 h-8">
                                <img src="{{ asset('Images/header/edit.svg') }}" alt="">
                            </a>
                            <a class="w-8 h-8" href="{{ route('DeleteProduct', ['product_id' => $item->id]) }}">
                                <img src="{{ asset('Images/header/delete.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
