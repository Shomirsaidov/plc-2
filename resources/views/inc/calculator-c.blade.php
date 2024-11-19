<div class="px-10 lg:px-60 py-10 bg-bmw">

    <h2 class="text-center text-2xl uppercase font-bold mt-0 text-white">@lang('welcome_page.customs_in_ukraine')</h2>

    <div class="flex flex-col md:flex-row items-start md:items-start md:space-x-8 mt-8">
        <!-- Left Text Block -->
        <div class="md:w-1/2 text-gray-900 text-lg text-white">
            <p class="mb-4 text-lg text-justify">
                @lang('welcome_page.customs_law_update')
                @lang('welcome_page.contact_us_for_consultation')
            </p>
        </div>
        
        <!-- Right Calculator Block -->
        <div class="f2f2f2 rounded-lg w-full md:w-1/2 md:mt-0 plc-shadow2">
            <div class="bg-white p-6 pb-2 mb-4 rounded-md plc-shadow2">
                <h3 class="text-xl uppercase font-bold text-blue-800 mb-4 my_blue_text text-center">@lang('welcome_page.customs_calculator')</h3>
                <div class="flex w-full space-x-4 mb-1">
                    <div class="w-full space-y-2">
                        <label for="engine_type" class="block text-sm font-medium text-gray-700 outdivne-blue-300">@lang('welcome_page.engine_type')</label>
                        <select class="w-100 border-2 rounded-md p-2" id="engine_type">
                            <option value="">@lang('welcome_page.petrol')</option>
                        </select>
                    </div>
                    <div class="w-full space-y-2">
                        <label for="engine_capacity" class="block text-sm font-medium text-gray-700 outdivne-blue-300">@lang('welcome_page.engine_capacity')</label>
                        <select class="w-100 border-2 rounded-md p-2" id="engine_capacity">
                            <option value="">2000</option>
                        </select>
                    </div>
                </div>
                <div class="flex w-full space-x-4 mb-4">
                    <div class="w-full space-y-2">
                        <label for="car_year" class="block text-sm font-medium text-gray-700 outdivne-blue-300">@lang('welcome_page.car_year')</label>
                        <select class="w-100 border-2 rounded-md p-2" id="car_year">
                            <option value="">2014</option>
                        </select>
                    </div>
                    <div class="w-full space-y-2">
                        <label for="customs_value" class="block text-sm font-medium text-gray-700 outdivne-blue-300">@lang('welcome_page.customs_value')</label>
                        <select class="w-100 border-2 rounded-md p-2" id="customs_value">
                            <option value="">3000</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="p-6 pt-2">
                <div class="text-gray-700 space-y-2 text-lg">
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.customs_duty')</span>
                        <span class="font-bold text-lg">300</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.excise_duty')</span>
                        <span class="font-bold text-lg">1 050</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.vat')</span>
                        <span class="font-bold text-lg">870</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-lg">@lang('welcome_page.customs_charges')</span>
                        <span class="font-bold text-lg">2 220</span>
                    </div>
                </div>
                <div class="border-t border-gray-300 my-3"></div>
                <div class="flex justify-between text-lg font-bold">
                    <span class="text-lg">@lang('welcome_page.total_price')</span>
                    <span class="text-red-500 text-lg">5 220</span>
                </div>
            </div>
        </div>
    </div>

</div>
