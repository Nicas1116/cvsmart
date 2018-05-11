<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNicasCarsforsellCarcategory extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nicas_carsforsell_carcategory');
    }
    
    public function down()
    {
        Schema::create('nicas_carsforsell_carcategory', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->text('car_category');
            $table->text('car_brand');
            $table->text('car_model');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
