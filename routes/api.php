<?php

use App\Http\Controllers\API\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Mail\NewSubscriberNotification;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['prefix' => 'posts','middleware' => 'auth:sanctum'], function() {
    Route::post('add', [PostsController::class,'add']);
    Route::post('update/{id}', [PostsController::class,'update']);
    Route::get('edit/{id}', [PostsController::class,'edit']);
    Route::delete('delete/{id}', [PostsController::class,'delete']);
});

Route::get('/posts', [PostsController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/subscribers', function () {
        $subscribers = Subscriber::all();
        return response()->json($subscribers);
    });
});

Route::post('/send-message', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    $name = $request->input('name');
    $email = $request->input('email');
    $messageContent = $request->input('message');

    Mail::to('sofiene.laouini@esprit.tn')->send(new SendMessage($name, $email, $messageContent));

    return response()->json(['message' => 'Email sent successfully.']);

});

Route::post('/subscribe', function (Request $request) {
    $request->validate([
        'email' => 'required|email|max:255|unique:subscribers,email',
    ]);

    $email = $request->input('email');
    Subscriber::create(['email' => $email]);

    // Send an email notification to the admin
    $adminEmail = 'sofiene.laouini@esprit.tn'; // Change this to the actual admin email address
    Mail::to($adminEmail)->send(new NewSubscriberNotification($email));

    return response()->json(['message' => 'Successfully subscribed.']);
});