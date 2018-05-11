<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsell7 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->text('car_brand');
            $table->text('car_category');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->dropColumn('car_brand');
            $table->dropColumn('car_category');
        });
    }
}
