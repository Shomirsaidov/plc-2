<div class="sticky sticky-top top-0">
    <div class="flex items-center justify-between p-3">
        <div>
            <img src="/assets/logo.png" width="101" alt="">
        </div>
        <div class="flex items-stretch space-x-3">
            <a href="tel:+38 093 1705245">
                <button class="my_blue p-2 rounded-sm">
                    <img src="/assets/call.svg" alt="">
                </button>
            </a>
            <a href="tel:+38 093 1705245" class="my_yellow py-2 px-2 rounded-sm">
                <button class="">ПОЗВОНИТЕ МНЕ</button>
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
                    <div>Аукционы авто</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat flex flex-col hidden bg-gray-100 space-y-2 py-3" id="sub1">
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block">Аукционы авто из США</a>
                <a href="https://plc.auction/ru/auction/from-kr" class="ps-4 block">Аукционы авто из Кореи</a>
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block">Аукционы авто из Европы</a>
                <a href="https://plc.auction/ru/auction/from-ae" class="ps-4 block ">Аукционы авто из ОАЭ</a>
            </div>
        </div>

        <!-- Menu 2: Авто под заказ -->
        <div class="menu_cat" id="toggler2">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu2.svg" alt="">
                    <div>Авто под заказ</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub2">
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block" >Авто из США</a>
                <a href="https://plc.auction/ru/auction/from-kr" class="ps-4 block" >Авто из Кореи</a>
                <a href="https://plc.auction/ru/auction/from-us" class="ps-4 block" >Авто из Европы</a>
                <a href="https://plc.auction/ru/auction/from-ae" class="ps-4 block" >Авто из ОАЭ</a>
                <a href="/china" class="ps-4 block" >Авто из Китая</a>
            </div>
        </div>

        <!-- Menu 3: Авто в Украине -->
        <div class="menu_cat" id="toggler3">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu3.svg" alt="">
                    <div>Авто в Украине</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub3">
                <a href="/autos" class="ps-4 block" >Доступные модели</a>
                <a href="/autos" class="ps-4 block" >Цены и предложения</a>
            </div>
        </div>

        <!-- Menu 4: Услуги -->
        <div class="menu_cat" id="toggler4">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu4.svg" alt="">
                    <div>Услуги</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub4">
                <a href="/delivery" class="ps-4 block" >Доставка</a>
                <a href="/customs-clearance" class="ps-4 block" >Растаможка</a>
                <a href="/certification" class="ps-4 block" >Сертификация</a>
            </div>
        </div>

        <!-- Menu 5: Проверка авто -->
        <div class="menu_cat" id="toggler5">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu5.svg" alt="">
                    <div>Проверка авто</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub5">
                <a href="https://checkcar.vin/ua/ru/page/vin-check-usa" class="ps-4 block" >Проверка авто в США</a>
                <a href="https://checkcar.vin/ua/ru/page/vin-check-korea" class="ps-4 block" >Проверка авто из Кореи</a>
                <a href="https://checkcar.vin/ua/ru/page/vin-check-europe" class="ps-4 block" >Проверка авто в Европе</a>
                <a href="https://checkcar.vin/ua/ru/page/vin-check-korea" class="ps-4 block" >Проверка авто в ОАЭ</a>
            </div>
        </div>

        <!-- Menu 6: Сотрудничество -->
        <div class="menu_cat" id="toggler6">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu6.svg" alt="">
                    <div>Сотрудничество</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub6">
                <a href="/franchise" class="ps-4 block">
                 Франшиза PLC.UA
                </a>
                <div class="ps-4 block" >Оптовым покупателям</div>
            </div>
        </div>

        <!-- Menu 7: Информация -->
        <div class="menu_cat" id="toggler7">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu7.svg" alt="">
                    <div>Информация</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub7">
                <a href="/" class="ps-4 block" >О нас</a>
                <a href="/careers" class="ps-4 block" >Работа в PLC</a>
                <a href="/" class="ps-4 block" >Отзывы</a>
                <a href="/news" class="ps-4 block" >Новости</a>
                <a href="/franchise" class="ps-4 block" >FAQ</a>
            </div>
        </div>

        <!-- Menu 8: Контакты -->
        <div class="menu_cat" id="toggler8">
            <div class="flex items-center justify-between border-b p-2 px-3">
                <div class="flex items-center space-x-4">
                    <img src="/assets/icon-menu8.svg" alt="">
                    <div>Контакты</div>
                </div>
                <img src="/assets/toggler.svg" alt="">
            </div>
            <div class="subcat hidden bg-gray-100 space-y-2 py-3" id="sub8">
                <a href="/" class="ps-4 block" >Адрес офиса</a>
                <a href="/" class="ps-4 block" >Телефон</a>
                <a href="/" class="ps-4 block" >Электронная почта</a>
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
