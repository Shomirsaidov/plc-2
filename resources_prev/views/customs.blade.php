@extends('layouts.app')

@section('content')


    <div class="customs_bg px-10 lg:px-60 py-10 grid grid-cols-1 md:grid-cols-2" style="position: relative;">
        <h1 class="text-3xl font-bold text-white uppercase delivery py-3 lg:text-start my-8 text-center">Растаможка авто из США</h1>
        <div class="hidden lg:block flex justify-end">
            <img  width="478" style="position: absolute; top: 30px;" src="/assets/customs-car.png" alt="">
        </div>
    </div>


    <div class="px-10 lg:px-60 py-10 lg:mt-20 ">
        <p class="text-lg text-justify">
        Одним из обязательных этапов при покупке автомобиля из США является растаможка. Процесс несложный, но требующий предельного внимания. Компания PLC Group предлагает услуги по таможенному оформлению ввозимого в Украину автотранспорта, а для удобства пользователей на нашем сайте создан калькулятор растаможки авто из США.
        </p>
        
    </div>

    @include('inc.calculator-c')

    <div class="px-10 lg:px-60 py-4  ">

        <h4 class="h_color text-2xl uppercase font-bold mt-8">РАСТАМОЖКА АВТОМОБИЛЯ: КАК ЭТО ПРОИСХОДИТ</h4>
        <br>
        <p class="text-lg text-justify">Рассмотрим этапы, которые предстоит преодолеть владельцу, чтобы растаможить авто из США:</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">Встреча с таможенным брокером. Составляется примерная смета растаможки на основании документов. Подписывается договор о сотрудничестве, выставляется счет на оплату услуг.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">После оплаты стоимости услуг назначается встреча с брокером на таможне. Весь процесс оформления осуществляется брокером, а от владельца требуется только присутствие. После завершения этого этапа разрешается ввоз ТС в Украину.</div>
            </div>
        </div>

        <p class="text-lg text-justify">Для растаможки американского автомобиля владелец должен предоставить следующие документы:</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">Инвойс (Bill of Sale or Invoice).</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">Технический паспорт.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">Коносамент (Bill of Lading).</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">Паспорт гражданина Украины, ИНН.</div>
            </div>
        </div>
        <br>
        <h4 class="h_color text-2xl uppercase font-bold mt-8">СТОИМОСТЬ РАСТАМОЖКИ АВТО ИЗ США</h4>
        <br>

        <p class="text-lg text-justify">Рассмотрим этапы, которые предстоит преодолеть владельцу, чтобы растаможить авто из США:</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">логистические расходы, погрузка/разгрузка;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">услуги таможенного брокера;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">таможенные платежи;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">таможенные экспертизы;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">сертификация и постановка на учет в СЦ МВД (данный платеж не входит в растаможку).</div>
            </div>
        </div>

        <br>
        
        <p class="text-lg text-justify">Теперь о таможенных платежах. Расчет налогов осуществляется на основании таможенной стоимости, которая состоит из всех затрат покупателя до его прибытия в таможенную зону. Например:</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">стоимость автомобиля на аукционе: 4000 долларов;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">комиссионные аукциона: 400 долларов;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">логистические расходы: около 600 долларов.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">таможенные экспертизы;</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">сертификация и постановка на учет в СЦ МВД (данный платеж не входит в растаможку).</div>
            </div>
        </div>

        <p class="text-lg text-justify">
        Согласно закона, ввозная таможенная пошлина составляет 10% от суммы таможенной стоимости автомобиля. Исключением являются только автобусы, оснащенные дизельными двигателями с объемом выше 5 куб. см, которые используются для перевозки более 10 человек (пошлина — 20%) и электрокары (пошлина — 0%). Гибридные автомобили под льготные условия для электромобилей не попадают. Акцизный сбор рассчитывается индивидуально для каждого ТС и зависит от типа автотранспорта, объема двигателя, его типа (дизельный, бензиновый), возраста автомобиля. Для электромобилей акциз составляет 1 евро за 1 кВт/ч емкости аккумуляторной батареи.
        </p>

        <h4 class="h_color text-2xl uppercase font-bold mt-8">Каковы сроки растаможки авто из США</h4>
        <p class="text-lg text-justify">
            Средний срок, за который производится таможенная очистка — 7 дней. Растаможка авто из США может занимать от 2 до 14 дней. Для того чтобы сроки были минимальными, необходимые для прохождения процедуры документы должны подаваться вовремя.
        </p>

        <h4 class="h_color text-2xl uppercase font-bold mt-8">Какие проблемы могут возникнуть при растаможке авто из США</h4>
        <p class="text-lg text-justify">Итак, сроки таможенной очистки могут варьироваться от 2 до 14 дней, поэтому очень важным моментом является своевременная подача всех необходимых документов. Основные проблемы, которые могут возникнуть при растаможке, связаны с неправильным оформлением документов или их неполным пакетом.</p>
        
        <br>
        <h4 class="h_color text-2xl uppercase font-bold mt-8">Покупка и растаможка авто из США с PLC Group
        </h4>
        <p class="text-lg text-justify">
            Из всех возможных вариантов отечественные покупатели чаще всего выбирают вариант покупки бу авто в США, в том числе битых транспортных средств. Это позволяет значительно сэкономить и получить в свое распоряжение достойное средство передвижения. Процесс этот сопряжен с целым рядом процедур, для выполнения которых требуется опыт. PLC Group дарит свободу — вам не нужно разбираться в сложных вопросах доставки и растаможки, за вас все сделают наши специалисты. Вам нужно просто выбрать свой автомобиль, чтобы уже совсем скоро сесть за его руль. Чтобы определить стоимость авто из США используйте специальный таможенный калькулятор, который позволяет сделать расчет доставки авто из США и который учитывает все накладные расходы. Таким образом, вы уже на этапе выбора машины знаете ее конечную стоимость. Доверяя нам, вы получаете гарантию успешной покупки:
компания имеет разрешительные документы и лицензии на право участия в дилерских аукционах, а значит, вы можете рассчитывать на самые выгодные покупки;
поскольку на аукционах в США покупают не новые, а бу авто, наши автоэксперты детально изучают техническое состояние выбранного вами ТС, а значит вы сядете за руль именно того автомобиля, который выбрали;
квалификация и опыт наших специалистов являются гарантией максимально быстрого и правильного оформления всех документов, благодаря чему вы экономите время и деньги.
Калькулятор доставки авто из США в Украину позволяет посчитать все расходы в режиме онлайн, благодаря чему вы получаете точные данные о конечной цене транспортного средства. При расчете учитывается объем двигателя авто, его возраст, комиссия аукциона, расходы на экспортное оформление, услуги по экспедированию и транспортировке, погрузки в контейнер, растаможку. Более детально узнать о том, сколько стоит та или иная услуга, о том, сколько времени займёт пригон американского автомобиля «под ключ», а также получить ответы на другие вопросы, вы сможете по телефонам, указанным на сайте. Доставка американского авто может быть организована в Киев, Одессу, Днепр, Харьков, Херсон, Чернигов, Полтаву, Запорожье, Львов, Мариуполь и другие города Украины.
        </p>


        
    </div>

    @include('inc.footer')    


@endsection