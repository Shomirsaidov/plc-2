<div class="px-10 lg:px-60 py-10 pt-2">

    <h2 class="text-center text-2xl uppercase font-bold mt-0 h_color">@lang('welcome_page.car_delivery_to_ukraine')</h2>

    <div class="flex flex-col md:flex-row items-start md:items-start md:space-x-8 mt-8">
        <!-- Left Text Block -->
        <div class="md:w-1/2 text-gray-900 text-lg">
            <p class="mb-4 text-lg text-justify">
                @lang('welcome_page.car_delivery_description')
            </p>
            <p class="text-lg text-justify">
                @lang('welcome_page.delivery_time') 
                <a href="#" class="text-white p-1 my_blue rounded-md">@lang('welcome_page.contact_us')</a>
                @lang('welcome_page.manager_assistance')
            </p>
        </div>
      
        <!-- Right Calculator Block -->
        <div class="my_blue_subtle rounded-lg w-full md:w-1/2 md:mt-0 plc-shadow2">
            <div class="my_blue p-6 mb-4 rounded-md">
                <h3 class="text-xl uppercase font-bold text-blue-800 mb-4 text-white text-center">@lang('welcome_page.delivery_cost_calculator')</h3>
                <div class="flex space-x-4 mb-4">
                    <select class="block w-full bg-white border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>@lang('welcome_page.korea')</option>
                        <!-- Add other options as needed -->
                    </select>
                    <select class="block w-full bg-white border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>@lang('welcome_page.seoul')</option>
                        <!-- Add other options as needed -->
                    </select>
                </div>
            </div>
            <div class="p-6">
                <div class="text-gray-700 space-y-2 text-lg">
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.delivery_cost')</span>
                        <span class="font-bold text-lg">1752</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.customs_broker_services')</span>
                        <span class="font-bold text-lg">250</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.freight_services')</span>
                        <span class="font-bold text-lg">316</span>
                    </div>
                </div>
                <div class="border-t border-gray-300 my-3"></div>
                <div class="flex justify-between text-lg font-bold">
                    <span class="text-lg">@lang('welcome_page.total_delivery_cost')</span>
                    <span class="text-red-500 text-lg">2318</span>
                </div>
                <p class="text-sm text-gray-500 mt-2">
                    @lang('welcome_page.additional_fees')
                </p>
            </div>
        </div>
    </div>

</div>
