<?php

use Illuminate\Database\Seeder;

class TercTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = 'database/sql/terc.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('- ' . $path . ' seeded');
    }
}
