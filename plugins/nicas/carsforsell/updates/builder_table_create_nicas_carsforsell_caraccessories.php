<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNicasCarsforsellCaraccessories extends Migration
{
    public function up()
    {
        Schema::create('nicas_carsforsell_caraccessories', function($table)
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
            $table->text('carimages');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('caraccessories_brand');
            $table->text('caraccessories_states');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nicas_carsforsell_caraccessories');
    }
}
