@extends('layouts.app')

@section('title')
  {{ $car->vin }} - {{ $car->name }} аукцион авто в Украине
@endsection

@section('meta')
  <meta name="description" content="{{ 'Покупка авто: ' . $car->name . ' ' . $car->year . ' ' . $car->engine . '. Вин-код: ' . $car->vin . '. Заказ авто с доставкой, авто аукционы, Украина, Европа, США, Корея.' }}" />
  <meta name="keywords" content="{{ $car->vin . ' аукцион, авто, украина, авто под заказ,' . $car->name . ' ' . $car->year }}" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <meta property="og:title" content="{{ $car->vin }} - {{ $car->name }} аукцион авто в Украине" />
  <meta property="og:description" content="{{ 'купить авто ' . $car->name . ' ' . $car->year . ' ' . $car->engine . ' Вин-Код авто: ' . $car->vin . '. Заказать авто с доставкой, аукционы авто из Кореи, США, Европы, Китая.' }}" />
  <meta property="og:image" content="{{ asset('storage/' . $car->images[0]) }}" />
  <meta property="og:url" content="{{ url()->current() }}" />


@endsection

@section('content')
<div class="lg:px-60 py-10 pt-6 f2f2f2">
  <div class="flex flex-col md:flex-row gap-6">
      <div class="flex-1">
          <div class="bg-white border border-gray-300 rounded-md">
              <div class="p-4 pb-2 border-b border-gray-300">
              @if(session('success'))
                  <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 my-4" role="alert">
                      <p>{{ session('success') }}</p>
                  </div>
              @endif
                  <div class="flex flex-col justify-center md:flex-row md:justify-between space-y-3 md:space-y-0 items-center mb-4">
                      <div class="space-y-2">
                        <h1 class="text-2xl font-bold h_color">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h1>
                        <div class="flex space-x-3">
                          <h4 class="border border-black rounded-md p-2 space-x-2">
                            <strong>LOT</strong><span>{{ $car->lot }}</span>
                          </h4>
                          <h4 class="border border-black rounded-md p-2 space-x-2">
                            <strong>VIN</strong><span>{{ $car->vin }}</span>
                          </h4>
                        </div>
                      </div>
                      <div class="flex flex-col items-end justify-end">
                          <div class="flex items-center">
                              <img src="/assets/money-blue.svg" alt="">
                              <div class="text-2xl font-bold ms-3 h_color text-end">{{ number_format($car->price) }} $</div>
                          </div>
                          <p class="text-sm text-yellow-600 mt-2">
                              <h5 class="uppercase my_yellowc font-bold">@lang('car.price_in_ukraine')</h5>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="mt-4 p-2 pt-0">
                  <a href="{{ asset('storage/' . $car->images[0]) }}" class="block">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="@lang('car.image_alt', ['name' => $car->name, 'vin' => $car->vin])" class="w-full rounded-lg">
                  </a>
                  <div class="flex mt-2 space-x-2 overflow-x-auto hidden md:flex">
                      @foreach($car->images as $image)
                      <a href="{{ asset('storage/' . $image) }}" class="block">
                        <img src="{{ asset('storage/' . $image) }}" alt="@lang('car.image_alt', ['name' => $car->name, 'vin' => $car->vin])" class="w-24 h-24 rounded-lg">
                      </a>
                      @endforeach
                      <div class="flex items-center my_blue justify-center w-24 h-24 rounded-lg" id="carousel">
                          <span class="text-white font-bold">+{{ count($car->images) - 1 }}</span>
                      </div>
                  </div>
                  <div class="flex mt-2 space-x-2 overflow-x-auto md:hidden">
                      @foreach($car->images as $image)
                      <a href="{{ asset('storage/' . $image) }}" class="block">
                        <img src="{{ asset('storage/' . $image) }}" alt="@lang('car.image_alt', ['name' => $car->name, 'vin' => $car->vin])" class="min-w-24 max-h-24 rounded-lg">
                      </a>
                      @endforeach
                  </div>
              </div>
          </div>
          <div class="mt-4 bg-white border border-gray-300 p-4 text-xl text-justify rounded-md">
              <p>{{ $car->bio }}</p>
          </div>
      </div>
      <div class="w-full md:w-1/3 space-y-4">
          <div class="bg-white border border-gray-300 plc-shadow rounded-lg text-sm space-y-2">
              <div class="p-3 flex items-center rounded-t-lg space-x-4 my_blue">
                  <img src="/assets/info.svg" alt="">
                  <h2 class="text-xl font-bold text-white uppercase">@lang('car.info_about_car')</h2>
              </div>
              <div class="p-4 pt-2 car-card" data-car-id="{{ $car->vin }}">
                  
                  <div class="grid grid-cols-2 gap-3 items-center">
                      <div class="flex items-center">
                          <img src="/assets/year-yellow.svg" alt="Year Icon" class="mr-3">
                          <span>@lang('car.year')</span>
                      </div>
                      <p class="font-bold">{{ $car->year }}</p>
                      <div class="flex items-center">
                          <img src="/assets/fuel-yellow.svg" alt="Fuel Icon" class="mr-3">
                          <span>@lang('car.fuel')</span>
                      </div>
                      <p class="font-bold">{{ $car->oil }}</p>
                      <div class="flex items-center">
                          <img src="/assets/mileage-yellow.svg" alt="Mileage Icon" class="mr-3">
                          <span>@lang('car.mileage')</span>
                      </div>
                      <p class="font-bold">{{ number_format($car->mileage) }} км</p>
                      <div class="flex items-center">
                          <img src="/assets/engine-yellow.svg" alt="Engine Icon" class="mr-3">
                          <span>@lang('car.engine')</span>
                      </div>
                      <p class="font-bold">{{ $car->engine }}</p>
                      <div class="flex items-center">
                          <img src="/assets/drive-yellow.svg" alt="Drive Icon" class="mr-3">
                          <span>@lang('car.drive')</span>
                      </div>
                      <p class="font-bold">{{ $car->drive }}</p>
                      <div class="flex items-center">
                          <img src="/assets/type-yellow.svg" alt="Body Type Icon" class="mr-3">
                          <span>@lang('car.body_type')</span>
                      </div>
                      <p class="font-bold">{{ $car->type }}</p>
                      <div class="flex items-center">
                          <img src="/assets/transmission-yellow.svg" alt="Transmission Icon" class="mr-3">
                          <span>@lang('car.transmission')</span>
                      </div>
                      <p class="font-bold">{{ $car->transmission }}</p>
                      <div class="flex items-center">
                          <img src="/assets/color-yellow.svg" alt="Color Icon" class="mr-3">
                          <span>@lang('car.color')</span>
                      </div>
                      <p class="font-bold">{{ $car->color }}</p>
                      <div class="flex items-center">
                        <img src="/assets/country.svg" alt="Color Icon" class="mr-3">
                        <span>@lang('car.country')</span>
                      </div>
                      <p class="font-bold">{{ $car->country }}</p>
                      <div class="flex items-center">
                          <img src="/assets/damage.svg" alt="Color Icon" class="mr-3">
                          <span>@lang('car.damages')</span>
                      </div>
                      <p class="font-bold">{{ $car->damages }}</p>
                      
                  </div>
                  <button class="w-full mt-4 my_plc_border2 bg-white my_bluec p-2 uppercase rounded buy_modal">@lang('car.buy_car')</button>
                  @if(Auth::check()) 
                    @if(Auth::user()->role == 'admin')
                      <a href="/autos/edit/{{ $car->id }}" class="text-center block w-full mt-2 my_plc_border2 bg-white my_bluec p-2 uppercase rounded">@lang('car.edit_car')</a>
                      <a href="/cars/create" class="text-center block w-full mt-2 my_plc_border2 bg-white my_bluec p-2 uppercase rounded">Добавить авто</a>
                    @endif
                  @endif
              </div>
          </div>


          <div class="bg-white border border-gray-300 rounded-lg text-sm space-y-2">
            <div class="p-3 flex items-center rounded-t-lg space-x-4 my_blue">
                <img src="/assets/info.svg" alt="">
                <h2 class="text-xl font-bold text-white uppercase">@lang('car.subscribe')</h2>
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

        <!-- Contact Form -->
        <div class="bg-white border border-gray-300 rounded-lg text-sm space-y-2">
            <div class="p-3 flex items-center rounded-t-lg space-x-4 my_blue">
                <img src="/assets/info.svg" alt="">
                <h2 class="text-xl font-bold text-white uppercase">@lang('car.contact_us')</h2>
            </div>
            <div class="p-4">
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm text-gray-500 mb-1 font-semibold outline-blue-500">@lang('car.name')</label>
                        <input type="text" id="name" name="name" placeholder="@lang('car.name')" class="w-full p-2 border border-gray-300 rounded-lg outline-blue-500" required>
                    </div>
                    <div>
                      <label for="tel" class="block text-sm text-gray-500 mb-1 font-semibold outline-blue-500">@lang('car.email')</label>
                      <input type="tel" id="tel" name="tel" placeholder="00 000 00 00" style="padding: 11px; padding-left: 50px; width: 100%;" class="outline-blue-500 w-full border border-gray-300 rounded-lg lib-code" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm text-gray-500 mb-1 font-semibold outline-blue-500">@lang('car.message')</label>
                        <textarea id="message" name="message" class="w-full p-2 border border-gray-300 rounded-lg outline-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full p-2 uppercase my_yellow rounded-md">@lang('car.send_message')</button>
                </form>
            </div>
        </div>

      </div>


      




      
  </div>
