<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCaraccessories4 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->renameColumn('car_prices', 'car_price');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->renameColumn('car_price', 'car_prices');
        });
    }
}
