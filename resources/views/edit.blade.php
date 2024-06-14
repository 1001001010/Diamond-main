@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4 grow items-center justify-center">
        <div class="flex flex-col gap-6 w-full items-center">
            <p class="text-3xl font-PoiretOne uppercase">Редактирование товара</p>
            <form action="{{ route('EditTovar', ['product_id' => $product->id]) }}" method="POST"
                class="flex flex-col gap-4 w-full md:w-1/2 xl:w-1/3 items-center" enctype="multipart/form-data">
                @csrf
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    name="name" placeholder="Наименование товара" value="{{ $product->name }}">
                <textarea class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2" placeholder="Описание товара"
                    name="description">{{ $product->description }}</textarea>
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Цена" name="price" value="{{ $product->price }}">
                <input type="file" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    name="photo">
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Объём" name="volume" value="{{ $product->volume }}">
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Состав" name="compound" value="{{ $product->compound }}">
                <input type="text" class="w-full rounded-xl border border-black/10 focus:outline-none px-4 py-2"
                    placeholder="Бренд" name="brand" value="{{ $product->brand }}">
                <button type="submit"
                    class="w-[260px] px-4 py-2 rounded-xl border border-black bg-black text-white transition-all duration-500 hover:text-black hover:bg-transparent text-center font-PoiretOne">Обновить</button>
            </form>
        </div>
    </main>
@endsection
