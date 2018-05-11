<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellHomerotatebanner extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_homerotatebanner', function($table)
        {
            $table->integer('sorting');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_homerotatebanner', function($table)
        {
            $table->dropColumn('sorting');
        });
    }
}
