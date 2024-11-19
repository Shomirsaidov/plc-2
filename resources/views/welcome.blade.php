@extends('layouts.app')


@section('title')

    PLС-UA аукцоны авто из Кореи, США, Европы, Китая, ОАЭ  

@endsection

@section('meta')

<meta property="og:title" content="PLC UA" />
<meta property="og:description" content="PLС-UA аукцоны авто из Кореи, США, Европы, Китая, ОАЭ " />
<meta property="og:image" content="{{ url()->current() . "/assets/brand/logo.png" }}" />
<meta property="og:url" content="{{ url()->current() }}" />

@endsection

@section('content')


    

    
    <div class="px-10 md:block lg:px-60 banner-bg py-10">
        <h1 class="text-3xl font-bold text-start h_color">{{ __('welcome_page.banner_heading') }}</h1>
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 p-4 justify-between rounded-md bg-white w-full md:w-1/2 my-6">
            <div class="flex flex-1 items-center space-x-3 bg-gray-100 pe-4 rounded-md">
                <img src="/assets/ua.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                <a href="/autos">
                    <div>{{ __('welcome_page.auto_ukraine') }}</div>
                </a>
            </div>
            <div class="flex flex-1 items-center space-x-3 bg-gray-100 pe-4 rounded-md">
                <img src="/assets/china.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                <a href="/china">
                    <div>{{ __('welcome_page.auto_china') }}</div>
                </a>
            </div>
        </div>

        <div class="flex-col md:flex-row flex md:w-1/2 md:space-x-8 justify-between">
            <div class="p-4 rounded-md bg-white space-y-4">
                <h2 class="text-lg font-bold uppercase text-center">{{ __('welcome_page.custom_order_heading') }}</h2>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/usa.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>{{ __('welcome_page.auto_usa') }}</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/korea.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-kr">
                        <div>{{ __('welcome_page.auto_korea') }}</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/eu.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>{{ __('welcome_page.auto_europe') }}</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/arab.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-ae">
                        <div>{{ __('welcome_page.auto_uae') }}</div>
                    </a>
                </div>
            </div>

            <div class="p-4 rounded-md bg-white space-y-4">
                <h2 class="text-lg font-bold uppercase text-center">{{ __('welcome_page.auction_heading') }}</h2>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/usa.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>{{ __('welcome_page.auto_usa') }}</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/korea.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-kr">
                        <div>{{ __('welcome_page.auto_korea') }}</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/eu.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-us">
                        <div>{{ __('welcome_page.auto_europe') }}</div>
                    </a>
                </div>
                <div class="flex space-x-3 flex-1 pe-8 items-center f2f2f2 rounded-md">
                    <img src="/assets/arab.png" class="rounded-md" width="65" style="height: 40px;" alt="">
                    <a href="https://plc.auction/ru/auction/from-ae">
                        <div>{{ __('welcome_page.auto_uae') }}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="px-10 md:block lg:px-60 py-10 ">
        <div class="my-10 space-y-4">
            <div class="p-8 rounded-md tesla-card" style="position: relative;">
                <h1 class="text-xl font-bold text-center uppercase h_color">{{ __('welcome_page.quick_selection_heading') }}</h1>
                <div class="flex mt-10">
                    <img class="hidden lg:block" src="/assets/tesla-red.png" alt="" style="position: absolute; left: -165px; top: 30px; width: 495px; height: 278px;">
                    <div class="w-full max-w-2xl lg:ms-80 bg-white p-6 rounded-lg shadow-md">
                        <form action="#" method="POST" class="grid gap-4 md:grid-cols-3">
                            <!-- Body Type -->
                            <div>
                                <label for="body-type" class="block text-sm font-medium text-gray-700">{{ __('welcome_page.body_type') }}</label>
                                <select id="body-type" name="body_type" class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                                    <option value="">{{ __('welcome_page.any') }}</option>
                                    <!-- Add more options here as needed -->
                                </select>
                            </div>
                
                            <!-- Year Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">{{ __('welcome_page.year_range') }}</label>
                                <div class="flex space-x-2 mt-1">
                                    <input value="2012" type="number" name="year_from" placeholder="{{ __('welcome_page.from') }}" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                                    <input value="2019" type="number" name="year_to" placeholder="{{ __('welcome_page.to') }}" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                                </div>
                            </div>
                
                            <!-- Price Range -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">{{ __('welcome_page.price_usd') }}</label>
                                <div class="flex space-x-2 mt-1">
                                    <input value="0" type="number" name="price_min" placeholder="{{ __('welcome_page.min') }}" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                                    <input value="12000" type="number" name="price_max" placeholder="{{ __('welcome_page.max') }}" class="font-semibold w-1/2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                                </div>
                            </div>
                
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">{{ __('welcome_page.your_name') }}</label>
                                <input type="text" id="name" name="name" placeholder="{{ __('welcome_page.name') }}" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                
                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700">{{ __('welcome_page.your_phone') }}</label>
                                <input type="tel" id="phone" name="phone" placeholder="{{ __('welcome_page.phone_placeholder') }}" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-yellow-500 focus:border-yellow-500">
                            </div>
                
                            <!-- Submit Button -->
                            <div class="flex items-end">
                                <button type="submit" class="w-full py-2 my_yellow font-semibold rounded-md focus:outline-none">
                                    {{ __('welcome_page.submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


    
    <div class="px-10 md:block lg:px-60 bg-sec py-8 pb-2">
        <h2 class="text-center text-2xl font-bold my-8 mt-0 h_color">{{ __('welcome_page.popular_cars_from_us') }}</h2>
    
        <!-- Car divs -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach($us_pop as $car)
                <div class="bg-white rounded-lg overflow-hidden border border-gray-300 car-card" data-car-id="{{ $car->vin }}">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="Car Image" class="w-full h-48 object-cover"> <!-- Replace image_url with the correct field -->
                    <div class="">
                        <h3 class="text-md font-semibold text-center py-2 border-b border-gray-300">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h3>
                        <div class="flex items-center justify-center text-gray-700 py-2">
                            <img src="/assets/money.svg" alt="">
                            <span class="ml-1 font-semibold text-center">{{ number_format($car->price, 0, '', ' ') }} $</span>
                        </div>
                        <div class="mt flex">
                            <button class="flex-1 my_blue text-white py-2 rounded-es-md hover:bg-blue-600 buy_modal">{{ __('welcome_page.order') }}</button>
                            <a class="text-center flex-1 my_yellow py-2 rounded-ee-md hover:bg-yellow-400"
                               href="{{ $car->vincode ? $car->vincode : route('cars.show', $car->vin) }}">
                                {{ __('welcome_page.details') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- View All Button -->
        <div class="my-3 text-center">
            <a href="https://plc.auction/ru/auction/from-us">
                <button class="px-6 py-2 bg-white text-gray-700 border border-gray-900">{{ __('welcome_page.view_all_cars_from_us') }}</button>
            </a>
        </div>
    </div>
    
    <div class="px-10 md:block lg:px-60 py-2 pb-2">
        <h2 class="text-center text-2xl font-bold my-8 mt-0 h_color">{{ __('welcome_page.popular_cars_from_korea') }}</h2>
    
        <!-- Car divs -->
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach($korea_pop as $car)
                <div class="bg-white rounded-lg overflow-hidden border border-gray-300 car-card" data-car-id="{{ $car->vin }}">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="Car Image" class="w-full h-48 object-cover"> <!-- Replace image_url with the correct field -->
                    <div class="">
                        <h3 class="text-md font-semibold text-center py-2 border-b border-gray-300">{{ $car->name }} {{ $car->year }} {{ $car->engine }}</h3>
                        <div class="flex items-center justify-center text-gray-700 py-2">
                            <img src="/assets/money.svg" alt="">
                            <span class="ml-1 font-semibold text-center">{{ number_format($car->price, 0, '', ' ') }} $</span>
                        </div>
                        <div class="mt flex">
                            <button class="flex-1 my_blue text-white py-2 rounded-es-md hover:bg-blue-600 buy_modal">{{ __('welcome_page.order') }}</button>
                            <a class="text-center flex-1 my_yellow py-2 rounded-ee-md hover:bg-yellow-400"
                               href="{{ $car->vincode ? $car->vincode : route('cars.show', $car->vin) }}">
                                {{ __('welcome_page.details') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- View All Button -->
        <div class="my-8 text-center">
            <a href="https://plc.auction/ru/auction/from-kr">
                <button class="px-6 py-2 bg-white text-gray-700 border border-gray-900">{{ __('welcome_page.view_all_cars_from_korea') }}</button>
            </a>    
        </div>
    </div>
    
    



    <div class="lg:px-60 py-10 pt-4">
        <div class="flex flex-wrap callto plc-shadow mt-4 items-center p-2 rounded-md border justify-center md:justify-between">
            <div class="flex text-center lg:text-start lg:space-x-6 ">
                <div class="hidden lg:block">
                        <img src="/assets/call-to-action.png" class="h-full w-80" alt="Call to Action" style="position: relative; top: -15px;">
                </div>
                
                <!-- Text and Button Section -->
                <div class="flex flex-col md:flex-row px-2 justify-between py-10">
                    <div>
                        <p class="lg:text-start font-bold text-3xl h_color leading-10">
                            <span class="text-3xl my_bluec">{{ __('welcome_page.call_to_action_title') }}</span><br>
                        </p>
                        <div class="flex items-center w-full mt-2 my_bluec font-bold text-3xl space-x-3">
                            <img src="/assets/phone-blue.png" alt="">
                            <div class="text-3xl font-bold">{{ __('welcome_page.phone_number') }}</div>
                        </div>
                        
                    </div>
    
                    <div class="lg:pe-20">
                        <p class="mt-2 text-gray-700 font-medium text-center lg:text-end">{{ __('welcome_page.leave_phone_title') }}</p>
                        <button class="bg-yellow-400 text-black py-2 px-4 rounded-md mt-2">{{ __('welcome_page.leave_phone_button') }}</button>
                    </div>
                </div>

            </div>
    
           
        </div>
    </div>
    
    <div class="hidden lg:block lg:px-60 py-10 mb-20 bg-sec pt-2">
        <div class="flex flex-col items-center py-8 space-y-8 max-w-7xl mx-auto relative">
            <!-- Title -->
            <h2 class="text-center text-2xl uppercase font-bold mt-0 h_color">{{ __('welcome_page.buying_process_title') }}</h2>
        
            <!-- Steps Container -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="flex items-center justify-center relative">
                        <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">1</div>
                        <div class="p-10 rounded-full plc-shadow bg-white">
                            <img class="" src="/assets/SVG-4.png" alt="">
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold my_bluec mt-4">{{ __('welcome_page.step_1_title') }}</h2>
                    <p class="text-gray-700 mt-2">{{ __('welcome_page.step_1_desc') }}</p>
                </div>
        
                <!-- Step 3 -->
                <div class="text-center">
                    <div class="flex items-center justify-center relative">
                        <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">3</div>
                        <div class="p-10 rounded-full plc-shadow bg-white">
                            <img src="/assets/car-service.png" alt="">
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold my_bluec mt-4">{{ __('welcome_page.step_3_title') }}</h2>
                    <p class="text-gray-700 mt-2">{{ __('welcome_page.step_3_desc') }}</p>
                </div>
        
                <!-- Step 4 -->
                <div class="text-center">
                    <div class="flex items-center justify-center relative">
                        <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">4</div>
                        <div class="p-10 rounded-full plc-shadow bg-white">
                            <img src="/assets/SVG-3.png" alt="">
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold my_bluec mt-4">{{ __('welcome_page.step_4_title') }}</h2>
                    <p class="text-gray-700 mt-2">{{ __('welcome_page.step_4_desc') }}</p>
                </div>
        
                <!-- Step 6 -->
                <div class="text-center">
                    <div class="flex items-center justify-center relative">
                        <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">6</div>
                        <div class="p-10 rounded-full plc-shadow bg-white">
                            <img src="/assets/SVG-2.png" alt="">
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold my_bluec mt-4">{{ __('welcome_page.step_6_title') }}</h2>
                    <p class="text-gray-700 mt-2">{{ __('welcome_page.step_6_desc') }}</p>
                </div>
            </div>
        
            <!-- Second Row with Car Image -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-80 justify-items-center items-center mt-8">
                <!-- Step 2 -->
                <div class="text-center">
                    <div class="flex items-center justify-center relative">
                        <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">2</div>
                        <div class="p-10 rounded-full plc-shadow bg-white">
                            <img src="/assets/SVG-1.png" alt="">
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold my_bluec mt-4">{{ __('welcome_page.step_2_title') }}</h2>
                    <p style="max-width: 270px;" class="text-gray-700 mt-2">{{ __('welcome_page.step_2_desc') }}</p>
                </div>
        
                <!-- Step 5 -->
                <div class="text-center">
                    <div class="flex items-center justify-center relative">
                        <div style="position: absolute; left: 50px;" class="flex items-center justify-center w-10 h-10 my_blue text-white font-bold rounded-full">5</div>
                        <div class="p-10 rounded-full plc-shadow bg-white">
                            <img src="/assets/SVG-0.png" alt="">
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold my_bluec mt-4">{{ __('welcome_page.step_5_title') }}</h2>
                    <p style="max-width: 270px;" class="text-gray-700 mt-2">{{ __('welcome_page.step_5_desc') }}</p>
                </div>
            </div>

            <img src="/assets/plc_car.png" style="position: absolute; bottom: -100px; width: 320px;" alt="Car" class="w-full max-w-md hidden md:block mx-auto">

        </div>
    </div>
    





    <div class="lg:hidden">
        @include('inc.steps-block-mobi')
    </div>











    <!-- New block  -->

    @include('inc.calculator')






    <!-- New block  -->

    @include('inc.calculator-c')



    <!-- New block  -->
    <div class="px-10 lg:px-60 py-10">
        <h2 class="text-center text-2xl uppercase font-bold mt-0 h_color mb-3">@lang('welcome_page.our_advantages')</h2>
    
        <div class="max-w-screen-xl mx-auto p-6 grid grid-cols-1 md:grid-cols-5 gap-6 text-center">
            <!-- Block 1 -->
            <div class="flex flex-col items-center space-y-3">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv1.png" alt="">
                </div>
                <h3 class="text-xl font-bold mb-2">@lang('welcome_page.financial_security')</h3>
                <p class="text-lg">@lang('welcome_page.financial_security_description')</p>
            </div>
            
            <!-- Block 2 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv2.png" alt="">
                </div>
                <h3 class="text-xl font-bold mb-2">@lang('welcome_page.time_saving')</h3>
                <p class="text-lg">@lang('welcome_page.time_saving_description')</p>
            </div>
            
            <!-- Block 3 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv3.png" alt="">
                </div>
                <h3 class="text-xl font-bold mb-2">@lang('welcome_page.technical_reports')</h3>
                <p class="text-lg">@lang('welcome_page.technical_reports_description')</p>
            </div>
            
            <!-- Block 4 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv4.png" alt="">
                </div>
                <h3 class="text-xl font-bold mb-2">@lang('welcome_page.low_prices')</h3>
                <p class="text-lg">@lang('welcome_page.low_prices_description')</p>
            </div>
            
            <!-- Block 5 -->
            <div class="flex flex-col items-center">
                <div class="p-4 rounded-full plc-shadow3 bg-white">
                    <img src="/assets/adv5.png" alt="">
                </div>
                <h3 class="text-xl font-bold mb-2">@lang('welcome_page.customer_support')</h3>
                <p class="text-lg">@lang('welcome_page.customer_support_description')</p>
            </div>
        </div>
    </div>
    




    <div class="px-10 lg:px-60 py-10 my_blue my-16" style="height: 220px;">

        <div class="relative plc-shadow3" style="top: -100px;">
            <div class="flex flex-wrap callto mt-4 items-center p-2 pb-0 rounded-t-md justify-center md:justify-between">
                <div class="flex text-center lg:text-start lg:space-x-6 items-start">
                    <div class="hidden lg:block">
                        <div class=" indivne-block rounded-lg">
                            <img src="/assets/call-to-action.png" alt="Call to Action" style="position: relative; top: -15px;">
                        </div>
                    </div>
                    
                    <!-- Text and Button Section -->
                    <div>
                        <p class="lg:text-start font-bold text-3xl h_color leading-10">
                            <span class="text-3xl my_bluec">@lang('welcome_page.questions')</span><br>@lang('welcome_page.manager_answer')
                        </p>
                        <div class="flex items-center w-full mt-2 my_bluec font-bold text-3xl space-x-3 ps-4 lg:ps-0">
                            <img src="/assets/phone-blue.png" alt="">
                            <div class="text-3xl font-bold">@lang('welcome_page.phone_number')</div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="flex justify-between flex-col md:flex-row lg:space-x-8 bg-white py-4 pt-2 px-20 rounded-b-md">
                <div class="flex lg:space-x-4 flex-1 flex-wrap">
                    <div class="space-y-2">
                        <input type="text" id="name" name="name" placeholder="@lang('welcome_page.your_name')" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                        <input type="tel" id="name" name="name" placeholder="@lang('welcome_page.phone_number_placeholder')" required class="font-semibold mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <textarea class="font-semibold mt-1 block w-full lg:w-1/2 p-2 border border-gray-300 rounded-md focus:outdivne-none focus:ring-yellow-500 focus:border-yellow-500" placeholder="@lang('welcome_page.ask_question_placeholder')"></textarea>
                </div>
                <div class="flex items-center justify-center mt-4 lg:mt-0">
                    <button class="my_yellow py-2 px-16 rounded-md font-semibold">@lang('welcome_page.send_button')</button>
                </div>
            </div>
        </div>
    
    </div>
    
    

    <div class="px-10 lg:px-60 py-10 mb-2">
        <p class="text-lg text-justify">
            @lang('welcome_page.intro_text')
        </p>
        <br>
        <h3 class="text-center text-2xl uppercase font-bold mt-0 h_color mb-3">@lang('welcome_page.advantages_heading')</h3>
        

        <div class="flex items-center justify-between flex-col lg:flex-row">
            <div>
                <p class="text-lg text-justify">@lang('welcome_page.advantages_intro')</p>
                <br>
                <div class="space-y-2 text-lg text-justify">
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">@lang('welcome_page.advantage1')</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">@lang('welcome_page.advantage2')</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">@lang('welcome_page.advantage3')</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">@lang('welcome_page.advantage4')</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">@lang('welcome_page.advantage5')</div>
                    </div>
                    <div class="flex space-x-2 items-start">
                        <div class="my_blue rounded-full bullet"></div>
                        <div class="text-lg text-justify">@lang('welcome_page.advantage6')</div>
                    </div>
                </div>
            </div>
            <img src="/assets/frame-320.png" class="rounded-full lg:ps-16" alt="">
        </div>
    
        <div class="bg-white plc-shadow p-4 my-8 rounded-lg">
            <div class="text-center text-2xl uppercase font-bold mt-0 h_color mb-4">@lang('welcome_page.pop_brands')</div>
            <div class="grid grid-cols-2 md:grid-cols-7 text-lg font-medium text-center">
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Acura</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Alfa Romeo</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Aston Martin</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Audi</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Bentley</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Cadillac</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Can-AM</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chevrolet</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chrysler</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Dodge</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ferrari</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">GMC</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Honda</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hummer</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hyundai</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Isuzu</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jaguar</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">KIA</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Land Rover</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Lexus</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Lincoln</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Maserati</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mazda</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">McLaren</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mercedes Benz</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mini</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Nissan</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Pontiac</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Porsche</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">RAM</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Rolls Royce</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">SAAB</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Smart</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Subaru</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Suzuki</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Tesla</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volvo</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Yamaha</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">BMW</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Buick</a>
                <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Fiat</a>
              </div>
        </div>
    
        <div class="bg-white plc-shadow2 p-4 my-8 rounded-md">
            <div class="text-center text-2xl uppercase font-bold mt-0 h_color mb-4">@lang('welcome_page.pop_models')</div>
            <div class="grid grid-cols-2 md:grid-cols-7 text-lg font-medium text-center">
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota Land Cruiser</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Acura</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Alfa Romeo</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Aston Martin</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Audi</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Bentley</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Cadillac</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Can-AM</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chevrolet</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Chrysler</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Dodge</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ferrari</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Ford</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">GMC</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Honda</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hummer</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Hyundai</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Isuzu</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jaguar</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Jeep</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">KIA</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Land Rover</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Lexus</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Lincoln</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Maserati</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mazda</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">McLaren</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mercedes Benz</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Mini</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Nissan</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Pontiac</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Porsche</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">RAM</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Rolls Royce</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">SAAB</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Smart</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Subaru</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Suzuki</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Tesla</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Toyota</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volkswagen</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Volvo</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Yamaha</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">BMW</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Buick</a>
                    <a href="https://plc.auction/ru/auction/from-us" class="text-gray-700 hover:text-blue-500">Fiat</a>
            </div>
        </div>







       
          

          
          
        

        <div class="text-center text-2xl uppercase font-bold mt-0 h_color mb-4">@lang('welcome_page.how_to_choose_car_from_usa')</div>
        <p class="text-lg text-justify">
            @lang('welcome_page.step_by_step_guide')
            <ol class="text-lg text-justify">
                <li class="text-lg text-justify">@lang('welcome_page.step1')</li>
                <li class="text-lg text-justify">@lang('welcome_page.step2')</li>
                <li class="text-lg text-justify">@lang('welcome_page.step3')</li>
                <li class="text-lg text-justify">@lang('welcome_page.step4')</li>
                <li class="text-lg text-justify">@lang('welcome_page.step5')</li>
            </ol>
            <p class="text-lg text-justify">
                @lang('welcome_page.auction_warning')
            </p>
            <div class="space-y-2 text-lg text-justify">
                <div class="flex space-x-2 items-start">
                    <div class="my_blue rounded-full bullet"></div>
                    <div class="text-lg text-justify">@lang('welcome_page.risk_item1')</div>
                </div>
                <div class="flex space-x-2 items-start">
                    <div class="my_blue rounded-full bullet"></div>
                    <div class="text-lg text-justify">@lang('welcome_page.risk_item2')</div>
                </div>
                <div class="flex space-x-2 items-start">
                    <div class="my_blue rounded-full bullet"></div>
                    <div class="text-lg text-justify">@lang('welcome_page.risk_item3')</div>
                </div>
            </div>
        </p>

        <div class="text-center text-2xl uppercase font-bold mt-0 h_color py-10">@lang('welcome_page.how_to_avoid_risks')</div>
        <p class="text-lg text-justify">
            @lang('welcome_page.buying_tips')
        </p>
        <div class="space-y-2 text-lg text-justify my-2 mb-0">
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item4')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item5')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item6')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item7')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item8')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item9')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item10')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item11')</div>
            </div>
            <div class="flex space-x-2 items-center">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('welcome_page.risk_item12')</div>
            </div>
        </div>





    </div>  

    <div class="flex justify-center w-full mb-8">
        <button class="my_yellow py-2 text-xl px-4 uppercase rounded-sm font-semibold hover:bg-white hover:border-yellow-500 hover:border-2">@lang('welcome_page.real_testimonials')</button>
    </div>


    <div class="px-10 lg:px-60 py-10 mb-2 pt-8">
        <div class="text-center text-2xl uppercase font-bold mt-0 h_color py-8 pt-0">@lang('welcome_page.articles_auto')</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-md hover:shadow overflow-hidden cursor-pointer">
                <img src="/assets/card1.png" alt="Small cars" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="my_bluec font-semibold text-lg">Маленькие машины для женщин и девушек: ТОП-10</h2>
                    <p class="text-sm text-gray-400">05.10.2024 /// Комментариев нет</p>
                    <p class="mt-4 text-gray-700 text-sm">
                        Маленькие машины для женщин и девушек: ТОП-10. Выбирать автомобиль непросто, но выбор всегда определяет то, для кого эта машина предназначена. И в этом плане женский.
                    </p>
                </div>
            </div>
        
            <!-- Card 2 -->
            <div class="bg-white rounded-md hover:shadow overflow-hidden cursor-pointer">
                <img src="/assets/card2.png" alt="Cars with large trunk" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="my_bluec font-semibold text-lg">Машины с большим багажником: ТОП-10</h2>
                    <p class="text-sm text-gray-400">05.10.2024 /// Комментариев нет</p>
                    <p class="mt-4 text-gray-700 text-sm">
                        Машины с большим багажником: ТОП-10. Раньше багажники автомобилей были по-настоящему огромными, настолько, что внутри такого багажника с легкостью могли бы поместиться несколько человек. Однако со временем...
                    </p>
                </div>
            </div>
        
            <!-- Card 3 -->
            <div class="bg-white rounded-md hover:shadow overflow-hidden cursor-pointer">
                <img src="/assets/card3.png" alt="Toyota Camry generations" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="my_bluec font-semibold text-lg">Тойота Камри: какой кузов лучший, обзор поколений</h2>
                    <p class="text-sm text-gray-400">05.10.2024 /// Комментариев нет</p>
                    <p class="mt-4 text-gray-700 text-sm">
                        Тойота Камри: какой кузов лучший, обзор поколений. Модель Toyota Camry — это всемирно признанный бестселлер с более чем 19 миллионами проданных автомобилей в более чем...
                    </p>
                </div>
            </div>
        </div>
        

    </div>


    @include('inc.modal')
    @include('inc.footer')


@endsection