<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCaraccessories5 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->boolean('isaccessories')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->dropColumn('isaccessories');
        });
    }
}
