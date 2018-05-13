<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCaraccessories2 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->text('carlist_image');
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_caraccessories', function($table)
        {
            $table->dropColumn('carlist_image');
        });
    }
}
