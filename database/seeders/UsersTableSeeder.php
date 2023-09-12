<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Log;
use Illuminate\Support\Facades\Artisan;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        
        $data = [
            ['name' => 'Pramana Yuda Sayeti', 'username' => 'yudapramana', 'email' => 'pramanayuda772@gmail.com', 'password' => Hash::make('1000kali'), 'plain_password' => '1000kali', 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Kepala Kantor', 'username' => 'kakankemenag', 'email' => 'kakankemenagpessel@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 2, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Afnizon', 'username' => 'adminafnizon', 'email' => 'afnizon@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Heru Syafri', 'username' => 'herusyafri', 'email' => 'herusyafri@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Dewi Martaliza', 'username' => 'dewimartaliza', 'email' => 'dewimartaliza@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Upik Mike', 'username' => 'upikmike', 'email' => 'upikmike@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Afrison', 'username' => 'afrison', 'email' => 'afrison@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Sarifah Aini', 'username' => 'sarifahaini', 'email' => 'sarifahaini@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Usri', 'username' => 'usri', 'email' => 'usri@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Meiriza Lidya', 'username' => 'meirizalidya', 'email' => 'meirizalidya@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Dedi Gustiawan', 'username' => 'dedigustiawan', 'email' => 'dedigustiawan@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        
            ['name' => 'Azka Juanda', 'username' => 'azkajuanda', 'email' => 'azkajuanda@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Afrinozayenti', 'username' => 'afrinozayenti', 'email' => 'afrinozayenti@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Luthfi Al Paraby', 'username' => 'luthfialparaby', 'email' => 'luthfialparaby@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Mardiyana', 'username' => 'mardiyana', 'email' => 'mardiyana@kemenag.go.id', 'password' => Hash::make('12345678'), 'plain_password' => '12345678', 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
        
        
        ];


        foreach ($data as $key => $item) {
            \App\Models\User::firstOrCreate(
                ['username' => $item['username']],
                $item
            );
        }

        
    }
}
