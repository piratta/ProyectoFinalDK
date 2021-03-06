<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'country' => Str::random(10),
            'update_by' => 1,
            'created_by' => 1
        ])  ;

        DB::table('categorias')->insert([
            'Categoria' => 'ESO',
            'update_by' => 1,
            'created_by' => 1]);
                     
        DB::table('categorias')->insert( [
        'Categoria' => 'PROFESORAT',
        'update_by' => 1,
        'created_by' => 1]); 

        DB::table('categorias')->insert([
        'Categoria' => 'BATXILLERAT',
        'update_by' => 1,
        'created_by' => 1]);
        
        DB::table('categorias')->insert([
            'Categoria' => 'CICLES FORMATIUS',
            'update_by' => 1,
            'created_by' => 1]);



               
}
}