<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = RoleEnum::cases();

        foreach ($roles as $role) {
            Role::create(['name' => $role->value]);
        }

        $developer = User::factory()->create([
            'name' => 'Developer',
            'email' => 'developer@test.com',
        ]);
        $developer->assignRole(RoleEnum::DEVELOPER->value);

        $agent = User::factory()->create([
            'name' => 'Agent',
            'email' => 'agent@test.com',
        ]);
        $agent->assignRole(RoleEnum::AGENT->value);
    }
}
