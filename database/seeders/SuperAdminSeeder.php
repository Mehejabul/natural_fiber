<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = [
            ['id'=>'1','name'=>'WAAW','email'=>'superadmin@gmail.com','phone'=>'017','type'=>'Admin','status'=>'Active','designation_id'=>'0','address'=>'abc','password'=>'$2y$10$7MoHhANxFYCYBRPI.kpTm.SmlyfOXLWhazIOuAbBrMFvtr/d1MPzm'],
            ['id'=>'2','name'=>'ADMIN','email'=>'admin@gmail.com','phone'=>'018','type'=>'Admin','status'=>'Active','designation_id'=>'1','address'=>'abc','password'=>'$2y$10$zlxJUt.sadyhCCOCTguwr.JQukfmAS.4f..vHrYprRpmbFilR9Wga']
        ];
        User::insert($superAdmin);
    }
}
