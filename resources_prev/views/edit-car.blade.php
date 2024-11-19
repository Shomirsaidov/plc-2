@extends('layouts.app')

@section('title')
  Редактирование авто - PLC Украина 
@endsection

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow-md">

    <h2 class="text-2xl font-bold mb-4">Редактировать автомобиль</h2>
    <form action="{{ route('cars.edit', $car->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Название</label>
            <input type="text" id="name" name="name" value="{{ old('name', $car->name) }}" class="w-full p-2 border rounded outline-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-2">Цена</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price', $car->price) }}" class="w-full p-2 border rounded outline-blue-500" required>
        </div>

        <input type="hidden" name="car_id" value="{{ $car->id }}">

        <div class="mb-4">
            <label for="images" class="block text-gray-700 font-medium mb-2">Изображения</label>
            <input type="file" id="images" name="images[]" class="w-full p-2 border rounded outline-blue-500" multiple>
        </div>

        <div class="mb-4">
            <label for="bio" class="block text-gray-700 font-medium mb-2">Описание</label>
            <textarea id="bio" name="bio" class="w-full p-2 border rounded outline-blue-500" rows="7">{{ old('bio', $car->bio) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="year" class="block text-gray-700 font-medium mb-2">Год выпуска</label>
            <input type="number" id="year" name="year" value="{{ old('year', $car->year) }}" class="w-full p-2 border rounded outline-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="oil" class="block text-gray-700 font-medium mb-2">Топливо</label>
            <select id="oil" name="oil" class="w-full p-2 border rounded outline-blue-500">
                <option value="Бензин" {{ old('oil', $car->oil) == 'Бензин' ? 'selected' : '' }}>Бензин</option>
                <option value="Гибрид" {{ old('oil', $car->oil) == 'Гибрид' ? 'selected' : '' }}>Гибрид</option>
                <option value="Дизель" {{ old('oil', $car->oil) == 'Дизель' ? 'selected' : '' }}>Дизель</option>
                <option value="Электро" {{ old('oil', $car->oil) == 'Электро' ? 'selected' : '' }}>Электро</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="mileage" class="block text-gray-700 font-medium mb-2">Пробег</label>
            <input type="number" id="mileage" name="mileage" value="{{ old('mileage', $car->mileage) }}" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="engine" class="block text-gray-700 font-medium mb-2">Объём двигателя</label>
            <input type="text" id="engine" name="engine" value="{{ old('engine', $car->engine) }}" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="drive" class="block text-gray-700 font-medium mb-2">Привод</label>
            <select id="drive" name="drive" class="w-full p-2 border rounded outline-blue-500">
                <option value="Задний" {{ old('drive', $car->drive) == 'Задний' ? 'selected' : '' }}>Задний</option>
                <option value="Передний" {{ old('drive', $car->drive) == 'Передний' ? 'selected' : '' }}>Передний</option>
                <option value="Полный" {{ old('drive', $car->drive) == 'Полный' ? 'selected' : '' }}>Полный</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 font-medium mb-2">Тип кузова</label>
            <select id="type" name="type" class="w-full p-2 border rounded outline-blue-500">
                <option value="Седан" {{ old('type', $car->type) == 'Седан' ? 'selected' : '' }}>Седан</option>
                <option value="Внедорожник" {{ old('type', $car->type) == 'Внедорожник' ? 'selected' : '' }}>Внедорожник</option>
                <option value="Кроссовер" {{ old('type', $car->type) == 'Кроссовер' ? 'selected' : '' }}>Кроссовер</option>
                <option value="Мини" {{ old('type', $car->type) == 'Мини' ? 'selected' : '' }}>Мини</option>
                <option value="Минивен" {{ old('type', $car->type) == 'Минивен' ? 'selected' : '' }}>Минивен</option>
                <option value="Пикап" {{ old('type', $car->type) == 'Пикап' ? 'selected' : '' }}>Пикап</option>
                <option value="Универсал" {{ old('type', $car->type) == 'Универсал' ? 'selected' : '' }}>Универсал</option>
                <option value="Хэтчбек" {{ old('type', $car->type) == 'Хэтчбек' ? 'selected' : '' }}>Хэтчбек</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="transmission" class="block text-gray-700 font-medium mb-2">Трансмиссия</label>
            <select id="transmission" name="transmission" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="Автомат" {{ old('transmission', $car->transmission) == 'Автомат' ? 'selected' : '' }}>Автомат</option>
                <option value="Механика" {{ old('transmission', $car->transmission) == 'Механика' ? 'selected' : '' }}>Механика</option>
                <option value="Механика/автомат" {{ old('transmission', $car->transmission) == 'Механика/автомат' ? 'selected' : '' }}>Механика/автомат</option>
                <option value="7DCT" {{ old('transmission', $car->transmission) == '7DCT' ? 'selected' : '' }}>7DCT</option>
                <option value="DHT" {{ old('transmission', $car->transmission) == 'DHT' ? 'selected' : '' }}>DHT</option>
                <option value="Вариатор" {{ old('transmission', $car->transmission) == 'Вариатор' ? 'selected' : '' }}>Вариатор</option>
                <option value="Гибридная" {{ old('transmission', $car->transmission) == 'Гибридная' ? 'selected' : '' }}>Гибридная</option>
                <option value="Ркпп" {{ old('transmission', $car->transmission) == 'Ркпп' ? 'selected' : '' }}>Ркпп</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="color" class="block text-gray-700 font-medium mb-2">Цвет</label>
            <select id="color" name="color" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="Белый" {{ old('color', $car->color) == 'Белый' ? 'selected' : '' }}>Белый</option>
                <option value="Черный" {{ old('color', $car->color) == 'Черный' ? 'selected' : '' }}>Черный</option>
                <option value="Серебристый" {{ old('color', $car->color) == 'Серебристый' ? 'selected' : '' }}>Серебристый</option>
                <option value="Красный" {{ old('color', $car->color) == 'Красный' ? 'selected' : '' }}>Красный</option>
                <option value="Синий" {{ old('color', $car->color) == 'Синий' ? 'selected' : '' }}>Синий</option>
                <option value="Зеленый" {{ old('color', $car->color) == 'Зеленый' ? 'selected' : '' }}>Зеленый</option>
                <option value="Желтый" {{ old('color', $car->color) == 'Желтый' ? 'selected' : '' }}>Желтый</option>
                <option value="Оранжевый" {{ old('color', $car->color) == 'Оранжевый' ? 'selected' : '' }}>Оранжевый</option>
                <option value="Другой" {{ old('color', $car->color) == 'Другой' ? 'selected' : '' }}>Другой</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="color" class="block text-gray-700 font-medium mb-2">Страна</label>
            <select id="color" name="country" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="Украина" {{ old('country', $car->country) == 'Украина' ? 'selected' : '' }}>Украина</option>
                <option value="США" {{ old('country', $car->country) == 'США' ? 'selected' : '' }}>США</option>
                <option value="Корея" {{ old('country', $car->country) == 'Корея' ? 'selected' : '' }}>Корея</option>
                <option value="Китай" {{ old('country', $car->country) == 'Китай' ? 'selected' : '' }}>Китай</option>
                <option value="ОАЭ" {{ old('country', $car->country) == 'ОАЭ' ? 'selected' : '' }}>ОАЭ</option>
                
            </select>
        </div>


        <div class="mb-4">
            
            <label for="transmission" class="block text-gray-700 font-medium mb-2 font-medium mb-2">Статус</label>
            <select id="transmission" name="status" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="in_transit" {{ old('status', $car->status) == 'in_transit' ? 'selected' : '' }}>В пути</option>
                <option value="available" {{ old('status', $car->status) == 'available' ? 'selected' : '' }}>В наличии</option>
               
            </select>


        </div>

        <div class="mb-4">
            <label for="vincode" class="block text-gray-700 font-medium mb-2">Ссылка на аукцион</label>
            <input type="text" id="vincode" value="{{ $car->vincode }}" name="vincode" class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="vin" class="block text-gray-700 font-medium mb-2" >VIN код</label>
            <input type="text" id="vin" value="{{ $car->vin }}" name="vin" required class="w-full p-2 border rounded outline-blue-500">
        </div>

        <div class="mb-4">
            <label for="pop" class="block text-gray-700 font-medium mb-2">Выводить это авто в главе "популярное" ?</label>
            <select id="pop" name="rating" class="border border-gray-300 outline-blue-500 rounded-md p-2 w-full">
                <option value="popular" {{ old('is_present', $car->rating) == 'popular' ? 'selected' : '' }}>да</option>
                <option value="regular" {{ old('is_present', $car->rating) == 'popular' ? '' : 'selected' }}>нет</option>
               
            </select>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                Сохранить изменения
            </button>
        </div>

    </form>
</div>
@endsection

