<div id="modalOverlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 w-96">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">@lang('messages.order_car')</h2>
            <button id="closeModal" class="text-gray-600 hover:text-gray-900 text-xl">&times;</button>
        </div>
        <form action="{{ route('cars.order') }}" method="POST">
            @csrf
            <input type="hidden" id="car_id" name="car_id"> 
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold">@lang('messages.your_name')<span class="text-red-500">*</span></label>
                <input type="text" id="user_name" name="user_name" class="w-full p-2 border border-gray-300 rounded outline-blue-500" placeholder="@lang('messages.name')">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-semibold">@lang('messages.your_phone')<span class="text-red-500">*</span></label>
                <div class="flex items-center border border-gray-300 border-r-0 rounded">
                    <input type="tel" id="user_contact" name="user_contact" placeholder="00 000 00 00" style="padding: 11px; padding-left: 50px; width: 100%" class="outline-none w-full lib-code  rounded-lg" required>        
                </div>
            </div>
            <button type="submit" class="w-full my_blue text-white py-2 rounded font-bold">@lang('messages.order')</button>
        </form>
    </div>
</div>


