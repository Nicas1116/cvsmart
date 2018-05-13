<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCaraccessories extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->text('caraccessories_prices');
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->dropColumn('caraccessories_prices');
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
