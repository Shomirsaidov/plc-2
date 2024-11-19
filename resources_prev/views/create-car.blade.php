@extends('layouts.app')

@section('title')
  Добавление авто - PLC Украина 
@endsection

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow-md">
    

    <h2 class="text-2xl font-bold mb-4">Добавить новый автомобиль</h2>
    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Название</label>
            <input type="text" id="name" name="name" class="w-full p-2 border rounded outline-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-2">Цена</label>
            <input type="number" step="0.01" id="price" name="price" class="w-full p-2 border rounded outline-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="images" class="block text-gray-700 font-medium mb-2">Изображения</label>
            <input type="file" id="images" name="images[]" class="w-full p-2 border rounded outline-blue-500" multiple>
        </div>

        <div class="mb-4">
            <label for="bio" class="block text-gray-700 font-medium mb-2">Описание</label>
            <textarea id="bio" name="bio" class="w-full p-2 border rounded outline-blue-500" rows="7"></textarea>
        </div>

        <div class="mb-4">
            <label for="year" class="block text-gray-700 font-medium mb-2">Год выпуска</label>
            <input type="number" id="year" name="year" class="w-full p-2 border rounded outline-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="oil" class="block text-gray-700 font-medium mb-2">Топливо</label>
            <select id="oil" name="oil" class="w-full p-2 border rounded outline-blue-500">
                <option value="Бензин">Бензин</option>
                <option value="Гибрид">Гибрид</option>
                <option value="Дизель">Дизель</option>
                <option value="Электро">Электро</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="mileage" class="block text-gray-700 font-medium mb-2">Пробег</label>
            <input type="number" id="mileage" name="mileage" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="engine" class="block text-gray-700 font-medium mb-2">Объём двигателя</label>
            <input type="text" id="engine" name="engine" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="drive" class="block text-gray-700 font-medium mb-2">Привод</label>
            <select id="drive" name="drive" class="w-full p-2 border rounded outline-blue-500">
                <option value="Задний">Задний</option>
                <option value="Передний">Передний</option>
                <option value="Полный">Полный</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 font-medium mb-2">Тип кузова</label>
            <select id="type" name="type" class="w-full p-2 border rounded outline-blue-500">
                <option value="Седан">Седан</option>
                <option value="Внедорожник">Внедорожник</option>
                <option value="Кроссовер">Кроссовер</option>
                <option value="Мини">Мини</option>
                <option value="Минивен">Минивен</option>
                <option value="Пикап">Пикап</option>
                <option value="Универсал">Универсал</option>
                <option value="Хэтчбек">Хэтчбек</option>
            </select>

        </div>

        <div class="mb-4">
            
            <label for="transmission" class="block text-gray-700 font-medium mb-2 font-medium mb-2">Трансмиссия</label>
            <select id="transmission" name="transmission" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="Автомат">Автомат</option>
                <option value="Механика">Механика</option>
                <option value="Механика/автомат">Механика/автомат</option>
                <option value="7DCT">7DCT</option>
                <option value="DHT">DHT</option>
                <option value="Вариатор">Вариатор</option>
                <option value="Гибридная">Гибридная</option>
                <option value="Ркпп">Ркпп</option>
            </select>


        </div>

        <div class="mb-4">
            <label for="color" class="block text-gray-700 font-medium mb-2">Цвет</label>
            <select id="color" name="color" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="Белый">Белый</option>
                <option value="Черный">Черный</option>
                <option value="Серый">Серый</option>
                <option value="Синий">Синий</option>
                <option value="Красный">Красный</option>
                <option value="Зеленый">Зеленый</option>
                <option value="Желтый">Желтый</option>
                <option value="Оранжевый">Оранжевый</option>
                <option value="Коричневый">Коричневый</option>
                <option value="Серебристый">Серебристый</option>
                <option value="Золотой">Золотой</option>
                <option value="Фиолетовый">Фиолетовый</option>
                <option value="Розовый">Розовый</option>
                <option value="Бордовый">Бордовый</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="color" class="block text-gray-700 font-medium mb-2">Страна</label>
            <select id="color" name="country" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="Украина">Украина</option>
                <option value="США">США</option>
                <option value="Корея">Корея</option>
                <option value="Китай">Китай</option>
                <option value="ОАЭ">ОАЭ</option>
                
            </select>
        </div>


        <div class="mb-4">
            
            <label for="is_p" class="block text-gray-700 font-medium mb-2 font-medium mb-2">Статус</label>
            <select id="is_p" name="status" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="available">В наличии</option>
                <option value="in_transit">В пути</option>
            </select>


        </div>

        <div class="mb-4">
            <label for="vincode" class="block text-gray-700 font-medium mb-2">Ссылка на аукцион</label>
            <input type="text" id="vincode" name="vincode" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="vin" class="block text-gray-700 font-medium mb-2">VIN код</label>
            <input type="text" id="vin" name="vin" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="pop" class="block text-gray-700 font-medium mb-2">Выводить это авто в главе "популярное" ?</label>
            <select id="pop" name="rating" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="popular">да</option>
                <option value="regular">нет</option>
               
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Добавить автомобиль</button>
    </form>
</div>
@endsection
