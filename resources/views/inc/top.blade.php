<div class="f2f2f2 flex justify-between items-center py-2 px-10 lg:px-60">
    <div class="flex space-x-4">
        <div class="flex space-x-2 items-center">
            <div>@lang('header.filial')</div>
            <select class="p-1 border border-gray-800 rounded bg-white outline-none">
                <option class="p-2 hover:bg-blue-700 hover:text-white font-semibold" value="">
                    <a href="/?dep=kiev">
                    Киев
                    </a>
                </option>
                <option class="p-2 hover:bg-blue-700 hover:text-white font-semibold" value="">
                    <a href="/?dep=dnepr">
                    Днепр
                    </a>
                </option>
                <option class="p-2 hover:bg-blue-700 hover:text-white font-semibold" value="">
                    <a href="/?dep=odessa">
                    Одесса
                    </a>
                </option>
                <option class="p-2 hover:bg-blue-700 hover:text-white font-semibold" value="">
                    <a href="/?dep=vinnica">
                    Винница
                    </a>
                </option>
            </select>
        </div>
        <div class="flex space-x-2 items-center">
            <img src="/assets/location.svg" alt="">
            <div>@lang('header.address')</div>
        </div>
        <div class="flex space-x-2 items-center">
            <img src="/assets/clock.svg" alt="">
            <div>@lang('header.working_hours')</div>
        </div>
    </div>
    <div class="flex items-center space-x-6">
        <div class="flex space-x-4">
            <img src="/assets/tg-top.svg" alt="">
            <img src="/assets/viber-top.svg"  alt="">
            <img src="/assets/insta-top.svg" alt="">
            <img src="/assets/face-top.svg" alt="">
            <img src="/assets/yout-top.svg" alt="">
            
        </div>
        <div class="flex items-center space-x-3">
            <div>@lang('header.language')</div>
            <div class="cursor-pointer p-1 bg-white border rounded-sm" style="position: relative;">
            @if(request()->query('locale') == 'en') 
                <img src="/assets/usa.png" class="active_lang" style="height: 17px;" width="30" alt="">
                <div class="border hidden lang_menu" style="position: absolute; left: 1px;">
                    <a href="?locale=ru" class="block">
                        <img class="p-1 bg-white" src="/assets/russia.png" alt="">
                    </a>
                    <a href="?locale=ua" class="block">
                        <img class="p-1 bg-white" src="/assets/ua.png"  alt="">
                    </a>
                </div>
            @elseif(request()->query('locale') == 'ua')
                <img src="/assets/ua.png" class="active_lang" style="height: 17px;" width="30" alt="">
                <div class="border hidden lang_menu" style="position: absolute; left: 1px;">
                    <a href="?locale=ru" class="block">
                        <img class="p-1 bg-white" src="/assets/russia.png"  alt="">
                    </a>
                    <a href="?locale=en" class="block">
                        <img class="p-1 bg-white" src="/assets/usa.png"  alt="">
                    </a>
                </div>
            @else
                <img src="/assets/russia.png" class="active_lang" style="height: 17px;" width="30" alt="">
                <div class="border lang_menu hidden" style="position: absolute; left: 1px;">
                    <a href="?locale=en" class="block">
                        <img class="p-1 bg-white" src="/assets/usa.png"  alt="">
                    </a>
                    <a href="?locale=ua" class="block">
                        <img class="p-1 bg-white" src="/assets/ua.png"  alt="">
                    </a>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>

<div class="px-10 md:block lg:px-60 mt-6">
    <div class="flex justify-between items-center">
        <div class="flex space-x-4">
            <a href="/" class="block">
                <img src="/assets/logo.png" width="121" alt="" class="border-e-2 pe-2">
            </a>
            <div>
                <div>@lang('header.premium')</div>
                <div>@lang('header.luxury')</div>
                <div>@lang('header.cars')</div>
            </div>
        </div>
        <div>
            @include('inc.search')
        </div>
        <div class="flex items-center space-x-6">
            <div class="space-y-4">
                <div class="flex space-x-2">
                    <img src="/assets/SVG.png" alt="">
                    <div>0800 215057</div>
                </div>
                <div class="flex space-x-2">
                    <img src="/assets/SVG (1).png" alt="">
                    <div>+38 093 1705245</div>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex space-x-2">
                    <img src="/assets/SVG (2).png" alt="">
                    <div>+38 050 3949325</div>

                </div>
                <div class="flex space-x-2">
                    <img src="/assets/svg4.png" alt="">
                    <div>+38 0673260727</div>
                </div>
            </div>
            <div>
                <a href="tel:+38 093 1705245">
                    <button class="my_yellow p-1 px-2 rounded-sm">@lang('header.call_me')</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="/js/jquery.js"></script>
<script>

    $('.active_lang').on('click', () => {
        console.log('hello');
        $('.lang_menu').slideToggle(200);
    })

</script>