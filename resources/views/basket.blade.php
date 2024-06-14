@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">КОРЗИНА</p>
            <div class="flex max-lg:flex-col gap-6">
                <div class="flex flex-col gap-5">
                    @foreach ($baskets as $basket)
                        @foreach ($basket->products as $item)
                            <div class="lg:w-3/4 flex max-md:flex-col gap-4">
                                <img src="{{ asset($item->photo) }}" alt=""
                                    class="border border-black/10 rounded-xl shadow-[0px_0px_13px_-7px_black] w-full md:w-1/3 object-cover">
                                <div class="flex flex-col gap-2 w-full md:w-2/3">
                                    <p class="font-PoiretOne max-w-xl">{{ $item->name }} ({{ $item->volume }} мл)</p>
                                    <p>{{ $item->price }} ₽</p>
                                    <a href="{{ route('DeleteBasket', ['basket_id' => $basket]) }}">Удалить из корзины</a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="lg:w-1/4 flex flex-col gap-4 px-4 py-8 rounded-xl bg-[#F2F3F3]">
                    <div class="flex items-center gap-2 justify-between">
                        <p>{{ count($baskets) }} товар на сумму</p>
                        <p class="font-PoiretOne">{{ $summ }} ₽</p>
                    </div>
                    <div class="flex items-center gap-2 justify-between">
                        <p>Итого</p>
                        <p class="font-PoiretOne">{{ $summ }} ₽</p>
                    </div>
                    <div class="w-full h-px bg-black/10"></div>
                    <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Адрес доставки">
                    <textarea class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                        placeholder="Комментарий к заказу"></textarea>
                    <div class="w-full h-px bg-black/10"></div>
                    <div class="flex flex-col gap-2">
                        <p>Способ оплаты</p>
                        <div class="flex items-center gap-2">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="payment">
                                <span>Картой</span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="payment">
                                <span>Наличными</span>
                            </label>
                        </div>
                    </div>
                    <a href="{{ route('Buy') }}"
                        class="px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent text-center font-PoiretOne">Оформить
                        заказ</a>
                </div>
            </div>
        </div>
    </main>
@endsection
