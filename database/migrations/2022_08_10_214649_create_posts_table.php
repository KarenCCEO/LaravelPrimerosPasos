
<?php
//migracion creada con el comando php artisan make:migration create_posts_table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //EL NOMBRE DE LA TABLA TIENE QUE SER EN PRURAL 
        //En la tabla migration tenemos el registro de las migraciones ejecutadas 
        //Las migraciones nos sirven para editar tambien la estructura de cualquier tabla 
        //php artisan migrate:rollback

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255);
            $table->string("slug", 255);
            $table->text("content");
            $table->string("image");
            $table->enum("posted", ['yes','not']);
            $table->timestamps();
            /*añadiendo llave foranea */
            $table->foreignId('categoria_id')->constrained()->onDeleted('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
