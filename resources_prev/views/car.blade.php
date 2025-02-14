@extends('layouts.app')

@section('title')
  {{ $car->vin }} - {{ $car->name }} аукцион авто в Украине
@endsection

@section('meta')
  <meta name="description" content="{{ 'купить авто ' . $car->name . ' ' . $car->year . ' ' . $car->engine . ' Вин-Код авто: ' . $car->vin . '. Заказать авто с доставкой, аукционы авто из Кореи, США, Европы, Китая.' }}" />
  <meta name="keywords" content="{{ $car->vin . ' аукцион, авто, украина, авто под заказ,' . $car->name . ' ' . $car->year }}" />

  <meta property="og:title" content="{{ $car->vin }} - {{ $car->name }} аукцион авто в Украине" />
  <meta property="og:description" content="{{ 'купить авто ' . $car->name . ' ' . $car->year . ' ' . $car->engine . ' Вин-Код авто: ' . $car->vin . '. Заказать авто с доставкой, аукционы авто из Кореи, США, Европы, Китая.' }}" />
  <meta property="og:image" content="{{ asset('storage/' . $car->images[0]) }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
@endsection


@section('content')

    
    <div class="lg:px-60 py-10 pt-6 f2f2f2">

         <!-- Main Container -->
         <div class="flex flex-col md:flex-row gap-6">
            
            <!-- Left Section (Car Details & Images) -->
            <div class="flex-1">
              <div class="bg-white border border-gray-300 rounded-md">
                  <div class="p-4 pb-2 border-b border-gray-300">
                  @if(session('success'))
                      <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4" role="alert">
                          <p>{{ session('success') }}</p>
                      </div>
                  @endif
                      <div class="flex justify-between items-center mb-4">
                          <h1 class="text-2xl font-bold h_color">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h1>
                          <div class="flex flex-col items-end justify-end">
                              <div class="flex items-center">
                                  <img src="/assets/money-blue.svg" alt="">
                                  <div class="text-2xl font-bold ms-3 h_color text-end">{{ number_format($car->price, 2) }} $</div>
                              </div>
                              <p class="text-sm text-yellow-600 mt-2">
                                  <h5 class="uppercase my_yellowc font-bold">Цена в Украине</h5>
                                  <h6 class="text-end my_yellowc text-xs font-bold uppercase">Цена указана с доставкой в Глыбов</h6>
                              </p>
                          </div>
                      </div>
                  </div>
      
                  <!-- Image Section -->
                  <div class="mt-4 p-2 pt-0">
                      <!-- Main Image -->
                      <a href="{{ asset('storage/' . $car->images[0]) }}" class="block">
                        <img src="{{ asset('storage/' . $car->images[0]) }}" alt="Car" class="w-full rounded-lg">
                      </a>
                      <div class="flex mt-2 space-x-2 overflow-x-auto">
                          <!-- Small images -->
                          @foreach($car->images as $image)
                          <a href="{{ asset('storage/' . $image) }}" class="block">
                            <img src="{{ asset('storage/' . $image) }}" alt="Thumbnail" class="w-24 h-24 rounded-lg">
                          </a>
                          @endforeach
                          <div class="flex items-center my_blue justify-center w-24 h-24 rounded-lg">
                              <span class="text-white font-bold">+{{ count($car->images) - 1 }}</span>
                          </div>
                      </div>
                  </div>
              </div>
  
              <!-- Features Section -->
              <div class="mt-4 bg-white border border-gray-300 p-4 text-xl text-justify rounded-md">
                  <p>{{ $car->bio }}</p>
              </div>
          </div>
  
          <!-- Right Section (Information & Contact Form) -->
          <div class="w-full md:w-1/3 space-y-4">
              <!-- Car Information -->
              <div class="bg-white border border-gray-300 plc-shadow rounded-lg text-sm space-y-2">
                  <div class="p-3 flex items-center rounded-t-lg space-x-4 my_blue">
                      <img src="/assets/info.svg" alt="">
                      <h2 class="text-xl font-bold text-white uppercase">Информация об авто</h2>
                  </div>
                  <div class="p-4 pt-2 car-card" data-car-id="{{ $car->id }}">
                      <div class="flex justify-between mb-3">
                        <div>VIN код</div>
                        <h1 class="font-bold">{{ $car->vin }}</h1>
                      </div>


                      <div class="grid grid-cols-2 gap-3 items-center">

                        

                          <div class="flex items-center">
                              <img src="/assets/year-yellow.svg" alt="Year Icon" class="mr-3">
                              <span>Год</span>
                          </div>
                          <p class="font-bold">{{ $car->year }}</p>
  
                          <div class="flex items-center">
                              <img src="/assets/fuel-yellow.svg" alt="Fuel Icon" class="mr-3">
                              <span>Топливо</span>
                          </div>
                          <p class="font-bold">{{ $car->oil }}</p>
  
                          <div class="flex items-center">
                              <img src="/assets/mileage-yellow.svg" alt="Mileage Icon" class="mr-3">
                              <span>Пробег</span>
                          </div>
                          <p class="font-bold">{{ number_format($car->mileage) }} км</p>
  
                          <div class="flex items-center">
                              <img src="/assets/engine-yellow.svg" alt="Engine Icon" class="mr-3">
                              <span>Двигатель</span>
                          </div>
                          <p class="font-bold">{{ $car->engine }}</p>
  
                          <div class="flex items-center">
                              <img src="/assets/drive-yellow.svg" alt="Drive Icon" class="mr-3">
                              <span>Привод</span>
                          </div>
                          <p class="font-bold">{{ $car->drive }}</p>
  
                          <div class="flex items-center">
                              <img src="/assets/type-yellow.svg" alt="Body Type Icon" class="mr-3">
                              <span>Тип кузова</span>
                          </div>
                          <p class="font-bold">{{ $car->type }}</p>
  
                          <div class="flex items-center">
                              <img src="/assets/transmission-yellow.svg" alt="Transmission Icon" class="mr-3">
                              <span>Трансмиссия</span>
                          </div>
                          <p class="font-bold">{{ $car->transmission }}</p>
  
                          <div class="flex items-center">
                              <img src="/assets/color-yellow.svg" alt="Color Icon" class="mr-3">
                              <span>Цвет</span>
                          </div>
                          <p class="font-bold">{{ $car->color }}</p>
                      </div>
                      
                      <button class="w-full mt-4 my_plc_border2 bg-white my_bluec p-2 uppercase rounded buy_modal">Купить авто</button>
                      @if(Auth::check()) 
                      <a href="/autos/edit/{{ $car->id }}" class="text-center block w-full mt-2 my_plc_border2 bg-white my_bluec p-2 uppercase rounded">
                        <button>Изменить авто</button>

                      </a>
                      <a href="/cars/create" class="text-center block w-full mt-2 my_plc_border2 bg-white my_bluec p-2 uppercase rounded">
                        <button>Добавить авто</button>
                      </a>
                      @endif

                    </div>
              </div>
  
              <!-- Social Media Links and Contact Form are unchanged -->
              <div class="bg-white border border-gray-300 rounded-lg text-sm space-y-2">
                  <div class="p-3 flex items-center rounded-t-lg space-x-4 my_blue">
                      <img src="/assets/info.svg" alt="">
                      <h2 class="text-xl font-bold text-white uppercase">Подписаться</h2>
                  </div>
                  <div class="flex justify-center p-4 space-x-2">
                      <a href="#" class="p-2">
                        <img src="/assets/viber-color.svg" alt="">
                      </a>
                      <a href="#" class="p-2">
                        <img src="/assets/tg-color.svg" alt="">
                      </a>
                      <a href="#" class="p-2">
                        <img src="/assets/instagram-color.svg" alt="">
                      </a>
                      <a href="#" class="p-2">
                        <img src="/assets/face-color.svg" alt="">
                      </a>
                      <a href="#" class="p-2">
                        <img src="/assets/yout-color.svg" alt="">
                      </a>
                  </div>
              </div>
              <!-- Add your existing code here for those sections -->
              <div class="bg-white border border-gray-300 plc-shadow rounded-lg text-sm space-y-2">
                  <div class="p-3 flex items-center rounded-t-lg space-x-4 my_blue">
                      <img src="/assets/info.svg" alt="">
                      <h2 class="text-xl font-bold text-white uppercase">Остались вопросы?</h2>
                  </div>
                  <form class="space-y-2 p-4">
                      <label for="body-type" class="block text-sm font-medium text-gray-700">Ваше имя</label>
                      <input type="text" placeholder="Имя" class="w-full p-2 rounded-lg border mb-2">
                      <label for="body-type" class="block text-sm font-medium text-gray-700">Ваш телефон</label>
                      <input type="tel" placeholder="+380 00 000 00 00" class="w-full p-2 rounded-lg border mb-2">
                      <label for="body-type" class="block text-sm font-medium text-gray-700">Вопрос</label>
                      <textarea placeholder="Задайте вопрос" class="w-full p-2 rounded-lg border mb-2"></textarea>
                      <button type="submit" class="w-full my_yellow py-2 px-16 rounded-sm uppercase">Отправить</button>

                  </form>
              </div>
          </div>
    
            
        </div>
    



    </div>



