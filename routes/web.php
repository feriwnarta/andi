<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Models\JadwalPelets;
use Carbon\Carbon;




Route::post("/sensor", function (Request $request) {
    $suhu = $request->get("suhu");
    $ph = $request->get("ph");
    $turbidity = $request->get("turbidity");
    $tds = $request->get("tds");

    // Mencari atau membuat data sensor
    $sensor = Sensor::first();

    if (is_null($sensor)) {
        $sensor = new Sensor();
        $sensor->temperature = $suhu;
        $sensor->ph = $ph;
        $sensor->turbidity = $turbidity;
        $sensor->tds = $tds;
        $sensor->save();
    } else {
        $sensor->temperature = $suhu;
        $sensor->ph = $ph;
        $sensor->turbidity = $turbidity;
        $sensor->tds = $tds;
        $sensor->save();
    }

    // Mengambil jam server saat ini
    $currentHour = Carbon::now('Asia/Jakarta')->format('H:i');

    // Mengecek tabel jadwal_pelets
    $exists = \App\Models\jadwal_pelet::where('jam', $currentHour)->exists();

    // Cek apakah waktu_kasih_makan sudah pernah true dalam 1 menit terakhir
    // Menggunakan cache untuk menyimpan status
    $key = 'waktu_kasih_makan_true';

    // jika sudah pernah true dan tidak ada dalam periode waktu 1 menit, kembalikan false
    if (\Illuminate\Support\Facades\Cache::has($key)) {
        $waktuKasihMakan = false; // sebelumnya sudah true
    } else {
        $waktuKasihMakan = $exists; // ambil dari jadwal

        // Jika hasilnya true, simpan dalam cache selama 1 menit
        if ($waktuKasihMakan) {
            \Illuminate\Support\Facades\Cache::put($key, true, 60); // simpan status selama 60 detik
        }
    }

    // Mengembalikan response
    return response()->json([
        'message' => "Data terkirim ke server",
        'waktu_kasih_makan' => $waktuKasihMakan
    ]);
});




Route::get('/monitoring', \App\Livewire\Monitoring::class)->name("monitoring");
Route::get("/home", \App\Livewire\Home::class)->name("home");
