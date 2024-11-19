<div class="sticky sticky-top top-0">
    <div class="flex items-center justify-between p-3">
        <a class="block" href="/">
            <img src="/assets/logo.png" width="101" alt="">
        </a>
        <div class="flex items-stretch space-x-3">
            <a href="tel:+38 093 1705245">
                <button class="my_blue p-2 rounded-sm">
                    <img src="/assets/call.svg" alt="">
                </button>
            </a>
            <a href="tel:+38 093 1705245" class="my_yellow py-2 px-2 rounded-sm">
                <button class="">@lang('header.call_me')</button>
            </a>
            <button class="my_blue p-2 rounded-sm menu_btn">
                <img src="/assets/menu.svg" alt="">
            </button>
        </div>
    </div>

    <div class="hidden menu_exp border font-semibold space-y-2 h-screen">
        <!-- Menu 1: Аукционы авто -->
        <div class="menu_cat" id="toggler1">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu1.svg" alt="">
                    <div>@lang('header.car_auctions')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat flex flex-col hidden bg-gray-100 space-y-2 py-3" id="sub1">
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block">@lang('header.us_auctions')</a>
                <a href="https://plc.auction/ru/auction/from-kr" class="ps-4 block">@lang('header.kr_auctions')</a>
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block">@lang('header.eu_auctions')</a>
                <a href="https://plc.auction/ru/auction/from-ae" class="ps-4 block">@lang('header.ae_auctions')</a>
            </div>
        </div>

        <!-- Menu 2: Авто под заказ -->
        <div class="menu_cat" id="toggler2">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu2.svg" alt="">
                    <div>@lang('header.cars_to_order')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub2">
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block">@lang('header.cars_from_us')</a>
                <a href="https://plc.auction/ru/auction/from-kr" class="ps-4 block">@lang('header.cars_from_kr')</a>
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block">@lang('header.cars_from_eu')</a>
                <a href="https://plc.auction/ru/auction/from-ae" class="ps-4 block">@lang('header.cars_from_ae')</a>
                <a href="/china" class="ps-4 block">@lang('header.cars_from_cn')</a>
            </div>
        </div>

        <!-- Menu 3: Авто в Украине -->
        <div class="menu_cat" id="toggler3">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu3.svg" alt="">
                    <div>@lang('header.cars_in_ukraine')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub3">
                <a href="/autos" class="ps-4 block">@lang('header.available_models')</a>
                <a href="/autos" class="ps-4 block">@lang('header.prices_and_offers')</a>
            </div>
        </div>

        <!-- Menu 4: Услуги -->
        <div class="menu_cat" id="toggler4">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu4.svg" alt="">
                    <div>@lang('header.services')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub4">
                <a href="/delivery" class="ps-4 block">@lang('header.delivery')</a>
                <a href="/customs-clearance" class="ps-4 block">@lang('header.customs_clearance')</a>
                <a href="/certification" class="ps-4 block">@lang('header.certification')</a>
            </div>
        </div>

        <!-- Menu 5: Проверка авто -->
        <div class="menu_cat" id="toggler5">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu5.svg" alt="">
                    <div>@lang('header.car_check')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub5">
                <a href="https://checkcar.vin/ua/ru/page/vin-check-usa" class="ps-4 block">@lang('header.check_in_us')</a>
                <a href="https://checkcar.vin/ua/ru/page/vin-check-korea" class="ps-4 block">@lang('header.check_in_kr')</a>
                <a href="https://checkcar.vin/ua/ru/page/vin-check-europe" class="ps-4 block">@lang('header.check_in_eu')</a>
                <a href="https://checkcar.vin/ua/ru/page/vin-check-korea" class="ps-4 block">@lang('header.check_in_ae')</a>
            </div>
        </div>

        <!-- Menu 6: Сотрудничество -->
        <div class="menu_cat" id="toggler6">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu6.svg" alt="">
                    <div>@lang('header.cooperation')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub6">
                <a href="/franchise" class="ps-4 block">@lang('header.franchise')</a>
                <div class="ps-4 block">@lang('header.wholesale_buyers')</div>
            </div>
        </div>

        <!-- Menu 7: Информация -->
        <div class="menu_cat" id="toggler7">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu7.svg" alt="">
                    <div>@lang('header.information')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub7">
                <a href="/" class="ps-4 block">@lang('header.about_us')</a>
                <a href="/careers" class="ps-4 block">@lang('header.jobs_at_plc')</a>
                <a href="/" class="ps-4 block">@lang('header.reviews')</a>
                <a href="/news" class="ps-4 block">@lang('header.news')</a>
                <a href="/franchise" class="ps-4 block">@lang('header.faq')</a>
            </div>
        </div>

        <!-- Menu 8: Контакты -->
        <div class="menu_cat" id="toggler8">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu8.svg" alt="">
                    <div>@lang('header.contacts')</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub8">
                <a href="mailto:info@plc.com" class="ps-4 block">@lang('header.email')</a>
                <a href="tel:+380931705245" class="ps-4 block">@lang('header.phone')</a>
                <a href="/contact" class="ps-4 block">@lang('header.contact_form')</a>
            </div>
        </div>
    </div>
</div>



<script src="/js/jquery.js"></script>

<script>
    $('.menu_btn').on('click', function() {
        $('.menu_exp').slideToggle();
    });

    // Add toggler functionality for each menu item with subcat hiddenegories
    $('#toggler1').on('click', function() {
        $('#sub1').slideToggle();
    });

    $('#toggler2').on('click', function() {
        $('#sub2').slideToggle();
    });

    $('#toggler3').on('click', function() {
        $('#sub3').slideToggle();
    });

    $('#toggler4').on('click', function() {
        $('#sub4').slideToggle();
    });

    $('#toggler5').on('click', function() {
        $('#sub5').slideToggle();
    });

    $('#toggler6').on('click', function() {
        $('#sub6').slideToggle();
    });

    $('#toggler7').on('click', function() {
        $('#sub7').slideToggle();
    });

    $('#toggler8').on('click', function() {
        $('#sub8').slideToggle();
    });
</script>
