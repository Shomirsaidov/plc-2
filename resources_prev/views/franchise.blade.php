@extends('layouts.app')


@section('title')

    Франшиза авто из США от PLC-UA

@endsection

@section('content')
<div class="lg:px-60 pt-6 pb-4 fr-bg mb-3">

    <div class="px-3 md:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h1 class="my_bluec uppercase text-3xl font-bold mb-2">УСПЕШНЫЙ БИЗНЕС ПОД ЭГИДОЙ <br> ИЗВЕСТНОГО БРЕНДА</h1>
                <p class="text-lg text-justify">
                    Франчайзинговый проект от компании PLC Group – это возможность стать владельцем прибыльного бизнеса. Вы будете вести свою работу с использованием современных технологий продаж и построения клиентских отношений.
                </p>
                <p class="text-lg text-justify">
                    Держать ориентир на высокое качество обслуживания. Как результат – собственное дело, которое будет приносить прибыль. А главное, все сложные старты мы уже прошли за вас!        
                </p>
            </div>
            <img src="/assets/cars/franch-header-car.png" class="ms-4 hidden md:block" alt="">
        </div>
    </div>

    

</div>

<div class="lg:px-60 py-10 flex justify-center">


    <div class="flex items-center flex-col md:flex-row md:space-x-16">
        <div class="flex flex-col justify-center items-center">
            <h2 class="uppercase h_color text-3xl font-bold mb-8">Франчайзинг</h2>
            <img src="/assets/franch-plc.jpg.png" alt="">
        </div>
        <div class="px-3 md:px-0">
            <h4 class="h_color text-xl font-bold mb-2">КТО МЫ?</h4>
            <p class="text-lg text-justify" style="max-width: 500px;">
                Компания PLC Group занимается подбором, доставкой и растаможкой автомобилей уже более 8 лет. Мы доставляем в Украину машины из Кореи, США, Эмиратов и Европы. Предоставляем клиентам возможность выгодно приобрести транспортное средство, а свои предложения формируем исходя из целевого спроса. Также у нас представлен пакет услуг «под ключ», начиная от подбора авто на известных мировых площадках и заканчивая постановкой на учет в Украине. Наши офисы находятся в семи крупнейших административных центрах Украины
            </p>
        </div>
    </div>

</div>


<div class="lg:px-60 py-10 f2f2f2">

    <h1 class="text-3xl font-bold uppercase text-center">ПОЧЕМУ СТОИТ ВЫБРАТЬ <span class="text-3xl font-bold my_bluec">PLC GROUP</span> ?</h1>

    <div class="flex items-center flex-col md:flex-row md:space-x-3 px-3 md:px-0">
        <img src="/assets/franch-user.png" alt="">
        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">Мы ведем свою профильную деятельность на протяжении многих лет и постоянно совершенствуемся, используя прошлый опыт.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">Каждый месяц мы привозим более 250 авто из разных стран под заказ для наших клиентов.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">В рамках подбора мы проверяем полную историю авто, поэтому нам доверяют.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">О нас знают, ведь наша рекламная деятельность охватывает множество каналов, и поэтому у нас не боятся заказывать.</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">Отличаемся жесткими стандартами качественного обслуживания клиентов.</div>
            </div>
        </div>
    </div>

</div>


<div class="lg:px-60 py-10">

    <h1 class="text-3xl font-bold uppercase text-center h_color">ЧТО ПОЛУЧАЕТЕ ВЫ?</h1>
    <p class="text-lg text-center">В рамках своего франчайзингового проекта мы предлагаем следующие условия для тех, кто решит присоединиться:</p>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 p-4 mt-8">
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr1.svg" alt="Training Icon" class="">
          <p class="text-sm">
            Обучение персонала с нуля, мы с удовольствием поделимся опытом с вами и вашими потенциальными сотрудниками.
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr2.svg" alt="Delivery Icon" class="">
          <p class="text-sm">
            Проверка, доставка и оформление автомобиля для вашего клиента.
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr3.svg" alt="Software Icon" class="">
          <p class="text-sm">
            Все необходимое ПО для автоматизации рабочего процесса.
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr4.svg" alt="Phone Icon" class="">
          <p class="text-sm">
            Отдельную линию телефонии.
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr5.svg" alt="Advertising Icon" class="">
          <p class="text-sm">
            Профессиональную рекламу в интернете на область, в которой будет открыт офис.
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr6.svg" alt="Design Icon" class="">
          <p class="text-sm">
            Макеты для наружной рекламы и оформление офиса в фирменном стиле PLC.
          </p>
        </div>
      </div>
      


</div>


@include('inc.footer')

@endsection
