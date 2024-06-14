@extends('layouts.app')

@section('content')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        <div class="flex flex-col gap-6">
            <p class="text-3xl font-PoiretOne uppercase">ИЗБРАННОЕ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach ($likes as $item)
                    @foreach ($item->products as $item)
                        <div class="flex flex-col gap-4">
                            <a href="{{ route('product', ['product_id' => $item->id]) }}"
                                class="relative group overflow-hidden rounded-xl border border-black/10 shadow-[0px_0px_13px_-7px_black]">
                                <img src="{{ asset($item->photo) }}" alt=""
                                    class="transition-all duration-500 group-hover:scale-110">
                            </a>
                            <p class="text-base opacity-50">{{ $item->brand }}</p>
                            <p class="font-PoiretOne">{{ $item->name }}</p>
                            <p class="text-2xl">{{ $item->price }} ₽</p>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </main>
@endsection
