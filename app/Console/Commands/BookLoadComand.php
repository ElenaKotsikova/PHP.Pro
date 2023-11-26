<?php

namespace App\Console\Commands;

use App\Models\Book;
use Illuminate\Console\Command;

class BookLoadComand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:book-load-comand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $book =Book::query()->where(['id'=>1])->first();
    }
}
