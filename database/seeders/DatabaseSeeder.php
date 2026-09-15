<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Product;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            ['id' => 1, 'name' => 'Televisor', 'reference' => '100-342', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Nevera', 'reference' => '100-343', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Microondas', 'reference' => '100-344', 'created_at' => now(), 'updated_at' => now()]
        ]);

        Client::insert([
            ['id' => 1, 'name' => 'Pedro', 'last_name' => 'Perez', 'identification' => '12345612', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Juan', 'last_name' => 'Sanchez', 'identification' => '99888773', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Maria', 'last_name' => 'Torres', 'identification' => '20014032', 'created_at' => now(), 'updated_at' => now()]
        ]);

        Order::insert([
            ['id' => 1, 'client_id' => 1, 'product_id' => 1, 'quantity' => 10, 'total' => 15000000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'client_id' => 2, 'product_id' => 1, 'quantity' => 2, 'total' => 3000000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'client_id' => 2, 'product_id' => 3, 'quantity' => 5, 'total' => 2500000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'client_id' => 3, 'product_id' => 1, 'quantity' => 6, 'total' => 9000000, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'client_id' => 3, 'product_id' => 2, 'quantity' => 5, 'total' => 15000000, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
