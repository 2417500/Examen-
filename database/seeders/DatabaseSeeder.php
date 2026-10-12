<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        User::create(['name' => 'Encargado Admin', 'email' => 'admin@escuela.com', 'password' => Hash::make('password'), 'role' => 'encargado']);
        User::create(['name' => 'Estudiante 1', 'email' => 'estudiante@escuela.com', 'password' => Hash::make('password'), 'role' => 'solicitante']);

        $c1 = Category::create(['name' => 'Laptops', 'description' => 'Portátiles']);
        $c2 = Category::create(['name' => 'Proyectores', 'description' => 'Proyectores de video']);

        Equipment::create(['category_id' => $c1->id, 'name' => 'Dell Latitude 3420', 'serial_number' => 'LT-001', 'status' => 'disponible']);
        Equipment::create(['category_id' => $c1->id, 'name' => 'HP ProBook 440', 'serial_number' => 'LT-002', 'status' => 'prestado']);
        Equipment::create(['category_id' => $c2->id, 'name' => 'Epson PowerLite', 'serial_number' => 'PR-001', 'status' => 'disponible']);
    }
}