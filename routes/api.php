<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BMKGController;
use App\Http\Controllers\Api\DataSensorController;
use App\Http\Controllers\Api\SensorApiController;
use App\Models\Sensor;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cuaca', [BMKGController::class, 'index']);

Route::post('/data', [DataSensorController::class, 'get_data']);
// Route::post('/data', function(Request $request){
//     try {
//         Sensor::create([
//             'device_id' => $request->device_id,
//             'temperature' => $request->temperature,
//             'humidity' => $request->humidity,
//         ]);

//         return response()->json([
//             'message' => 'pengiriman berhasil',
//         ]);
//     } catch (\Throwable $th) {
//         return response()->json([
//             'message' => 'pengiriman gagal',
//         ]);
//     }
// });

Route::get('/data', [SensorApiController::class, 'data_sensor'])->name('data_sensor');
