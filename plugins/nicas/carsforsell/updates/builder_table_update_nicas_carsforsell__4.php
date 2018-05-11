<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsell4 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->boolean('is_at_home');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->dropColumn('is_at_home');
        });
    }
}
