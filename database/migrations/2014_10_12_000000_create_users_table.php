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
            $table->string('password')->nullable();
            $table->string('country')->default('Espanya');
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->SoftDeletes();//para hibernar  y no borrar 100%
            $table->boolean('admin')->default(0);


            $table->bigInteger('update_by')->unsigned()->nullable();;
            $table->bigInteger('created_by')->unsigned()->nullable();;

            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });


        Schema::create('categorias' , function (Blueprint $table) {
            $table->id();
            $table->string('Categoria', 150);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->bigInteger('update_by')->unsigned();
            $table->bigInteger('created_by')->unsigned();
            $table->SoftDeletes();
            
            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });


       



        Schema::create('cuentas' , function (Blueprint $table) {
            $table->id();
            $table->string('cuenta' , 150);
            $table->string('fuc' , 150)->nullable();
            $table->string('clave' , 50)->nullable();
            $table->bigInteger('update_by')->unsigned();
            $table->bigInteger('created_by')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->SoftDeletes();//para hibernar  y no borrar 100%


            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        

        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_usuario')->unsigned();
            $table->bigInteger('id_categoria')->unsigned()->nullable(); 
            $table->bigInteger('id_cuenta')->unsigned()->nullable();
            //$table->bigInteger('id_curso')->unsigned();
            $table->string('nivel', 150);
           // $table->string('comanda', 20);
            $table->string('titol', 150);
            $table->string('descipcio', 150);
            $table->float('preu', 6,2);
            $table->date('data_inici');
            $table->date('data_fi');
            $table->enum("estat" ,['actiu' , 'inactiu']) ->default('actiu');
            $table->bigInteger('created_by')->unsigned();
            $table->bigInteger('update_by')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->SoftDeletes();//para hibernar  y no borrar 100%
            

           // $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('update_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('set null');
            $table->foreign('id_cuenta')->references('id')->on('cuentas')->onDelete('set null');


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
        Schema::dropIfExists('cuentas');
        Schema::dropIfExists('cursos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('users');

        


    }
}
