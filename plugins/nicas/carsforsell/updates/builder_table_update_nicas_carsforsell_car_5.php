<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCar5 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_car', function($table)
        {
            $table->text('car_accessories');
            $table->dropColumn('car_brand');
            $table->dropColumn('car_model');
            $table->dropColumn('car_category_id');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_car', function($table)
        {
            $table->dropColumn('car_accessories');
            $table->text('car_brand');
            $table->text('car_model');
            $table->bigInteger('car_category_id');
        });
    }
}
