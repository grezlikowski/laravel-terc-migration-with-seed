<?php

use Illuminate\Database\Seeder;

class UlicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 27; $i++) {
            $path = 'database/sql/ulic' . $i . '.sql';
            DB::unprepared(file_get_contents($path));
            $this->command->info($path . ' seeded!');
        } 
    }
}
