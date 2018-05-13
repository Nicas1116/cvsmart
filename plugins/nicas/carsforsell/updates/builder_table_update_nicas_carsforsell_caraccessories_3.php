<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCaraccessories3 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->text('car_category');
            $table->text('car_states');
            $table->text('car_prices');
            $table->dropColumn('caraccessories_brand');
            $table->dropColumn('caraccessories_states');
            $table->dropColumn('caraccessories_prices');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->dropColumn('car_category');
            $table->dropColumn('car_states');
            $table->dropColumn('car_prices');
            $table->text('caraccessories_brand');
            $table->text('caraccessories_states');
            $table->text('caraccessories_prices');
        });
    }
}
