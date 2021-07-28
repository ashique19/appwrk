<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class transactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('transactions')->insert([
            [
                'transaction_date' => \Carbon\Carbon::parse('02/17/2020'),
                'description' => 'Credited to Office Account ',
                'credit' => 5000,
                'debit' => 0,
                'running_balance' => 5000,
            ],
            [
                'transaction_date' => \Carbon\Carbon::parse('02/18/2020'),
                'description' => 'Snacks Party',
                'credit' => 0,
                'debit' => 500,
                'running_balance' => 4500,
            ],
            [
                'transaction_date' => \Carbon\Carbon::parse('02/18/2020'),
                'description' => 'Printing sheets for office documents',
                'credit' => 0,
                'debit' => 285,
                'running_balance' => 4215,
            ],
            [
                'transaction_date' => \Carbon\Carbon::parse('02/20/2020'),
                'description' => 'Misc Expenses',
                'credit' => 0,
                'debit' => 3000,
                'running_balance' => 1215,
            ],
        ]);

    }
}
