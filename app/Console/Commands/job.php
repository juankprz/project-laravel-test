<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Mail\Mailable;

class job extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = [
            "nombre" => "Juan",
            "apellido" => "Perez",
            "hora"=>date("h:i:s"),
        ];

        \Mail::send('vistas.mail', $data, function ($message)  {
            $hola="holaq";
            $message->from('juankprz06@gmail.com', 'Juan');
            $message->to('dayana.romero@cecar.edu.co', 'Dayana')->subject("report");

        });

        $this->info('Mwnsaje enviado');
    }
}
