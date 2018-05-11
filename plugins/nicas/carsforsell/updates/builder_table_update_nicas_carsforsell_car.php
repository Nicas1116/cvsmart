<?php namespace Nicas\Carsforsell\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNicasCarsforsellCar extends Migration
{
    public function up()
    {
        Schema::rename('nicas_carsforsell_', 'nicas_carsforsell_car');
    }
    
    public function down()
    {
        Schema::rename('nicas_carsforsell_car', 'nicas_carsforsell_');
    }
}
