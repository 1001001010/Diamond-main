@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">КАТАЛОГ</p>
            <div class="flex max-lg:flex-col max-lg:items-center gap-6">
                <form action="{{ route('Validate') }}" method="POST"
                    class="flex flex-col gap-6 p-4 rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black] h-fit lg:w-1/3">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <p class="font-PoiretOne">Цена</p>
                        <div class="flex items-center gap-2">
                            <input type="text" class="px-4 py-2 border border-black/10 w-1/2 rounded-l-xl"
                                placeholder="От" name="min_price">
                            <input type="text" class="px-4 py-2 border border-black/10 w-1/2 rounded-r-xl"
                                placeholder="До" name="max_price">
                        </div>
                    </div>
                    <button type="submit"
                        class="px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent font-PoiretOne">Применить</button>
                </form>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:w-2/3">
                    @foreach ($products as $product)
                        <div class="flex flex-col gap-4">
                            <a href="{{ route('product', ['product_id' => $product->id]) }}"
                                class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                                <img src="{{ asset($product->photo) }}" alt=""
                                    class="transition-all duration-500 group-hover:scale-110">
                            </a>
                            <p class="text-base opacity-50">{{ $product->brand }}</p>
                            <p class="font-PoiretOne">{{ $product->name }}</p>
                            <p class="text-2xl">{{ $product->price }} ₽</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
