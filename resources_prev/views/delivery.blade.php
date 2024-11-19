@extends('layouts.app')

@section('content')


    <div class="delivery_bg px-10 lg:px-60 py-10 grid grid-cols-1 md:grid-cols-2" style="position: relative;">
        <h1 class="text-3xl font-bold text-white uppercase delivery py-3 lg:text-start text-center">Доставка авто из США, Кореи, <span class="text-end text-3xl font-bold text-white uppercase delivery py-3 ">Европы, ОАЭ в Украину</span></h1>
        <div class="hidden lg:block flex justify-end">
            <img  width="478" style="position: absolute;  top: 50px;" src="/assets/header-car.png" alt="">
        </div>
    </div>


    <div class="px-10 lg:px-60 py-10 lg:mt-20 ">
        <p class="text-lg text-justify">
            Доставка авто из США становится все более популярной в Украине. И удивления этот факт не вызывает. Ведь американский рынок предлагает на выбор широкий ассортимент новых моделей под ключ и авто с пробегом. Техника пребывает в разном состоянии, но обилие доступных предложений исключает малейшие сложности при выборе.
        </p>
        <br>
        <p class="text-lg text-justify">
            Но при отсутствии должного опыта справиться с заказом груза и его доставкой в Украину крайне проблематично. Но не стоит отчаиваться. Помощь специалистов компании PLC Group позволит вам быстро и без малейших усилий получить требуемый автомобиль. А демократичные цены сделают наше сотрудничество не только выгодным, но и приятным.
        </p>

        <h4 class="h_color text-2xl uppercase font-bold mt-8">Покупка и доставка авто из Америки</h4>
        <br>
        <p class="text-lg text-justify">Многие аукционы в США работают на экспорт авто в другие страны. Преимущественно речь идет о Copart, IAAI, Manheim и иных подобных площадках. Мы готовы помочь с покупкой и доставить авто из США в Украину в кратчайшие сроки. Сам процесс перевозки проходит в несколько этапов, а именно:</p>

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

        <br>

        <p class="text-lg text-justify">
            Сразу по прибытии в порт машина выгружается и транспортируется на спецстоянку. Предлагаемый нами импорт авто из Штатов включает в себя не только доставку, но и растаможку. Наша помощь поможет вам сэкономить время и нервы, а обойдутся наши услуги во вполне скромную сумму. После оформления всей документации и получения сертификата формата EURO-5 автомобиль готов к эксплуатации на территории Украины. Мечтаете о новом автомобиле или хотите заказать машину с пробегом? Нет проблем. Мы поможем пригнать авто из США и возьмем на себя все хлопоты по его оформлению. У нас лучшие условия сотрудничества, услужливый сервис и оперативное реагирование на все ваши пожелания. Обращайтесь. Мы не подведем.
        </p>

    </div>

    @include('inc.calculator')
    @include('inc.call-center')    
    @include('inc.footer')    


@endsection