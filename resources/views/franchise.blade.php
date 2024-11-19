@extends('layouts.app')

@section('title')
    @lang('messages.title') 
@endsection

@section('content')
<div class="lg:px-60 pt-6 pb-4 fr-bg mb-3">

    <div class="px-3 md:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <h1 class="my_bluec uppercase text-3xl font-bold mb-2">@lang('messages.hero_title') </h1>
                <p class="text-lg text-justify">
                    @lang('messages.hero_paragraph_1') 
                </p>
                <p class="text-lg text-justify">
                    @lang('messages.hero_paragraph_2')       
                </p>
            </div>
            <img src="/assets/cars/franch-header-car.png" class="ms-4 hidden md:block" alt="">
        </div>
    </div>

</div>

<div class="lg:px-60 py-10 flex justify-center">

    <div class="flex items-center flex-col md:flex-row md:space-x-16">
        <div class="flex flex-col justify-center items-center">
            <h2 class="uppercase h_color text-3xl font-bold mb-8">@lang('messages.why_choose_us_title') </h2>
            <img src="/assets/franch-plc.jpg.png" alt="">
        </div>
        <div class="px-3 md:px-0">
            <h4 class="h_color text-xl font-bold mb-2">@lang('messages.who_we_are_title') </h4>
            <p class="text-lg text-justify" style="max-width: 500px;">
                @lang('messages.who_we_are_paragraph') 
            </p>
        </div>
    </div>

</div>

<div class="lg:px-60 py-10 f2f2f2">

    <h1 class="text-3xl font-bold uppercase text-center">@lang('messages.why_choose_us_title') </h1>

    <div class="flex items-center flex-col md:flex-row md:space-x-3 px-3 md:px-0">
        <img src="/assets/franch-user.png" alt="">
        <div class="space-y-2 text-lg text-justify">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('messages.why_choose_us_bullet_1') </div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('messages.why_choose_us_bullet_2') </div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('messages.why_choose_us_bullet_3') </div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('messages.why_choose_us_bullet_4') </div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('messages.why_choose_us_bullet_5') </div>
            </div>
        </div>
    </div>

</div>

<div class="lg:px-60 py-10">

    <h1 class="text-3xl font-bold uppercase text-center h_color">@lang('messages.what_you_get_title') </h1>
    <p class="text-lg text-center">@lang('messages.what_you_get_paragraph') </p>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 p-4 mt-8">
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr1.svg" alt="Training Icon" class="">
          <p class="text-sm">
            @lang('messages.what_you_get_benefit_1') 
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr2.svg" alt="Delivery Icon" class="">
          <p class="text-sm">
            @lang('messages.what_you_get_benefit_2') 
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr3.svg" alt="Software Icon" class="">
          <p class="text-sm">
            @lang('messages.what_you_get_benefit_3') 
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr4.svg" alt="Phone Icon" class="">
          <p class="text-sm">
            @lang('messages.what_you_get_benefit_4') 
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr5.svg" alt="Advertising Icon" class="">
          <p class="text-sm">
            @lang('messages.what_you_get_benefit_5') 
          </p>
        </div>
        
        <div class="flex flex-col items-center text-center space-y-4">
          <img src="/assets/fr6.svg" alt="Design Icon" class="">
          <p class="text-sm">
            @lang('messages.what_you_get_benefit_6') 
          </p>
        </div>
    </div>

</div>

@include('inc.footer')

@endsection
