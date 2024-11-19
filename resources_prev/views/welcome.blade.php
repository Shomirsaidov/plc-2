@extends('layouts.app')


@section('title')

    PLС-UA аукцоны авто из Кореи, США, Европы, Китая, ОАЭ  

@endsection

@section('meta')

<meta property="og:title" content="PLC UA" />
<meta property="og:description" content="PLС-UA аукцоны авто из Кореи, США, Европы, Китая, ОАЭ " />
<meta property="og:image" content="{{ url()->current() . "/assets/brand/logo.png" }}" />
<meta property="og:url" content="{{ url()->current() }}" />

@endsection

@section('content')


    

    
    <div class="px-10 md:block lg:px-60 banner-bg py-10">
        <h1 class="text-3xl font-bold text-start h_color">Купить авто из США, Европы, Кореи, ОАЭ, Украины</h1>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 p-4 justify-between rounded-md bg-white w-full md:w-1/2 my-6">
            <div class="flex flex-1 items-center space-x-3 bg-gray-100 pe-4 rounded-md">
                <img src="/assets/ua.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                <a href="/autos">
                    <div>Авто в Украине</div>
                </a>
            </div>
            <div class="flex flex-1 items-center space-x-3 bg-gray-100 pe-4 rounded-md">
                <img src="/assets/china.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                <a href="/china">
                    <div>Авто из Китая</div>
                </a>
            </div>
        </div>
        


        <div class="flex-col md:flex-row flex  md:w-1/2 md:space-x-8 justify-between">
            <div class=" p-4  rounded-md bg-white space-y-4">
                <h2 class="text-lg font-bold uppercase text-center">Авто под заказ</h2>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/usa.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>Авто из Америки</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/korea.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-kr">
                        <div>Авто из Кореи</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/eu.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>Авто из Европы</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/arab.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-ae">
                        <div>Авто из ОАЭ</div>
                    </a>
                </div>
            </div>

            <div class=" p-4  rounded-md bg-white space-y-4">
                <h2 class="text-lg font-bold uppercase text-center">Авто-аукцион</h2>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/usa.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>Авто из Америки</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/korea.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-kr">
                        <div>Авто из Кореи</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/eu.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>Авто из Европы</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/arab.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-ae">
                        <div>Авто из ОАЭ</div>
                    </a>
                </div>
            </div>

            

            

        </div>

    </div>


    <div class="px-10 md:block lg:px-60 py-10 ">


        <div class="my-10 space-y-4">
            <div class="p-8 rounded-md tesla-card" style="position: relative;">
                <h1 class="text-xl font-bold text-center uppercase h_color">Быстрый подбор авто</h1>
                <div class="flex mt-10">
                    <img class="hidden lg:block" src="/assets/tesla-red.png" alt="" style="position: absolute; left: -165px; top: 30px; width: 495px; height: 278px;">
                    <div class="w-full max-w-2xl lg:ms-80 bg-white p-6 rounded-lg shadow-md">
                        <form action="#" method="POST" class="grid gap-4 md:grid-cols-3">
                            <!-- Body Type -->
                            <div>
                                <label for="body-type" class="block text-sm font-medium text-gray-700">Кузов</label>
                                <select id="body-type" name="body_type" class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                                    <option value="">Любой</option>
                                    <!-- Add more options here as needed -->
                                </select>
                            </div>
                
                            <!-- Year Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Год выпуска</label>
                                <div class="flex space-x-2 mt-1">
                                    <input value="2012" type="number" name="year_from" placeholder="От" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                                    <input value="2019" type="number" name="year_to" placeholder="До" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                                </div>
                            </div>
                
                            <!-- Price Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Стоимость, $</label>
                                <div class="flex space-x-2 mt-1">
                                    <input value="0" type="number" name="price_min" placeholder="Мин" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                                    <input value="12000" type="number" name="price_max" placeholder="Макс" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                                </div>
                            </div>
                
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Ваше имя</label>
                                <input type="text" id="name" name="name" placeholder="Имя" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                
                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">Ваш телефон</label>
                                <input type="tel" id="phone" name="phone" placeholder="+380 00 000 00 00" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                
                            <!-- Submit Button -->
                            <div class="flex items-end">
                                <button type="submit" class="w-full py-2 my_yellow font-semibold rounded-md  focus:outdivne-none ">
                                    Подобрать
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>




        

        
        





    </div>


    
    <div class="px-10 md:block lg:px-60 bg-sec py-8 pb-2">
        <h2 class="text-center text-2xl font-bold my-8 mt-0 h_color">ПОПУЛЯРНЫЕ АВТО ИЗ АМЕРИКИ</h2>
    
        <!-- Car divs -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach($us_pop as $car)
                <div class="bg-white rounded-lg overflow-hidden border border-gray-300 car-card" data-car-id="{{ $car->id }}">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="Car Image" class="w-full h-48 object-cover"> <!-- Replace image_url with the correct field -->
                    <div class="">
                        <h3 class="text-md font-semibold text-center py-2 border-b border-gray-300">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h3>
                        <div class="flex items-center justify-center text-gray-700 py-2">
                            <img src="/assets/money.svg" alt="">
                            <span class="ml-1 font-semibold text-center">{{ number_format($car->price, 0, '', ' ') }} $</span>
                        </div>
                        <div class="mt flex">
                            <button class="flex-1 my_blue text-white py-2 rounded-es-md hover:bg-blue-600 buy_modal">ЗАКАЗАТЬ</button>
                            <a class="text-center flex-1 my_yellow py-2 rounded-ee-md hover:bg-yellow-400" href="{{ $car->vincode }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- View All Button -->
        <div class="my-3 text-center">
            <a href="https://plc.auction/ru/auction/from-us">
                <button class="px-6 py-2 bg-white text-gray-700 border border-gray-900">Смотреть все авто из Америки</button>
            </a>
        </div>
    </div>
    
    <div class="px-10 md:block lg:px-60 py-2 pb-2">
        <h2 class="text-center text-2xl font-bold my-8 mt-0 h_color">ПОПУЛЯРНЫЕ АВТО ИЗ КОРЕИ</h2>
    
        <!-- Car divs -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach($korea_pop as $car)
                <div class="bg-white rounded-lg overflow-hidden border border-gray-300 car-card" data-car-id="{{ $car->id }}">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="Car Image" class="w-full h-48 object-cover"> <!-- Replace image_url with the correct field -->
                    <div class="">
                        <h3 class="text-md font-semibold text-center py-2 border-b border-gray-300">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h3>
                        <div class="flex items-center justify-center text-gray-700 py-2">
                            <img src="/assets/money.svg" alt="">
                            <span class="ml-1 font-semibold text-center">{{ number_format($car->price, 0, '', ' ') }} $</span>
                        </div>
                        <div class="mt flex">
                            <button class="flex-1 my_blue text-white py-2 rounded-es-md hover:bg-blue-600 buy_modal">ЗАКАЗАТЬ</button>
                            <a class="text-center flex-1 my_yellow py-2 rounded-ee-md hover:bg-yellow-400" href="{{ $car->vincode }}">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- View All Button -->
        <div class="my-8 text-center">
            <a href="https://plc.auction/ru/auction/from-kr">
                <button class="px-6 py-2 bg-white text-gray-700 border border-gray-900">Смотреть все авто из Кореи</button>
            </a>    
        </div>
    </div>
    



    <div class="lg:px-60 py-10 pt-4">

        
        <div class="flex flex-wrap callto plc-shadow mt-4 items-center p-4 rounded-md border justify-center md:justify-between">
            <div class="flex text-center lg:text-start lg:space-x-6 items-start">
                <div class="hidden lg:block">
                    <div class=" indivne-block rounded-lg" >
                        <img src="/assets/call-to-action.png" alt="Call to Action" style="position: relative; top: -15px;">
                    </div>
                </div>
                
                <!-- Text and Button Section -->
                <div>
                    <p class="lg:text-start font-bold text-3xl h_color leading-10"><span class="text-3xl my_bluec">ПОЗВОНИТЕ НАМ</span> И<br>ЗАКАЖИТЕ СЕБЕ НОВЫЙ<br>АВТОМОБИЛЬ</p>
                    <div class="flex items-center w-full mt-2 my_bluec font-bold text-3xl space-x-3">
                        <img src="/assets/phone-blue.png" alt="">
                        <div class="text-3xl font-bold">0 (800) 215-057</div>
                    </div>
                    
                </div>
            </div>
    
    
            <div class="lg:pe-20">
                <p class="mt-2 text-gray-700 font-medium text-center lg:text-end">ИЛИ ОСТАВЬТЕ СВОЙ НОМЕР<br>ТЕЛЕФОНА И МЫ ВАМ ПЕРЕЗВОНИМ</p>
                <button class="bg-yellow-400 text-black py-2 px-4 rounded-md mt-2">ОСТАВИТЬ НОМЕР ТЕЛЕФОНА</button>
            </div>
    
    
        </div>
    </div>


    <div class="hidden lg:block lg:px-60 py-10 mb-20 bg-sec pt-2">
        <div class="flex flex-col items-center py-8 space-y-8 max-w-7xl mx-auto relative">
            <!-- Title -->
            <h2 class="text-center text-2xl uppercase font-bold mt-0 h_color">Процесc покупки авто з США под ключ</h2>
        
            <!-- Steps Container -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
              <!-- Step 1 -->
              <div class="text-center">
                <div class="flex items-center justify-center relative">
                    <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">1</div>
                    <div class="p-10 rounded-full plc-shadow bg-white">
                        <img class="" src="/assets/SVG-4.png" alt="">
                    </div>
                </div>
                <h2 class="text-lg font-semibold my_bluec mt-4">Поиск авто и расчет стоимости</h2>
                <p class="text-gray-700 mt-2">Подбираем максимальное количество лучших вариантов авто под Ваш бюджет и требования</p>
              </div>
        
              <!-- Step 3 -->
              <div class="text-center">
                <div class="flex items-center justify-center relative">
                    <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">3</div>
                    <div class="p-10 rounded-full plc-shadow bg-white">
                        <img src="/assets/car-service.png" alt="">
                    </div>
                    
                  </div>
                <h2 class="text-lg font-semibold my_bluec mt-4">Проверка автомобиля</h2>
                <p class="text-gray-700 mt-2">Изучаем всю историю автомобиля и предоставляем вам полный отчет по его состоянию</p>
              </div>
        
              <!-- Step 4 -->
              <div class="text-center">
                <div class="flex items-center justify-center relative">
                    <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">4</div>
                    <div class="p-10 rounded-full plc-shadow bg-white">
                        <img  src="/assets/SVG-3.png" alt="">
                    </div>
                </div>
                <h2 class="text-lg font-semibold my_bluec mt-4">Покупка автомобиля</h2>
                <p class="text-gray-700 mt-2">Только после полной проверки и покупки нами автомобиля производится оплата по invoice</p>
              </div>
        
              <!-- Step 6 -->
              <div class="text-center">
                <div class="flex items-center justify-center relative">
                    <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">6</div>
                    <div class="p-10 rounded-full plc-shadow bg-white">
                        <img src="/assets/SVG-2.png" alt="">
                    </div>
                </div>
                <h2 class="text-lg font-semibold my_bluec mt-4">Растаможка и оформление авто</h2>
                <p class="text-gray-700 mt-2">По прибытии авто в Украину производим все необходимые таможенные процедуры</p>
              </div>
            </div>
        
            <!-- Second Row with Car Image -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-80 justify-items-center items-center mt-8">
              <!-- Step 2 -->
              <div class="text-center">
                <div class="flex items-center justify-center relative">
                    <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">2</div>
                    <div class="p-10 rounded-full plc-shadow bg-white">
                        <img src="/assets/SVG-1.png" alt="">
                    </div>
                </div>
                <h2 class="text-lg font-semibold my_bluec mt-4">Заключение договора</h2>
                <p style="max-width: 270px;" class="text-gray-700 mt-2">Заключаем договор о предоставлении услуг по выбору и доставке автомобиля из США</p>
              </div>
        
              <!-- Car Image (hidden on mobile) -->
        
              <!-- Step 5 -->
              <div class="text-center">
                <div class="flex items-center justify-center relative">
                    <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">5</div>
                    <div class="p-10 rounded-full plc-shadow bg-white">
                        <img src="/assets/SVG-0.png" alt="">
                    </div>
                </div>
                <h2 class="text-lg font-semibold my_bluec mt-4">Доставка авто в Украину</h2>
                <p style="max-width: 270px;" class="text-gray-700 mt-2">Доставка в Украину занимает от 15 до 60 дней с момента покупки в зависимости от местонахождения авто</p>
              </div>
            </div>


            <img src="/assets/plc_car.png" style="position: absolute; bottom: -100px; width: 320px;" alt="Car" class="w-full max-w-md hidden md:block mx-auto">


          </div>
        
    </div>


    <div class="lg:hidden">
        @include('inc.steps-block-mobi')
    </div>











    <!-- New block  -->

    <div class="px-10 lg:px-60 py-10">

        <h2 class="text-center text-2xl uppercase font-bold mt-0 h_color">Доставка автомобилей в Украину</h2>

        <div class="flex flex-col md:flex-row items-start md:items-start md:space-x-8 mt-8 bg-white">
            <!-- Left Text Block -->
            <div class="md:w-1/2 text-gray-900 text-lg">
              <p class="mb-4 text-lg text-justify">
                Доставка авто – это крайне сложный и хлопотный процесс, требующий согласования множества элементов:
                доставки с площадки аукциона, консолидации, погрузки, доставки морем, разгрузки и другого.
              </p>
              <p class="text-lg text-justify">
                В среднем срок доставки составляет 1-3 месяца, в зависимости от местоположения авто,
                стоимость доставки авто вы можете просчитать на калькуляторе или
                <a href="#" class="text-white p-1 my_blue rounded-md">обратиться</a>
                к нашим менеджерам, они подберут самый оптимальный вариант доставки по стоимости и качеству, персонально для Вас.
              </p>
            </div>
          
            <!-- Right Calcdivator Block -->
            <div class="my_blue_subtle rounded-lg w-full md:w-1/2 md:mt-0 plc-shadow2">
              <div class="my_blue p-6 mb-4 rounded-md">
                <h3 class="text-xl uppercase font-bold text-blue-800 mb-4 text-white text-center">Калькулятор стоимости доставки</h3>
                <div class="flex space-x-4 mb-4">
                    <select class="block w-full bg-white border border-gray-300 rounded-md p-2 focus:outdivne-none focus:ring-2 focus:ring-blue-500">
                    <option>Корея</option>
                    <!-- Add other options as needed -->
                    </select>
                    <select class="block w-full bg-white border border-gray-300 rounded-md p-2 focus:outdivne-none focus:ring-2 focus:ring-blue-500">
                    <option>Сеул</option>
                    <!-- Add other options as needed -->
                    </select>
                </div>
              </div>
              <div class="p-6">
                <div class="text-gray-700 space-y-2 text-lg">
                    <div class="flex justify-between">
                      <span class="text-lg">Стоимость доставки</span>
                      <span class="font-bold text-lg">1752</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="text-lg">Таможенно брокерские услуги</span>
                      <span class="font-bold text-lg">250</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="text-lg">Экспедиторские услуги и документация</span>
                      <span class="font-bold text-lg">316</span>
                    </div>
                  </div>
                  <div class="border-t border-gray-300 my-3"></div>
                  <div class="flex justify-between text-lg font-bold">
                    <span class="text-lg">Общая сумма доставки</span>
                    <span class="text-red-500 text-lg">2318</span>
                  </div>
                  <p class="text-sm text-gray-500 mt-2">
                    * Дополнительно может взиматься оплата за простой автомобиля на площадках
                  </p>
              </div>
            </div>
          </div>
          

    </div>





    <!-- New block  -->

    <div class="px-10 lg:px-60 py-10 bg-bmw">

        <h2 class="text-center text-2xl uppercase font-bold mt-0 text-white">Растаможка в Украине</h2>

        <div class="flex flex-col md:flex-row items-start md:items-start md:space-x-8 mt-8">
            <!-- Left Text Block -->
            <div class="md:w-1/2 text-gray-900 text-lg text-white">
              <p class="mb-4 text-lg text-justify">
                В Украине подписали новый закон по растаможке, который позволяет ввозить автомобили, не ограничивая свой выбор стандартом евро 5. Таким образом, теперь есть возможность привезти по низкой цене автомобили из США, Европы, Кореи, ОАЭ и, благодаря новым ставкам, получить отличный новый автомобиль по доступной цене. Вы можете просчитать стоимость растаможки на калькуляторе или <a href="#" class="text-black p-1 my_yellow rounded-md">обратиться</a>  к нашим менеджерам, и они предоставят вам необходимую консультацию.
              </p>
              
            </div>
          
            <!-- Right Calcdivator Block -->
            <div class="f2f2f2 rounded-lg w-full md:w-1/2 md:mt-0 plc-shadow2">
              <div class="bg-white p-6 pb-2 mb-4 rounded-md plc-shadow2">
                <h3 class="text-xl uppercase font-bold text-blue-800 mb-4 my_blue_text text-center">Калькулятор стоимости растаможки</h3>
                <div class="flex w-full space-x-4 mb-1">
                    <div class="w-full space-y-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 outdivne-blue-300">Тип двигателя</label>
                        <select class="w-100 border-2 rounded-md p-2" id="">
                            <option value="">Бензиновый</option>
                        </select>
                    </div>
                    <div class="w-full space-y-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 outdivne-blue-300">Объем двигателя, куб.см</label>
                        <select class="w-100 border-2 rounded-md p-2" id="">
                            <option value="">2000</option>
                        </select>
                    </div>
                </div>
                <div class="flex w-full space-x-4 mb-4">
                    <div class="w-full space-y-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 outdivne-blue-300">Год выпуска авто</label>
                        <select class="w-100 border-2 rounded-md p-2" id="">
                            <option value="">2014</option>
                        </select>
                    </div>
                    <div class="w-full space-y-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 outdivne-blue-300">Таможенная стоимость авто, $</label>
                        <select class="w-100 border-2 rounded-md p-2" id="">
                            <option value="">3000</option>
                        </select>
                    </div>
                </div>
              </div>
              <div class="p-6 pt-2">
                <div class="text-gray-700 space-y-2 text-lg">
                    <div class="flex justify-between">
                      <span class="text-lg">Пошлина (10%)</span>
                      <span class="font-bold text-lg">300</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="text-lg">Акцизный сбор</span>
                      <span class="font-bold text-lg">1 050</span>
                    </div>
                    <div class="flex justify-between">
                      <span class="text-lg">НДС (20%)</span>
                      <span class="font-bold text-lg">870</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg">Таможенные платежди</span>
                        <span class="font-bold text-lg">2 220</span>
                      </div>
                  </div>
                  <div class="border-t border-gray-300 my-3"></div>
                  <div class="flex justify-between text-lg font-bold"   >
                    <span class="text-lg">Общая сумма авто + таможенные платежи</span>
                    <span class="text-red-500 text-lg">5 220</span>
                  </div>

              </div>
            </div>
          </div>
          

    </div>



    <!-- New block  -->
    <div class="px-10 lg:px-60 py-10">

        <h2 class="text-center text-2xl uppercase font-bold mt-0 h_color mb-3">Наши преимущества</h2>


        <div class="max-w-screen-xl mx-auto p-6 grid grid-cols-1 md:grid-cols-5 gap-6 text-center">
            <!-- Block 1 -->
            <div class="flex flex-col items-center space-y-3">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv1.png" alt="">
                </div>              
                <h3 class="text-xl font-bold mb-2">Финансовая безопасность</h3>
                <p class="text-lg">Мы покупаем автомобиль для Вас! Вы оплачиваете стоимость услуги при получении автомобиля</p>
            </div>
            
            <!-- Block 2 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv2.png" alt="">
                </div>              
                <h3 class="text-xl font-bold mb-2">Экономия времени</h3>
              <p class="text-lg">Вы можете заниматься своими делами, когда мы подбираем, проверяем и доставляем для вас автомобиль</p>
            </div>
            
            <!-- Block 3 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv3.png" alt="">
                </div>              
                <h3 class="text-xl font-bold mb-2">Технические отчеты</h3>
              <p class="text-lg">Вы получаете фото, видео и информационные отчеты о состоянии автомобиля</p>
            </div>
            
            <!-- Block 4 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv4.png" alt="">
                </div>              
                <h3 class="text-xl font-bold mb-2">Низкие цены</h3>
              <p class="text-lg">Отслеживаем статистику продаж в разных источниках и площадках, подскажем, где можно купить дешевле</p>
            </div>
            
            <!-- Block 5 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv5.png" alt="">
                </div>              
                <h3 class="text-xl font-bold mb-2">Поддержка клиентов</h3>
              <p class="text-lg">Менеджеры окажут консультацию Вам в любое время. Сопровождение от заключения договора до постановки на учёт</p>
            </div>
          </div>
          




    </div>




    <div class="px-10 lg:px-60 py-10 my_blue my-16" style="height: 220px;">

        <div class="relative plc-shadow3" style="top: -100px;">
            <div class="flex flex-wrap callto mt-4 items-center p-2 pb-0 rounded-t-md justify-center md:justify-between">
                <div class="flex text-center lg:text-start lg:space-x-6 items-start">
                    <div class="hidden lg:block">
                        <div class=" indivne-block rounded-lg" >
                            <img src="/assets/call-to-action.png" alt="Call to Action" style="position: relative; top: -15px;">
                        </div>
                    </div>
                    
                    <!-- Text and Button Section -->
                    <div>
                        <p class="lg:text-start font-bold text-3xl h_color leading-10"><span class="text-3xl my_bluec">Остались вопросы?</span><br>Наш менеджер ответит на все ваши вопросы</p>
                        <div class="flex items-center w-full mt-2 my_bluec font-bold text-3xl space-x-3 ps-4 lg:ps-0">
                            <img src="/assets/phone-blue.png" alt="">
                            <div class="text-3xl font-bold">0 (800) 215-057</div>
                        </div>
                        
                    </div>
                </div>
        
        
                
        
        
            </div>
            <div class="flex justify-between flex-wrap lg:space-x-8 bg-white py-4 pt-2 px-20 rounded-b-md">
                <div class="flex lg:space-x-4 flex-1 flex-wrap">
                    <div class="space-y-2">
                        <input type="text" id="name" name="name" placeholder="Ваше имя" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                        <input type="tel" id="name" name="name" placeholder="Номер телефона" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <textarea class="font-semibold mt-1 block w-full lg:w-1/2 p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500" placeholder="напишите вопрос"></textarea>
                </div>
                <div class="flex items-center justify-center mt-4 lg:mt-0">
                    <button class="my_yellow py-2 px-16 rounded-md font-semibold">ОТПРАВИТЬ</button>
                </div>
            </div>
        </div>

    </div>
    

    <div class="px-10 lg:px-60 py-10 mb-2">
        <p class="text-lg text-justify">
            Сегодня намного выгоднее купить и пригнать подержанное авто из США, чем найти хорошую машину по адекватной цене на вторичном авторынке в Украине. Можно ли недорого купить американский автомобиль? Какие преимущества этой покупки? Как пригнать аукционное авто из-за океана? PLC group приготовила ответы на все вопросы.
        </p>
        <br>
        <h3 class="text-center text-2xl uppercase font-bold mt-0 h_color mb-3">Преимущества покупки автомобиля из Америки</h3>
        

        <div class="flex items-center justify-between flex-col lg:flex-row">
            <div>
                <p class="text-lg text-justify">Пригон автомобилей из США – это во всех отношениях выгодное мероприятие. Вот главные преимущества покупки машины за океаном:</p>
                <br>
                <div class="space-y-2 text-lg text-justify">
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet" ></div>
                        <div class="text-lg text-justify">Выгодная цена. Экономия при покупке подержанного автомобиля из Америки, по сравнению с приобретением аналогичной модели на вторичном рынке Украины, может составлять до 30% с учетом дополнительных затрат на транспортировку, растаможку и др.</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">Проверенные достоверные данные о состоянии автомобиля – реальный пробег, правдивые данные о повреждениях, реальная история (ДТП, количество владельцев).</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet" ></div>
                        <div class="text-lg text-justify">Эксклюзивная комплектация. Известный факт, что для американского рынка лидеры автопрома создают автомобили с расширенным функционалом и улучшенной комплектации.</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet" ></div>
                        <div class="text-lg text-justify">Отличное техническое состояние. Б/у автомобили из Америки имеют идеальные технические характеристики по сравнению с авто, бывшими в эксплуатации у отечественных автовладельцев. Тому причиной хорошие дороги, качественное техобслуживание, использование высококачественного топлива.</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet" ></div>
                        <div class="text-lg text-justify">Поддержка доступного топлива. Во многих моделях может быть использован 92-й бензин.</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet" ></div>
                        <div class="text-lg text-justify">Большой выбор.</div>
                    </div>
                </div>
            </div>
            <img src="/assets/frame-320.png" class="rounded-full lg:ps-16" alt="">
        </div>







        <div class="bg-white plc-shadow p-4 my-8 rounded-lg">
            <div class="text-center text-2xl uppercase font-bold mt-0 h_color mb-4">ПОПУЛЯРНЫЕ МАРКИ</div>
            <div class="grid grid-cols-2 md:grid-cols-7 text-lg font-medium text-center">
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Acura</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Alfa Romeo</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Aston Martin</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Audi</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Bentley</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Cadillac</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Can-AM</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chevrolet</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chrysler</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Dodge</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ferrari</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">GMC</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Honda</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hummer</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hyundai</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Isuzu</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jaguar</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">KIA</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Land Rover</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Lexus</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Lincoln</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Maserati</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mazda</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">McLaren</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mercedes Benz</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mini</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Nissan</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Pontiac</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Porsche</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">RAM</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Rolls Royce</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">SAAB</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Smart</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Subaru</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Suzuki</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Tesla</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volvo</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Yamaha</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">BMW</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Buick</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Fiat</a>
            </div>
        </div>
          





        <div class="bg-white plc-shadow2 p-4 my-8 rounded-md">
            <div class="text-center text-2xl uppercase font-bold mt-0 h_color mb-4">ПОПУЛЯРНЫЕ МОДЕЛИ</div>
            <div class="grid grid-cols-2 md:grid-cols-7 text-lg font-medium text-center">
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota Land Cruiser</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota RAV4</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota Prius</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota Venza</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota Highlander</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota Camry</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">BMW X5</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">BMW X3</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Nissan Leaf</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Nissan Rogue</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Audi Q5</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Audi A4</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Audi Q7</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen Tiguan</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen Touareg</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen Jetta</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen Passat</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford Focus</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford F150</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford Fiesta</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford Fusion</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford Mustang</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Dodge Challenger</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford Edge</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford Escape</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hyundai Santa Fe</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hyundai Tucson</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep Wrangler</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep Patriot</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep Compass</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep Grand Cherokee</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep Cherokee</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Kia Sorento</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Kia Sportage</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mazda 3</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mazda CX-5</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Honda Accord</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Honda CR-V</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chevrolet Cruze</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chevrolet Volt</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chevrolet Camaro</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Dodge Journey</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Tesla Model 3</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Subaru Outback</a>
              <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Subaru Forester</a>
            </div>
        </div>
          
          
        <div class="text-center text-2xl uppercase font-bold mt-0 h_color mb-4">как выбрать авто из Америки</div>
        <p class="text-lg text-justify">
            Предлагаем пошаговую инструкцию выбора машины из США:
            <ol class="text-lg text-justify">
                <li class="text-lg text-justify">1. Необходимо определить бюджет покупки и четкие требования к транспортному средству. При расчете бюджета нужно кроме стоимости автомобиля учитывать, сколько стоит оформление документации, транспортировка, уплата таможенной пошлины, заложить дополнительную сумму на небольшой ремонт.</li>
                <li class="text-lg text-justify">2. Определиться с моделью авто.</li>
                <li class="text-lg text-justify">3. Обозначить круг поиска – автоаукционы Америки. Самыми надежными и безопасными считаются такие площадки Северной Америки, как Copart, IAAI, Manheim.
                </li>
                <li class="text-lg text-justify">4. Выбрать интересующие лоты с учетом обозначенных требований.</li>
                <li class="text-lg text-justify">5. Провести проверку истории авто по VIN-коду, состояния машины, описанной в анкете, с реальным состоянием по фото.</li>
            </ol>
            <p class="text-lg text-justify">
                Ни один аукцион не может гарантировать соблюдение правил всеми участниками торгов, поэтому важно очень внимательно отнестись к рассмотрению лотов. Что должно насторожить при выборе автомобиля с аукциона США:
            </p>


            <div class="space-y-2 text-lg text-justify">
                <div class="flex space-x-2 items-start">
                    <div class="my_blue rounded-full bullet" ></div>
                    <div class="text-lg text-justify">существенно заниженная цена, льготные условия транспортировки;</div>
                </div>
                <div class="flex space-x-2 items-start">
                    <div class="my_blue rounded-full bullet"></div>
                    <div class="text-lg text-justify">размытые фото, фотографии, которые не дают возможности детально рассмотреть автомобиль;</div>
                </div>
                <div class="flex space-x-2 items-start">
                    <div class="my_blue rounded-full bullet" ></div>
                    <div class="text-lg text-justify">бросающийся в глаза глянец (начищенные до блеска детали двигателя) – признак того, что продавец старается пустить пыль в глаза, возможно, авто ремонтировали или просто приводили в товарный вид, чтобы выгоднее продать.</div>
                </div>
            </div>
        </p>


        <div class="text-center text-2xl uppercase font-bold mt-0 h_color py-10 ">Как избежать рисков при покупке авто из Соединенных Штатов?</div>
        <p class="text-lg text-justify">
            При покупке машины из США нужно не только не ошибиться с выбором, но и быть юридически подкованным, чтобы грамотно оформить всю документацию, организовать транспортировку и растаможивание автомобиля. Процедура пригона транспортных средств из Америки достаточно сложная, поэтому лучше обратиться за помощью в компанию PLC group, которая является лицензированным брокером ведущих американских аукционов и готова обеспечить консультационное и юридическое сопровождение покупки. Преимущества заказа автомашины из Америки в PLC group:
        </p>
        <div class="space-y-2 text-lg text-justify my-2 mb-0">
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">поможем в поиске лучшего варианта по вашим запросам;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">проверяем историю авто и достоверность данных о его техническом состоянии;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">занимаемся страхованием машин в пути;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">обеспечиваем контроль доставки автомобиля от стоянки в порт в США, от порта в Украине в город покупателя;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">берем на себя все юридические, таможенные вопросы (оформление сделки, растаможка);</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">имеем представительства в разных городах Украины;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">помогаем в получении украинского сертификата;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">можем рекомендовать СТО для проведения ремонта пригнанных авто по льготной цене;</div>
            </div>
            
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">на нашем сайте вы можете произвести предварительный расчет стоимости доставки выбранного лота под ключ.</div>
            </div>
            
            
        </div>



    </div>  

    <div class="flex justify-center w-full mb-8">
        <button class="my_yellow py-2 text-xl px-4 uppercase rounded-sm font-semibold hover:bg-white hover:border-yellow-500 hover:border-2">реальные отзывы о нас</button>
    </div>


    <div class="px-10 lg:px-60 py-10 mb-2 pt-8">
        <div class="text-center text-2xl uppercase font-bold mt-0 h_color py-8 pt-0">Интересные статьи про авто</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-md hover:shadow overflow-hidden cursor-pointer">
                <img src="/assets/card1.png" alt="Small cars" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="my_bluec font-semibold text-lg">Маленькие машины для женщин и девушек: ТОП-10</h2>
                    <p class="text-sm text-gray-400">05.10.2024 /// Комментариев нет</p>
                    <p class="mt-4 text-gray-700 text-sm">
                        Маленькие машины для женщин и девушек: ТОП-10. Выбирать автомобиль непросто, но выбор всегда определяет то, для кого эта машина предназначена. И в этом плане женский.
                    </p>
                </div>
            </div>
        
            <!-- Card 2 -->
            <div class="bg-white rounded-md hover:shadow overflow-hidden cursor-pointer">
                <img src="/assets/card2.png" alt="Cars with large trunk" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="my_bluec font-semibold text-lg">Машины с большим багажником: ТОП-10</h2>
                    <p class="text-sm text-gray-400">05.10.2024 /// Комментариев нет</p>
                    <p class="mt-4 text-gray-700 text-sm">
                        Машины с большим багажником: ТОП-10. Раньше багажники автомобилей были по-настоящему огромными, настолько, что внутри такого багажника с легкостью могли бы поместиться несколько человек. Однако со временем...
                    </p>
                </div>
            </div>
        
            <!-- Card 3 -->
            <div class="bg-white rounded-md hover:shadow overflow-hidden cursor-pointer">
                <img src="/assets/card3.png" alt="Toyota Camry generations" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="my_bluec font-semibold text-lg">Тойота Камри: какой кузов лучший, обзор поколений</h2>
                    <p class="text-sm text-gray-400">05.10.2024 /// Комментариев нет</p>
                    <p class="mt-4 text-gray-700 text-sm">
                        Тойота Камри: какой кузов лучший, обзор поколений. Модель Toyota Camry — это всемирно признанный бестселлер с более чем 19 миллионами проданных автомобилей в более чем...
                    </p>
                </div>
            </div>
        </div>
        

    </div>


    @include('inc.modal')
    @include('inc.footer')


@endsection