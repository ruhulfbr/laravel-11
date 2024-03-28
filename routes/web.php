<?php

use App\Http\Controllers\ProductController;
use App\Models\User;
use http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // Retrying Asynchronous Request
//    $conversations = Http::pool(fn(Pool $pool) => [
//        $pool->as('GBP')->retry(3)->get('http://flaky.test/api/conversion/GBP'),
//        $pool->as('USD')->retry(3)->get('http://flaky.test/api/conversion/USD'),
//        $pool->as('EUR')->retry(3)->get('http://flaky.test/api/conversion/EUR')
//    ]);
//
//    return collect($conversations) - map(fn(Response $response) => $response->body());


    // $users = User::with('latestPosts')->latest('id')->limit(5)->get();
    // dd($users->toArray());
    // str("Hello")->append(' world')->dd()->apa();

//    dump(generateUUID());
//    dump(generateUUID());
//    dump(generateUUID());
//    dump(generateUUID());
//    dd(generateUUID());

    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products/create', [ProductController::class, 'store']);


function generateUUID(): string
{
    return once(fn() => \Str::uuid());
}
