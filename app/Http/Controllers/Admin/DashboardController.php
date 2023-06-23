<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function fetchData(Request $request)
    {
        try {
            $sensorTabel = Sensor::orderByDesc('created_at')->take(5)->get();

            if($sensorTabel->count() > 0){// Ubah data ke format yang sesuai dengan kebutuhan, misalnya:
                $data = $sensorTabel->map(function ($item) {
                    return [
                        'tanggal' => \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y'),
                        'temperature' => $item->temperature,
                        'humidity' => $item->humidity,
                        'device' => $item->device->name,
                        'status' => $item->device->status,
                        'statusColor' => $item->device->status == 'active' ? 'sky-500' : ($item->device->status == 'maintenance' ? 'yellow-300' : 'red-500')
                    ];
                });

                // ambil data rekap
                $data_rekap = [
                    'temperature' => Sensor::latest()->pluck('temperature')->first(),
                    'humidity' => Sensor::latest()->pluck('humidity')->first(),
                ];

            } else {
                $data = null;
                $data_rekap = null;
                // $dataSensor = null;
            }

            return response()->json([
                'success' => true,
                'data' => $data,
                'data_rekap' => $data_rekap,
                // 'sensor' => $dataSensor,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'data' => null,
                'data_rekap' => null,
                // 'sensor' => null,
            ]);
        }
    }
}
