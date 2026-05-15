<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "User",
            "email" => "User@exemple.com"
        ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            "name" => "Admin",
            "email" => "Admin@exemple.com"
        ])->assignRole(RolesEnum::Admin->value);

        User::factory()->create([
            "name" => "Vendor",
            "email" => "Vendor@exemple.com"
        ])->assignRole(RolesEnum::Vendor->value);

    }
}
