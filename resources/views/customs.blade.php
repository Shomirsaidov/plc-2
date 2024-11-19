@extends('layouts.app')


@section('title')

    Калькулятор растаможки авто из США

@endsection

@section('content')

    <div class="customs_bg px-10 lg:px-60 py-10 grid grid-cols-1 md:grid-cols-2" style="position: relative;">
        <h1 class="text-3xl font-bold text-white uppercase delivery py-3 lg:text-start my-8 text-center">@lang('customs.customs_title')</h1>
        <div class="hidden lg:block flex justify-end">
            <img  width="478" style="position: absolute; top: 30px;" src="/assets/customs-car.png" alt="">
        </div>
    </div>

    <div class="px-10 lg:px-60 py-10 lg:mt-20 ">
        <p class="text-lg text-justify">
        @lang('customs.customs_description')
        </p>
    </div>

    @include('inc.calculator-c')

    <div class="px-10 lg:px-60 py-4  ">
        <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('customs.customs_process_title')</h4>
        <br>
        <p class="text-lg text-justify">@lang('customs.customs_process_intro')</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('customs.customs_step1')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_step2')</div>
            </div>
        </div>

        <p class="text-lg text-justify">@lang('customs.customs_documents')</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('customs.customs_invoice')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_technical_passport')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('customs.customs_bill_of_lading')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('customs.customs_passport')</div>
            </div>
        </div>
        <br>
        <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('customs.customs_cost_title')</h4>
        <br>

        <p class="text-lg text-justify">@lang('customs.customs_cost_intro')</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('customs.customs_cost_logistics')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_cost_broker')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_cost_taxes')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_cost_expertise')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_cost_certification')</div>
            </div>
        </div>

        <br>
        
        <p class="text-lg text-justify">@lang('customs.customs_taxes_intro')</p>

        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet" ></div>
                <div class="text-lg text-justify">@lang('customs.customs_example_1')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_example_2')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_example_3')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_example_4')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('customs.customs_example_5')</div>
            </div>
        </div>

        <p class="text-lg text-justify">@lang('customs.customs_duties')</p>

        <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('customs.customs_timing_title')</h4>
        <p class="text-lg text-justify">@lang('customs.customs_timing')</p>

        <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('customs.customs_problems_title')</h4>
        <p class="text-lg text-justify">@lang('customs.customs_problems')</p>
        
        <br>
        <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('customs.customs_purchase_title')</h4>
        <p class="text-lg text-justify">@lang('customs.customs_purchase')</p>
    </div>

    @include('inc.footer')    

@endsection
