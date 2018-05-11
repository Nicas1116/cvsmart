<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNicasCarsforsell extends Migration
{
    public function up()
    {
        Schema::create('nicas_carsforsell_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('shortdesc');
            $table->text('longdesc');
            $table->text('slug');
            $table->text('specification');
            $table->text('sellercontact');
            $table->text('disclaimer');
            $table->text('price');
            $table->text('carloaninstallment');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nicas_carsforsell_');
    }
}
