<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCar6 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_car', function($table)
        {
            $table->text('car_price');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_car', function($table)
        {
            $table->dropColumn('car_price');
        });
    }
}
