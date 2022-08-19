<?php

namespace App\Models;

use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasFactory, HasDatabase, HasDomains;

    public static function booted()
    {
        static::creating(function ($tenant) {

            # hash pwd
            $tenant->password = bcrypt($tenant->password);
        });
    }
}

/* App\Models\Tenant::all()->runForEach(function () {App\Models\User::factory()->create(['name'=>'User', 'email'=>'user@gmail.com', 'password' => bcrypt('jason123')]); })

App\Models\Tenant::all()->runForEach(function () {
    App\Models\User::factory()->create(['name' => 'User', 'email' => 'user@gmail.com', 'password' => bcrypt('jason123')]);
}); */