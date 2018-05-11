<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsell5 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->text('homepagebanner');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->dropColumn('homepagebanner');
        });
    }
}
