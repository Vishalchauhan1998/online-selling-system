<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class adduser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:user';

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
        User::insert([ 
			'name' => 'yash',
			'email'=>'yash@gmail.com',
			'password'=>'12345678']);
    }
}
