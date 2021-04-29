<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('country');
            $table->rememberToken();
            $table->timestamps();
            $table->SoftDeletes();//para hibernar  y no borrar 100%
            $table->boolean('admin')->default(0);
            $table->bigInteger('update_by')->unsigned();
            $table->bigInteger('created_by')->unsigned();

            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


            





        });
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('Categoria', 150);
            $table->timestamps();    
            $table->bigInteger('update_by')->unsigned();
            $table->bigInteger('created_by')->unsigned();

            $table->SoftDeletes();//para hibernar  y no borrar 100%
            
            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');




            

            
        });

        Schema::create('cursos' , function (Blueprint $table) {
            $table->id();
            $table->string('curso', 50);
            $table->bigInteger('update_by')->unsigned();
            $table->bigInteger('created_by')->unsigned();
            $table->SoftDeletes();//para hibernar  y no borrar 100%

            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


        });

        Schema::create('cuentas' , function (Blueprint $table) {
            $table->id();
            $table->string('cuenta' , 150);
            $table->string('fuc' , 150);
            $table->string('clave' , 50);
            $table->bigInteger('update_by')->unsigned();
            $table->bigInteger('created_by')->unsigned();

            $table->SoftDeletes();//para hibernar  y no borrar 100%


            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
        

        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_categoria')->unsigned(); 
            $table->bigInteger('id_cuenta')->unsigned();
            $table->bigInteger('id_curso')->unsigned();
            $table->enum('nivel', ['ESO','BAT','CF','PR']);
            $table->string('comanda', 20);
            $table->string('titol', 150);
            $table->string('descipcio', 150);
            $table->float('preu', 6,2);
            $table->date('data_inici');
            $table->date('data_fi');
            $table->enum("estat" ,['actiu' , 'inactiu']) ->default('inactiu');
            $table->bigInteger('created_by')->unsigned();
            $table->bigInteger('update_by')->unsigned();
            $table->SoftDeletes();//para hibernar  y no borrar 100%
            $table->timestamps();

            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cuenta')->references('id')->on('cuentas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

        });


        
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        

        Schema::dropIfExists('pagos');
        Schema::dropIfExists('users');
        Schema::dropIfExists('cuentas');
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('categorias');
        


    }
}
