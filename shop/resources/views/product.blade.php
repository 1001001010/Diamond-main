@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex max-lg:items-center max-lg:flex-col gap-6">
            <img src="{{ asset($product->photo) }}" alt="Фото"
                class="rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black] w-full lg:w-1/3">
            <div class="flex flex-col gap-4 w-full lg:w-2/3">
                <p class="text-2xl font-PoiretOne max-w-xl">{{ $product->name }}
                    ({{ $product->volume }} мл)</p>
                <p class="rounded-xl p-4 border border-black/10 w-fit">Объём: {{ $product->volume }}</p>
                <p class="text-3xl">{{ $product->price }} ₽</p>
                <a href="{{ route('ToBasket', ['product_id' => $product->id]) }}"
                    class="w-[260px] px-4
                    py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black
                    hover:bg-transparent text-center font-PoiretOne">Добавить
                    в корзину</a>
                @if (isset($like))
                    <a href="{{ route('ToLike', ['product_id' => $product->id]) }}"
                        class="w-[260px] px-4 py-2 rounded-xl border border-[#FF6C01] hover:bg-[#FF6C01] hover:text-white transition-all duration-500 text-[#FF6C01] bg-transparent text-center font-PoiretOne">Удалить
                        из избранного</a>
                @else
                    <a href="{{ route('ToLike', ['product_id' => $product->id]) }}"
                        class="w-[260px] px-4 py-2 rounded-xl border border-[#FF6C01] bg-[#FF6C01] text-white transition-all duration-500 hover:text-[#FF6C01] hover:bg-transparent text-center font-PoiretOne">Добавить
                        в избранное</a>
                @endif
            </div>
        </div>
        <div id="tabs">
            <ul class="flex items-center gap-4 border-b border-black/10 font-PoiretOne">
                <li class="px-4"><a href="#tab-1">Товар</a></li>
                <li class="px-4"><a href="#tab-2">Состав</a></li>
                <li class="px-4"><a href="#tab-3">Бренд</a></li>
            </ul>
            <div id="tab-1" class="py-4">
                <p>
                    {{ $product->description }}
                </p>
            </div>
            <div id="tab-2" class="py-4">
                <p>
                    Полный состав: <br>
                    {{ $product->compound }}
                </p>
            </div>
            <div id="tab-3" class="py-4">
                <p>
                    {{ $product->brand }}
                </p>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
