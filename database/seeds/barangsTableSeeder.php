<?php

use Illuminate\Database\Seeder;

class barangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert(array(['nama'=>'Meja','id_kategori'=>'1','qty'=>'12','harga_beli'=>'50000','harga_jual'=>'54000',],['nama'=>'Kursi','id_kategori'=>'1','qty'=>'12','harga_beli'=>'40000','harga_jual'=>'45000',]));

    }
}
