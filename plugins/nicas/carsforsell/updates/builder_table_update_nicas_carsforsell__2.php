<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsell2 extends Migration
{
    public function up()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('carimages')->change();
        });
    }
    
    public function down()
    {
        Schema::table('nicas_carsforsell_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('carimages', 191)->change();
        });
    }
}
