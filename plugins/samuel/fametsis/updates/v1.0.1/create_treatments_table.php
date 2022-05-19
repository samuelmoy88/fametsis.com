<?php namespace Samuel\Fametsis\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateTreatmentsTable extends Migration
{
    public function up()
    {
        Schema::create('samuel_fametsis_treatments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('excerpt', 100)->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('state')->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('samuel_fametsis_treatments');
    }
}
