<?php

use Illuminate\Database\Seeder;

class SimcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            $path = 'database/sql/simc' . $i . '.sql';
            DB::unprepared(file_get_contents($path));
            $this->command->info($path . ' seeded!');
        } 
    }
}
