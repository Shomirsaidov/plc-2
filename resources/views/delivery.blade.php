@extends('layouts.app')


@section('title')

    @lang('delivery.title')

@endsection

@section('content')


    <div class="delivery_bg px-10 lg:px-60 py-10 grid grid-cols-1 md:grid-cols-2" style="position: relative;">
        <h1 class="text-3xl font-bold text-white uppercase delivery py-3 lg:text-start text-center">@lang('delivery.delivery_title')</h1>
        <div class="hidden lg:block flex justify-end">
            <img  width="478" style="position: absolute;  top: 50px;" src="/assets/header-car.png" alt="">
        </div>
    </div>


    <div class="px-10 lg:px-60 py-10 lg:mt-20 ">
        <p class="text-lg text-justify">
            @lang('delivery.auto_delivery_popularity')
        </p>
        <br>
        <p class="text-lg text-justify">
            @lang('delivery.auto_delivery_help')
        </p>

        <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('delivery.purchase_and_delivery')</h4>
        <br>
        <p class="text-lg text-justify">@lang('delivery.auction_info')</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('delivery.low_price_transportation')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('delivery.blurry_photos')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('delivery.shiny_details')</div>
            </div>
        </div>

        <br>

        <p class="text-lg text-justify">
            @lang('delivery.arrival_and_customs')
        </p>

    </div>

    @include('inc.calculator')
    @include('inc.call-center')    
    @include('inc.footer')    


@endsection