<div class="px-10 lg:px-60 py-10 pt-8">
  <h4 class="h_color text-3xl font-bold mb-4">Другие похожие авто</h4>
  
  <div class="grid gap-4 grid-cols-1 md:grid-cols-3">
    @foreach($similars as $similarCar)
      <div class="border bg-white border-gray-200 rounded-lg hover:shadow overflow-hidden">
        <img class="w-full object-cover" src="{{ asset('storage/' . $similarCar->images[0]) }}" style="height: 232px;" alt="{{ $similarCar->make }} {{ $similarCar->model }}">
    
        <div class="p-4 py-2">
          <h2 class="text-lg font-semibold">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</</h2>
        </div>
    
        <div class="p-4 pb-0 mt-2 flex flex-wrap items-center justify-center text-sm border-t border-b border-gray-300">
            <div class="flex items-center p-2 py-2">
              <img src="/assets/year.svg" alt="Year Icon" class="mr-1"> {{ $similarCar->year }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/fuel.svg" alt="Fuel Icon" class="mr-1"> {{ $similarCar->fuel_type }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/mileage.svg" alt="Mileage Icon" class="mr-1"> {{ number_format($similarCar->mileage, 0, '', ' ') }} км
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/engine.svg" alt="Engine Icon" class="mr-1"> {{ $similarCar->engine }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/drive.svg" alt="Drive Icon" class="mr-1"> {{ $similarCar->transmission }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/type.svg" alt="Type Icon" class="mr-1"> {{ $similarCar->type }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/transmission.svg" alt="Transmission Icon" class="mr-1"> {{ $similarCar->transmission }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/color.svg" alt="Color Icon" class="mr-1"> {{ $similarCar->color }}
            </div>
        </div>
    
        <div class="flex items-center justify-center text-gray-700 py-2">
            <img src="/assets/money.svg" alt="">
            <span class="ml-1 font-semibold text-center">{{ number_format($similarCar->price, 0, '', ' ') }} $</span>
        </div>
        <div class="mt flex">
                <button class="flex-1 my_blue text-white py-2 rounded-es-md hover:bg-blue-600 buy_modal">ЗАКАЗАТЬ</button>
                <a href="{{ route('cars.show', $car->id) }}" class="flex-1 my_yellow py-2 rounded-ee-md hover:bg-yellow-400 text-center">
                  <button>ПОДРОБНЕЕ</button>
                </a>
        </div>
      </div>
    @endforeach
  </div>
</div>






    
       
    













  @include('inc.modal')
  @include('inc.footer')


@endsection