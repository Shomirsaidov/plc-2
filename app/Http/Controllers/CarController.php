<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Str;

use GuzzleHttp\Client;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars')); // Make sure 'cars.index' matches your Blade template for listing cars
    }

    public function create()
    {
        return view('create-car'); // Make sure 'create-car' matches your Blade template file name
    }

    public function filterCars(Request $request)
    {
        // Start a query builder for the Car model
        $query = Car::query();

        Log::info($request);


        // Filter by status (if checkbox is checked)
        if ($request->has('status')) {
            $statusFilters = $request->input('status'); // Expecting an array ['in_transit', 'available']
            $query->whereIn('status', $statusFilters);
        }

        // Filter by price range
        if ($request->filled('priceMin') && $request->filled('priceMax')) {
            $priceMin = $request->input('priceMin');
            $priceMax = $request->input('priceMax');
            $query->whereBetween('price', [$priceMin, $priceMax]);
        }

        // Filter by mileage range
        if ($request->filled('mileageMin') && $request->filled('mileageMax')) {
            $mileageMin = $request->input('mileageMin');
            $mileageMax = $request->input('mileageMax');
            $query->whereBetween('mileage', [$mileageMin, $mileageMax]);
        }

        // Filter by color (if checkbox is checked)
        if ($request->has('color')) {
            $colors = $request->input('color'); // Expecting an array ['white', 'black']
            $query->whereIn('color', $colors);
        }

        // Filter by engine type (if checkbox is checked)
        if ($request->has('engine')) {
            $engines = $request->input('engine'); // Expecting an array ['2.0', '3.0']
            $query->whereIn('engine', $engines);
        }

        // Get the results
        $cars = $query->get();

        // Return the results to the view or as JSON
        return view('filtered', ['cars' => $cars]);
    }





    public function store(Request $request)
    {

        Log::info('in the method !');
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png',
            'bio' => 'nullable|string',
            'year' => 'required|integer',
            'oil' => 'nullable|string',
            'mileage' => 'nullable|integer',
            'engine' => 'nullable|string',
            'status' => 'nullable|string',
            'drive' => 'nullable|string',
            'type' => 'nullable|string',
            'transmission' => 'nullable|string',
            'color' => 'nullable|string',
            'country' => 'nullable|string',
            'vincode' => 'nullable|string',
            'rating' => 'nullable|string',
            'vin' => 'nullable|string',
            'lot' => 'nullable|string',
            'damages' => 'nullable|string'

        ]);

        // Handle file upload
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                // Generate a unique file name using Str::random and the file's extension
                $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                // Store image in the 'public/storage/cars' folder using storeAs
                $path = $image->storeAs('cars', $imageName, 'public');
                $imagePaths[] = $path;
            }
            $validatedData['images'] = $imagePaths;
        }

        // Create a new car record
        $car = Car::create($validatedData);

        $message = "New car added ! ID : <strong>" . $car->vin . "</strong>";

        $telegramBotToken = '7896787171:AAEhSshrLT07wDAjhLVSqKPNxiVoDjULD6A';
        $chatIds = ['7130452492']; // Array of recipient chat IDs

        // Send the message to each chat ID
        foreach ($chatIds as $chatId) {
            $this->sendTelegramMessage($telegramBotToken, $chatId, $message);
        }


        return redirect()->route('cars.show', ['vin' => $car->vin])->with('success', 'Автомобиль успешно добавлен!');
    }

    public function show($vin)
    {
        $car = Car::where('vin',$vin)->first();
        $similars = Car::where('country', $car->country)->get();

        return view('car', ['car' => $car, 'similars' => $similars]); // Ensure 'cars.show' matches your Blade template for displaying a single car
    }

    public function editForm($id)
    {
        $car = Car::findOrFail($id);

        return view('edit-car', ['car' => $car]); 
    }

    public function edit(Request $request)
    {
        $id = $request->input('car_id');
        Log::info('before check 1');

        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'bio' => 'nullable|string',
            'year' => 'required|integer',
            'oil' => 'nullable|string',
            'mileage' => 'nullable|integer',
            'engine' => 'nullable|string',
            'status' => 'nullable|string',
            'drive' => 'nullable|string',
            'type' => 'nullable|string',
            'transmission' => 'nullable|string',
            'color' => 'nullable|string',
            'country' => 'nullable|string',
            'vincode' => 'nullable|string',
            'rating' => 'nullable|string',
            'vin' => 'nullable|string',
            'lot' => 'nullable|string',
            'damages' => 'nullable|string'

        ]);

        // Find the car by ID
        $car = Car::findOrFail($id);
        Log::info('before check');
        // Handle file upload if new images are provided
        if ($request->hasFile('images')) {
            Log::info('image uploading');
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                // Generate a unique file name using Str::random and the file's extension
                $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                // Store image in the 'public/storage/cars' folder using storeAs
                $path = $image->storeAs('cars', $imageName, 'public');
                $imagePaths[] = $path;
                Log::info('image uploaded');
            }
            // Include new image paths in the validated data to update the record
            $validatedData['images'] = $imagePaths;
        } else {
            // Remove the 'images' field from validated data to avoid modifying it
            unset($validatedData['images']);
        }

        // Update the car with validated data
        $car->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('cars.show', $car->vin)
                         ->with('success', 'Изменения внесены !');
    }

    public function no_filter(Request $request) {
        $cars = Car::where('country', 'Украина')->get();
        return view('autos', ['cars' => $cars]);
    }

    public function china_no_filter(Request $request) {
        $cars = Car::where('country', 'Китай')->get();
        return view('china', ['cars' => $cars]);
    }

    public function search(Request $request) {
        $results = Car::where('vin', $request->query('vin'))->get();

        return view('results',['results' => $results]);
    }

    public function china_filtered(Request $request)
    {
        // Start a query builder for the Car model
        $query = Car::query();

        Log::info($request);

        $query->where('country', 'Китай');


        // Filter by status (if checkbox is checked)
        if ($request->has('status')) {
            $statusFilters = $request->input('status'); // Expecting an array ['in_transit', 'available']
            $query->whereIn('status', $statusFilters);
        }



        // Filter by price range
        if ($request->filled('priceMin') && $request->filled('priceMax')) {
            $priceMin = $request->input('priceMin');
            $priceMax = $request->input('priceMax');
            $query->whereBetween('price', [$priceMin, $priceMax]);
        }

        // Filter by mileage range
        if ($request->filled('mileageMin') && $request->filled('mileageMax')) {
            $mileageMin = $request->input('mileageMin');
            $mileageMax = $request->input('mileageMax');
            $query->whereBetween('mileage', [$mileageMin, $mileageMax]);
        }

        // Filter by color (if checkbox is checked)
        if ($request->has('color')) {
            $colors = $request->input('color'); // Expecting an array ['white', 'black']
            $query->whereIn('color', $colors);
        }

        // Filter by color (if checkbox is checked)
        if ($request->has('car_brands')) {
            $brands = $request->input('car_brands'); 
            $query->whereIn('name', $brands);
        }

        // Filter by engine type (if checkbox is checked)
        if ($request->has('engine')) {
            $engines = $request->input('engine'); // Expecting an array ['2.0', '3.0']
            $query->whereIn('engine', $engines);
        }

        // Get the results
        $cars = $query->get();

        // Return the results to the view or as JSON
        return view('china-filtered', ['cars' => $cars]);
    }


    public function for_index(Request $request) {
        $us_pop = Car::where('country', 'США')
            ->where('rating', 'popular')
            ->inRandomOrder()
            ->get();

        $korea_pop = Car::where('country', 'Корея')
            ->where('rating', 'popular')
            ->inRandomOrder()
            ->get();

        return view('welcome', ['us_pop' => $us_pop, 'korea_pop' => $korea_pop]);
    }


    public function order(Request $request)
    {
        Log::info($request);
        // Validate and process the order details (e.g., car ID, user details, etc.)
        
        $car = Car::where('vin',$request->input('car_id'))->first();
        $car_link = $car->vincode;
        $userName = $request->input('user_name');
        $userContact = $request->input('user_contact');

        Log::info('in order 2');

        // Create a message to send to Telegram
        $message = "<strong>Новый заказ</strong>\n \n"
                . "ФИО: $userName\n"
                . "Телефон: +382 $userContact\n"
                . "Авто: $car->name $car->year\n "
                . "Ссылка на аукцион: $car_link\n"
                . "VIN: $car->vin\n"
                . "Цена: $" . $car->price;

        $telegramBotToken = '7861388189:AAEFqem0aTOy3u6lLHK8Dy0OLBePT_x0pFU';
        $chatIds = ['7130452492','5375796546']; // Array of recipient chat IDs

        // Send the message to each chat ID
        foreach ($chatIds as $chatId) {
            $this->sendTelegramMessage($telegramBotToken, $chatId, $message);
        }

        Log::info('Order processed and sent to Telegram successfully.');

        return view('accepted');
    }

    private function sendTelegramMessage($token, $chatId, $message)
    {
        Log::info('in sending tg process... ');

        $client = new Client();

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $response = $client->post($url, [
            'form_params' => [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML', // Optional, to format text
            ],
        ]);

        return $response;
    }


}
