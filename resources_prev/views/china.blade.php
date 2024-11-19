@extends('layouts.app')

@section('title')
  Авто из Китая под заказ - PLC group 
@endsection


@section('content')



<div class="china_bg px-10 lg:px-60 py-10 flex flex-col justify-center items-center lg:px-60 py-10 pt-8" style="position: relative;">
        <h1 class="text-3xl font-bold text-white uppercase delivery py-3 my-8 text-center"><span class="my_bluec font-bold uppercase text-3xl">Новые</span> Автомобили из Китая</h1>
        <h3 class="uppercase text-xl text-white font-bold text-center">
        Купить Китайские авто под заказ в Украину
        </h3>
</div>


<div class="lg:px-60 py-10 pt-8">



    <div class="flex flex-col lg:flex-row lg:space-x-4 items-start">

        <aside class="hidden lg:block lg:w-1/4 bg-white p-4 rounded plc-shadow mb-6 lg:mb-0">
            <form action="{{ route('cars.china-filtered') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="submit" class="my_blue p-2 w-full text-white font-bold uppercase rounded hover:border" value="Найти"/>
                </div>

            <div class="mb-4">
                <h2 class="text-xl font-bold mb-4 text-center h_color">Марки автомобилей</h2>
                <div class="space-y-2 flex flex-col">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Aion" class="form-checkbox text-blue-500">
                        <span class="ml-2">Aion</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Avatr" class="form-checkbox text-blue-500">
                        <span class="ml-2">Avatr</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Bj-Hyundai" class="form-checkbox text-blue-500">
                        <span class="ml-2">Bj-Hyundai</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="BJ-Mercedes-benz" class="form-checkbox text-blue-500">
                        <span class="ml-2">BJ-Mercedes-benz</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="BMW" class="form-checkbox text-blue-500">
                        <span class="ml-2">BMW</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Buick" class="form-checkbox text-blue-500">
                        <span class="ml-2">Buick</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="BYD" class="form-checkbox text-blue-500">
                        <span class="ml-2">BYD</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="ChanGan" class="form-checkbox text-blue-500">
                        <span class="ml-2">ChanGan</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Chery" class="form-checkbox text-blue-500">
                        <span class="ml-2">Chery</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Chevrolet" class="form-checkbox text-blue-500">
                        <span class="ml-2">Chevrolet</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Dongfeng-Honda" class="form-checkbox text-blue-500">
                        <span class="ml-2">Dongfeng-Honda</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Exeed" class="form-checkbox text-blue-500">
                        <span class="ml-2">Exeed</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="FAW-Toyota" class="form-checkbox text-blue-500">
                        <span class="ml-2">FAW-Toyota</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="FAW-Volkswagen" class="form-checkbox text-blue-500">
                        <span class="ml-2">FAW-Volkswagen</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Gac" class="form-checkbox text-blue-500">
                        <span class="ml-2">Gac</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="GAC-Toyota" class="form-checkbox text-blue-500">
                        <span class="ml-2">GAC-Toyota</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Geely" class="form-checkbox text-blue-500">
                        <span class="ml-2">Geely</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Geely-Lynk&co" class="form-checkbox text-blue-500">
                        <span class="ml-2">Geely-Lynk&co</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="GreatWall" class="form-checkbox text-blue-500">
                        <span class="ml-2">GreatWall</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Honda" class="form-checkbox text-blue-500">
                        <span class="ml-2">Honda</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Hongqi" class="form-checkbox text-blue-500">
                        <span class="ml-2">Hongqi</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="JAC-Pickup" class="form-checkbox text-blue-500">
                        <span class="ml-2">JAC-Pickup</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Karry" class="form-checkbox text-blue-500">
                        <span class="ml-2">Karry</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Leapmotor" class="form-checkbox text-blue-500">
                        <span class="ml-2">Leapmotor</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Letin" class="form-checkbox text-blue-500">
                        <span class="ml-2">Letin</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Lincoln" class="form-checkbox text-blue-500">
                        <span class="ml-2">Lincoln</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Lixiang" class="form-checkbox text-blue-500">
                        <span class="ml-2">Lixiang</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Mazda" class="form-checkbox text-blue-500">
                        <span class="ml-2">Mazda</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Mercedes-Benz" class="form-checkbox text-blue-500">
                        <span class="ml-2">Mercedes-Benz</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Nio" class="form-checkbox text-blue-500">
                        <span class="ml-2">Nio</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="ORA" class="form-checkbox text-blue-500">
                        <span class="ml-2">ORA</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Polar Fox" class="form-checkbox text-blue-500">
                        <span class="ml-2">Polar Fox</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Volkswagen" class="form-checkbox text-blue-500">
                        <span class="ml-2">Volkswagen</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Volvo" class="form-checkbox text-blue-500">
                        <span class="ml-2">Volvo</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Voyah" class="form-checkbox text-blue-500">
                        <span class="ml-2">Voyah</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="X-Peng" class="form-checkbox text-blue-500">
                        <span class="ml-2">X-Peng</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="car_brands[]" value="Zeekr" class="form-checkbox text-blue-500">
                        <span class="ml-2">Zeekr</span>
                    </label>
                </div>
            </div>

                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-4 text-center h_color">Статус</h2>
                    <div class="space-y-2 flex flex-col">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="status[]" value="in_transit" class="form-checkbox text-blue-500">
                            <span class="ml-2">В пути</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="status[]" value="available" class="form-checkbox text-blue-500">
                            <span class="ml-2">В наличии</span>
                        </label>
                    </div>
                </div>
            
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-4 text-center h_color">Стоимость авто</h2>
                    <div class="flex justify-between mb-2">
                        <input type="text" name="priceMin" id="priceMin" class="border p-2 text-center rounded-md w-20" value="0">
                        <input type="text" name="priceMax" id="priceMax" class="border p-2 text-center rounded w-20 range_input" value="250000">
                    </div>
                    <input type="range" id="priceRange" class="w-full" min="0" max="500000" value="250000">
                </div>
            
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-4 text-center h_color">Пробег</h2>
                    <div class="flex justify-between mb-2">
                        <input type="text" name="mileageMin" id="mileageMin" class="border p-2 text-center rounded-md w-20" value="0">
                        <input type="text" name="mileageMax" id="mileageMax" class="border p-2 text-center rounded w-20 range_input" value="250000">
                    </div>
                    <input type="range" id="mileageRange" class="w-full" min="0" max="500000" value="250000">
                </div>
            
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-4 text-center h_color">Цвет</h2>
                    <div class="space-y-2 flex flex-col">
                        <label class="inline-flex items-center">
                            <input name="color[]" type="checkbox" value="Белый" class="form-checkbox text-blue-500">
                            <span class="ml-2">Белый</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input name="color[]" type="checkbox" value="Чёрный" class="form-checkbox text-blue-500">
                            <span class="ml-2">Чёрный</span>
                        </label>
                    </div>
                </div>
            
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-4 text-center h_color">Двигатель</h2>
                    <div class="space-y-2 flex flex-col">
                        <label class="inline-flex items-center">
                            <input name="engine[]" type="checkbox" value="2.0" class="form-checkbox text-blue-500">
                            <span class="ml-2">2.0</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input name="engine[]" type="checkbox" value="3.0" class="form-checkbox text-blue-500">
                            <span class="ml-2">3.0L</span>
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-4 text-center h_color">Тип кузова</h2>
                    <div class="space-y-2 flex flex-col">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Внедорожник" class="form-checkbox text-blue-500">
                            <span class="ml-2">Внедорожник</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Кроссовер" class="form-checkbox text-blue-500">
                            <span class="ml-2">Кроссовер</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Седан" class="form-checkbox text-blue-500">
                            <span class="ml-2">Седан</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Универсал" class="form-checkbox text-blue-500">
                            <span class="ml-2">Универсал</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Универсал" class="form-checkbox text-blue-500">
                            <span class="ml-2">Универсал</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Пикап" class="form-checkbox text-blue-500">
                            <span class="ml-2">Пикап</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Минивэн" class="form-checkbox text-blue-500">
                            <span class="ml-2">Минивэн</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="type[]" value="Мини" class="form-checkbox text-blue-500">
                            <span class="ml-2">Мини</span>
                        </label>
                    </div>
                </div>
            
                
            </form>
            
        </aside>

        <!-- Car Listings -->
        

        <div class="lg:ml-6 grid grid-cols-1 gap-4">
            @if($cars->isNotEmpty())
                <div class="font-bold" style="color: grey">Найдено {{ $cars->count() }} результата</div>
        
                @foreach($cars as $car)
                    <div class="bg-white rounded p-2 flex flex-col md:flex-row border car-card" data-car-id="{{ $car->id }}">
                        <img src="{{ asset('storage/' . $car->images[0]) }}" style="max-height: 195px; min-width: 260px;" alt="Car Image" class="object-cover rounded md:mb-0 me-3">
                        <div class="sm:ml-4 lg:mt-0">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h3>
                                
                                @if($car->status === 'available')
                                    <img src="{{ asset('assets/present.svg') }}" alt="Available Icon">
                                @elseif($car->status === 'in_transit')
                                    <img src="{{ asset('assets/in_transit.svg') }}" alt="In Transit Icon">
                                @endif
                            </div>
        
                            <div class="pb-0 mt-2 flex flex-wrap text-sm">
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/year.svg') }}" alt="Year Icon" class="mr-1"> {{ $car->year }}
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/fuel.svg') }}" alt="Fuel Icon" class="mr-1"> {{ $car->fuel_type }}
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/mileage.svg') }}" alt="Mileage Icon" class="mr-1"> {{ number_format($car->mileage) }} км
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/engine.svg') }}" alt="Engine Icon" class="mr-1"> {{ $car->engine }}L
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/drive.svg') }}" alt="Drive Icon" class="mr-1"> {{ $car->drive_type }}
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/type.svg') }}" alt="Type Icon" class="mr-1"> {{ $car->body_type }}
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/transmission.svg') }}" alt="Transmission Icon" class="mr-1"> {{ $car->transmission }}
                                </div>
                                <div class="flex items-center p-2 py-2">
                                  <img src="{{ asset('assets/color.svg') }}" alt="Color Icon" class="mr-1"> {{ $car->color }}
                                </div>
                            </div>
        
                            <div class="flex items-center p-2">
                                <div class="font-bold me-3 text-sm" style="color: grey">Цена авто в Украине :</div>
                                <img src="{{ asset('assets/money-blue.svg') }}" width="30" alt="Money Icon">
                                <div class="text-xl font-bold ms-3 my_bluec text-end">{{ number_format($car->price, 0, '', ' ') }} $</div>
                            </div>
        
                            <div class="mt-2 flex flex-wrap gap-2 justify-between">
                                <a href="{{ route('cars.show', $car->id) }}">
                                    <button class="my_yellow uppercase py-2 px-16 rounded">
                                        Подробнее
                                    </button>
                                </a>
                                <button class="bg-blue-500 uppercase text-white py-2 px-16 rounded buy_modal">Купить</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="font-bold" style="color: grey">Результатов не найдено</div>
            @endif
        </div>
        



    </div>

</div>

@include('inc.modal')
@include('inc.footer')


<script>
    // Connect the price range input with the text inputs
    const priceRange = document.getElementById('priceRange');
    const priceMinInput = document.getElementById('priceMin');
    const priceMaxInput = document.getElementById('priceMax');

    priceRange.addEventListener('input', function() {
        priceMaxInput.value = this.value;
    });

    // Connect the mileage range input with the text inputs
    const mileageRange = document.getElementById('mileageRange');
    const mileageMinInput = document.getElementById('mileageMin');
    const mileageMaxInput = document.getElementById('mileageMax');

    mileageRange.addEventListener('input', function() {
        mileageMaxInput.value = this.value;
    });

    // Optional: Make text inputs control the range sliders
    priceMaxInput.addEventListener('input', function() {
        priceRange.value = this.value;
    });

    mileageMaxInput.addEventListener('input', function() {
        mileageRange.value = this.value;
    });
</script>

@endsection