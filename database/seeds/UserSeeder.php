<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $mul_rows= [
            [  'name'=>'ram',
               'email'=>'ramgahalout@gmail.com',
               'password'=>Hash::make('12345')],

            [  'name'=>'ansh',
               'email'=>'ansh@gmail.com',
               'password'=>Hash::make('12345')],
        ];
        
        foreach ($mul_rows as $rows) {
           //$insert = DB::table('departments')->insert($mul_rows); old
           $insert= DB::table('users')->insert($rows);
        if($insert){
        //success message here
        }else{
        //Failure message here
        }
        }

    }
}
