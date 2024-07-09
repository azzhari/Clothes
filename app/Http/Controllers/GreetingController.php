<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyClass\CelanaKhaki;
use App\MyClass\CelanaCapri;

use Illuminate\Support\Facades\Log;

class GreetingController extends Controller
{
    public function printGreetings()
    {
        $celanaKhaki = new CelanaKhaki();
        $celanaKhaki->setJenis('Khaki');
        $celanaKhaki->setWarna('Coklat');
        $greetingKhaki = $celanaKhaki->greeting();

        Log::info("Greeting CelanaKhaki: {$greetingKhaki}");

        $celanaCapri = new CelanaCapri();
        $celanaCapri->setJenis('Capri');
        $celanaCapri->setPanjang('Pendek');
        $greetingCapri = $celanaCapri->greeting();

        Log::info("Greeting CelanaCapri: {$greetingCapri}");

        $data = [
            [
                'jenis' => $celanaKhaki->getJenis(),
                'warna' => $celanaKhaki->getWarna(),
                'greeting' => $greetingKhaki,
            ],
            [
                'jenis' => $celanaCapri->getJenis(),
                'panjang' => $celanaCapri->getPanjang(),
                'greeting' => $greetingCapri,
            ],
            [
                'jenis' => 'Jeans',
                'panjang' => 'Panjang',
                'greeting' => 'Ini adalah celana jenis Jeans panjang.',
            ],
        ];

        return response()->json($data);
    }
}
