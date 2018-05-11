<?php namespace Nicas\Carsforsell\Models;
use nicas\carsforsell\models\CarCategory as CarCategoryModel;
use Model;

/**
 * Model
 */
class Carsforsell extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public function getCarCategoryOptions($value, $formData)
    {  
        $porfolioModel = CarCategory::orderBy('id')->get();
        $m=array();
        foreach ($porfolioModel as $key => $value) {

            $m[$value["car_category"]] = $value["car_category"];
        }
        return $m;
    }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nicas_carsforsell_car';

    protected $jsonable = ['carimages'];
}
