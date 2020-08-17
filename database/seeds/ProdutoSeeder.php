<?php
use App\Models\ModelLoja;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ModelLoja::class, 2)->create();
    }
}
