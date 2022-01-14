<?php

use Illuminate\Database\Seeder;

class TabelPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_paket')->insert(array(
            array(
                'id' => 1,
                'nama' => 'Basic',
                'harga' => '50000',
                'durasi' => '1',
            ),
            array(
                'id' => 2,
                'nama' => 'Bronze',
                'harga' => '130000',
                'durasi' => '3',
            ),
            array(
                'id' => 3,
                'nama' => 'Platinum',
                'harga' => '250000',
                'durasi' => '6',
            )
        ));
    }
}
