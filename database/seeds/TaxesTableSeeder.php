<?php

use Illuminate\Database\Seeder;
use App\taxes;

class TaxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taxes')->truncate();
        $tax = new Taxes();
        $tax->name = '15';
        $tax->save();

        $tax = new Taxes();
        $tax->name = 'fotografia';
        $tax->save();

        $tax = new Taxes();
        $tax->name = 'telefonia';
        $tax->save();
 
        $tax = new Taxes();
        $tax->name = 'ocio';
        $tax->save();

        $tax = new Taxes();
        $tax->name = 'television';
        $tax->save();

        $tax = new Taxes();
        $tax->name = 'accesorios';
        $tax->save();
    }
}
