<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RemindersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reminders')->insert([
            [
                'reminder' => 'Type Something',
            ]
        ]);
    }
}
