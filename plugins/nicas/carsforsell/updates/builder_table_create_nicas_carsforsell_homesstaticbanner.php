<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNicasCarsforsellHomesstaticbanner extends Migration
{
    public function up()
    {
        Schema::create('nicas_carsforsell_homesstaticbanner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('link');
            $table->text('staticimage');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nicas_carsforsell_homesstaticbanner');
    }
}
