<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCar8 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_car', function($table)
        {
            $table->boolean('isaccessories')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_car', function($table)
        {
            $table->dropColumn('isaccessories');
        });
    }
}
