<?php

use App\Models\Vendedor;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vendedor::class, 1)->create();
    }
}
