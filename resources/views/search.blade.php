@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">Результат поиска</p>
            <div class="flex max-lg:flex-col max-lg:items-center gap-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:w-2/3">
                    @foreach ($positions as $product)
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
