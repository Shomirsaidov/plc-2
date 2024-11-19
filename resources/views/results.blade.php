@extends('layouts.app')

@section('title')

    Машина с VIN кодом {{ request()->query('vin') }}

@endsection

@section('content')

<div class="px-10 lg:px-60 py-10 pt-8">
  <h4 class="h_color text-3xl font-bold mb-4">@lang('car.cars_with_vin')<span class="font-medium text-3xl">{{ request()->query('vin') }}</span></h4>

  @if(!$results->isNotEmpty())
    <h4 class=" text-2xl text-gray-800 font-bold mb-4">@lang('car.not_found')</h4>
  @endif
  
  <div class="grid gap-4 grid-cols-1 md:grid-cols-3">
    @foreach($results as $similarCar)
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

@endsection

