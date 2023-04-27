<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = new Admin();
       $admins->firstname = "essam";
       $admins->lastname = "sa";
       $admins->email = "essss@e.com";
       $admins->password = Hash::make("123456");
       $admins->mobile = "1234567890";
       $admins->gender = 'male';
       $admins->status = 'active';

       $isSaved = $admins->save();
    }
}
