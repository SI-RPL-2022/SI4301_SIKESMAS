<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\superadmin_model;

class superadmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new superadmin_model;
        $user->username = "superadmin";
        $user->password = "superadmin"; 
        $user->save();
    }
}
