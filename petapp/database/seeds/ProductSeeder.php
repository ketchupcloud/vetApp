<?php

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
      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 18,
        'category'=> 'Alimentos',
        'description'=> 'Comida deliciosa sabor banana',
        'stock'=> 40,
        'store_id'=>1,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 15,
        'category'=> 'Alimentos',
        'description'=> 'Comida deliciosa sabor banana',
        'stock'=> 40,
        'store_id'=>1,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Coleira',
        'price'=> 20,
        'category'=> 'Acessórios',
        'description'=> 'Coleira tamanho P rosa',
        'stock'=> 5,
        'store_id'=>1,
        'photo' => 'Photo/coleira.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Anti Pulga',
        'price'=> 30,
        'category'=> 'Saúde',
        'description'=> 'Medicina e Saúde 100% indicado',
        'stock'=> 10,
        'store_id'=>2,
        'photo' => 'Photo/antipulga.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Gaiola',
        'price'=> 522,
        'category'=> 'Acessórios',
        'description'=> 'Gaiola grande usada para aves de grande porte',
        'stock'=> 1,
        'store_id'=>2,
        'photo' => 'Photo/gaiola.jpg',
        'animal'=> 'Aves'
      ]);


      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 60,
        'category'=> 'Alimentos',
        'description'=> 'Comida deliciosa sabor sardinha',
        'stock'=> 40,
        'store_id'=>3,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Peixes'
      ]);

      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 50,
        'category'=> 'Acessórios',
        'description'=> 'Comida deliciosa sabor banana',
        'stock'=> 40,
        'store_id'=>4,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Camisa',
        'price'=> 26,
        'category'=> 'Acessórios',
        'description'=> 'Roupa de gato filhote',
        'stock'=> 5,
        'store_id'=>5,
        'photo' => 'Photo/camisa.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Cama',
        'price'=> 11,
        'category'=> 'Acessórios',
        'description'=> 'Cama confortável',
        'stock'=> 4,
        'store_id'=>6,
        'photo' => 'Photo/cama.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Mordedor',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Mordedor flexivel',
        'stock'=> 40,
        'store_id'=>7,
        'photo' => 'Photo/mordedor.jpg',
        'animal'=> 'Cães'
      ]);


      DB::table('products')->insert([
        'name'=> 'Escova de dente',
        'price'=> 90,
        'category'=> 'Higiene',
        'description'=> 'Escova macia',
        'stock'=> 4,
        'store_id'=>8,
        'photo' => 'Photo/escova.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Sapato',
        'price'=> 36,
        'category'=> 'Acessórios',
        'description'=> 'Sapato tamanho 42',
        'stock'=> 10,
        'store_id'=>9,
        'photo' => 'Photo/sapato.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Vitamina',
        'price'=> 48,
        'category'=> 'Saúde',
        'description'=> 'Indicado para filhotes',
        'stock'=> 40,
        'store_id'=>10,
        'photo' => 'Photo/vitamina.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Shampoo',
        'price'=> 90,
        'category'=> 'Higiene',
        'description'=> 'Cheirinho de nenem',
        'stock'=> 40,
        'store_id'=>2,
        'photo' => 'Photo/shampoo.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Comedouro',
        'price'=> 22,
        'category'=> 'Acessórios',
        'description'=> 'Cambuca para colocar a ração',
        'stock'=> 10,
        'store_id'=>10,
        'photo' => 'Photo/comedouro.jpg',
        'animal'=> 'Cães'
      ]);
      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 10,
        'category'=> 'Alimentos',
        'description'=> 'Comida deliciosa sabor banana',
        'stock'=> 40,
        'store_id'=>1,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 10,
        'category'=> 'Alimentos',
        'description'=> 'Comida deliciosa sabor banana',
        'stock'=> 40,
        'store_id'=>1,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Coleira',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Coleira tamanho P rosa',
        'stock'=> 5,
        'store_id'=>1,
        'photo' => 'Photo/coleira.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Anti Pulga',
        'price'=> 10,
        'category'=> 'Saúde',
        'description'=> 'Medicina e Saúde 100% indicado',
        'stock'=> 10,
        'store_id'=>2,
        'photo' => 'Photo/antipulga.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Gaiola',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Gaiola grande usada para aves de grande porte',
        'stock'=> 1,
        'store_id'=>2,
        'photo' => 'Photo/gaiola.jpg',
        'animal'=> 'Aves'
      ]);


      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 10,
        'category'=> 'Alimentos',
        'description'=> 'Comida deliciosa sabor sardinha',
        'stock'=> 40,
        'store_id'=>3,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Peixes'
      ]);

      DB::table('products')->insert([
        'name'=> 'Ração',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Comida deliciosa sabor banana',
        'stock'=> 40,
        'store_id'=>4,
        'photo' => 'Photo/racao.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Camisa',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Roupa de gato filhote',
        'stock'=> 5,
        'store_id'=>5,
        'photo' => 'Photo/camisa.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Cama',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Cama confortável',
        'stock'=> 4,
        'store_id'=>6,
        'photo' => 'Photo/cama.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Mordedor',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Mordedor flexivel',
        'stock'=> 40,
        'store_id'=>7,
        'photo' => 'Photo/mordedor.jpg',
        'animal'=> 'Cães'
      ]);


      DB::table('products')->insert([
        'name'=> 'Escova de dente',
        'price'=> 10,
        'category'=> 'Higiene',
        'description'=> 'Escova macia',
        'stock'=> 4,
        'store_id'=>8,
        'photo' => 'Photo/escova.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Sapato',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Sapato tamanho 42',
        'stock'=> 10,
        'store_id'=>9,
        'photo' => 'Photo/sapato.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Vitamina',
        'price'=> 10,
        'category'=> 'Saúde',
        'description'=> 'Indicado para filhotes',
        'stock'=> 40,
        'store_id'=>10,
        'photo' => 'Photo/vitamina.jpg',
        'animal'=> 'Gatos'
      ]);

      DB::table('products')->insert([
        'name'=> 'Shampoo',
        'price'=> 10,
        'category'=> 'Higiene',
        'description'=> 'Cheirinho de nenem',
        'stock'=> 40,
        'store_id'=>2,
        'photo' => 'Photo/shampoo.jpg',
        'animal'=> 'Cães'
      ]);

      DB::table('products')->insert([
        'name'=> 'Comedouro',
        'price'=> 10,
        'category'=> 'Acessórios',
        'description'=> 'Cambuca para colocar a ração',
        'stock'=> 10,
        'store_id'=>10,
        'photo' => 'Photo/comedouro.jpg',
        'animal'=> 'Cães'
      ]);
    }
}
