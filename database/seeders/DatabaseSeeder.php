<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
  public function run(): void
{
    // panggil seeder admin
    $this->call(AdminSeeder::class);

    // optional: user dummy (boleh dihapus kalau tidak perlu)
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);
}

}
