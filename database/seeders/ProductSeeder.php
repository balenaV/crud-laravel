<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Criando item padrao do banco
        $product = new \App\Models\Product([
            "name" => "Produto #1",
            "detail" => "Produto #1 Detalhes",
        ]);

        $product->save();
    }
}
