<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\BirthdayMailable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio de correo de felíz cumpleaños';

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
     * @return int
     */
    public function handle()
    {
        $users =  User::whereHas('profile', function ($query) {
            return $query->whereMonth('birthday',date('m'))
                        ->whereDay('birthday', date('d'));
        })
        ->get();

        foreach ($users as $user) {
            
            Mail::to($user)->send(new BirthdayMailable($user));
        }

        return 0;
    }
}