</div>

<!-- Modal Structure -->
<div style="z-index: 50;" id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
  <div class="relative bg-white w-11/12 md:w-3/4 lg:w-3/5 rounded-lg overflow-hidden">
    <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">&times;</button>
    <div class="p-4">
     

      <div id="carouselExampleRide" class="carousel slide items-center" data-bs-ride="true">
        <div class="carousel-inner">
          @foreach($car->images as $index => $image)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
              <img src="{{ asset('storage/' . $image) }}" class="d-block w-100 rounded" alt="...">
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev  " type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="flex mt-2 space-x-2 overflow-x-auto hidden md:flex">
          @foreach($car->images as $image)
          <a href="{{ asset('storage/' . $image) }}" class="block">
            <img src="{{ asset('storage/' . $image) }}" alt="@lang('car.image_alt', ['name' => $car->name, 'vin' => $car->vin])" class="w-24 h-24 rounded-lg">
          </a>
          @endforeach
      </div>
      

      


    </div>
  </div>
</div>



<div class="px-10 lg:px-60 py-10 pt-8">
  <h4 class="h_color text-3xl font-bold mb-4">@lang('car.other_similar_cars')</h4>
  
  <div class="grid gap-4 grid-cols-1 md:grid-cols-3">
    @foreach($similars as $similarCar)
      <div class="border bg-white border-gray-200 rounded-lg hover:shadow overflow-hidden">
        <img class="w-full object-cover" src="{{ asset('storage/' . $similarCar->images[0]) }}" style="height: 232px;" alt="@lang('car.image_with_vin', ['vin' => $similarCar->vin])">
    
        <div class="p-4 py-2">
          <h2 class="text-lg font-semibold">{{ $similarCar->name }} {{ $similarCar->year }} {{ $similarCar->engine }}</h2>
        </div>
    
        <div class="p-4 pb-0 mt-2 flex flex-wrap items-center justify-center text-sm border-t border-b border-gray-300">
            <div class="flex items-center p-2 py-2">
              <img src="/assets/year.svg" alt="Year Icon" class="mr-1"> {{ $similarCar->year }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/fuel.svg" alt="Fuel Icon" class="mr-1"> {{ $similarCar->fuel_type }}
            </div>
            <div class="flex items-center p-2 py-2">
              <img src="/assets/mileage.svg" alt="Mileage Icon" class="mr-1"> {{ number_format($similarCar->mileage, 0, '', ' ') }} @lang('car.km')
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
        <div class="mt flex car-card" data-car-id="{{ $similarCar->vin }}">
                <button class="flex-1 my_blue text-white py-2 rounded-es-md hover:bg-blue-600 buy_modal">@lang('car.order')</button>
                <a href="{{ route('cars.show', $similarCar->vin) }}" class="flex-1 my_yellow py-2 rounded-ee-md hover:bg-yellow-400 text-center">
                  <button>@lang('car.more_details')</button>
                </a>
        </div>
      </div>
    @endforeach
  </div>
</div>


@include('inc.modal')
@include('inc.footer')

<script>
  document.getElementById('carousel').addEventListener('click', function() {
    document.getElementById('imageModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Disable vertical scrolling
    document.querySelector('.top-menu').style.display = 'none';
  });

  document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('imageModal').classList.add('hidden');
    document.querySelector('.top-menu').style.display = 'flex';
    document.body.style.overflow = 'auto'; // Enable vertical scrolling
  });

  // Optional: close the modal when clicking outside the modal content
  window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('imageModal')) {
      document.querySelector('.top-menu').style.display = 'flex';
      document.getElementById('imageModal').classList.add('hidden');
      document.body.style.overflow = 'auto'; // Enable vertical scrolling
    }
  });


  // Initialize the international telephone input
  

</script>
@endsection
