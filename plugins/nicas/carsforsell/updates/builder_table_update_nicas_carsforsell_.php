<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsell extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->string('carimages');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->dropColumn('carimages');
        });
    }
}
