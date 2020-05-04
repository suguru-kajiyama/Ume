<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    protected $table = 'shops';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::truncate($this->table);
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->int('category_id');
            $table->int('user_id');
            $table->string('adress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
