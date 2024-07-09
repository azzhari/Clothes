<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\MyClass\CelanaKhaki;
use App\MyClass\CelanaCapri;


class PrintGreetingsCommand extends Command
{
    protected $signature = 'greetings:print';

    protected $description = 'Print greetings from CelanaKhaki and CelanaCapri classes';

    public function handle()
    {
        $celanaKhaki = new CelanaKhaki();
        $celanaKhaki->setJenis('Khaki');
        $celanaKhaki->setWarna('Coklat');
        $greetingKhaki = $celanaKhaki->greeting();

        $celanaCapri = new CelanaCapri();
        $celanaCapri->setJenis('Capri');
        $celanaCapri->setPanjang('Pendek');
        $greetingCapri = $celanaCapri->greeting();

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

        $this->info(json_encode($data, JSON_PRETTY_PRINT));
    }
}
