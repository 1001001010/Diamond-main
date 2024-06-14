<footer
    class="container mx-auto max-w-[1280px] p-4 flex max-md:flex-col items-center md:justify-between gap-6 mt-auto border-t border-black/10">
    <a href="index.html">
        <img src="{{ asset('Images/header/logo.png') }}" alt="" class="w-40">
    </a>
    <div class="flex max-md:flex-col lg:items-start gap-6">
        <div class="flex flex-col">
            <p class="text-base opacity-50">Часы работы</p>
            <p class="font-PoiretOne">ежедневно 9:00-21:00</p>
        </div>
        <div class="flex flex-col">
            <p class="text-base opacity-50">Телефон</p>
            <a href="tel:+7 (495) 109 42 14" class="font-PoiretOne">+7 (495) 109 42 14</a>
        </div>
        <div class="flex flex-col">
            <p class="text-base opacity-50">Соцсети</p>
            <div class="flex items-center gap-4">
                <a href="#" target="_blank" class="w-8">
                    <img src="{{ asset('Images/socials/tg.png') }}" alt="">
                </a>
                <a href="#" target="_blank" class="w-8">
                    <img src="{{ asset('Images/socials/vk.png') }}" alt="">
                </a>
                <a href="#" target="_blank" class="w-8">
                    <img src="{{ asset('Images/socials/whatsapp.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
