<div id="modalOverlay" class="fixed inset-0 bg-gray-900 bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 w-96">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">ЗАКАЗАТЬ АВТО</h2>
            <button id="closeModal" class="text-gray-600 hover:text-gray-900 text-xl">&times;</button>
        </div>
        <form action="{{ route('cars.order') }}" method="POST">
            @csrf
            <input type="hidden" id="car_id" name="car_id"> 
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold">Ваше имя<span class="text-red-500">*</span></label>
                <input type="text" id="user_name" name="user_name" class="w-full p-2 border border-gray-300 rounded outline-blue-500" placeholder="Имя">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-semibold">Ваш телефон<span class="text-red-500">*</span></label>
                <div class="flex items-center border border-gray-300 rounded">
                    <span class="p-2 bg-gray-100">+380</span>
                    <input type="tel" id="user_contact" name="user_contact" class="w-full p-2 outline-blue-500" placeholder="00 000 00 00">
                </div>
            </div>
            <button type="submit" class="w-full my_blue text-white py-2 rounded font-bold">Заказать</button>
        </form>
    </div>
</div>