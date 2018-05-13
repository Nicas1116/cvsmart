<?php namespace Nicas\Carsforsell\Components;

use Cms\Classes\ComponentBase;
use nicas\carsforsell\models\CarAccessories as CarAccessoriesModel;

class Carsaccessoriesdetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'News Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $newsid = $this->param('slug');
        $porfolioModel = CarAccessoriesModel::where('slug', $newsid)->get();
        
        foreach ($porfolioModel as $carsdetail) {
            //echo json_encode($carsdetail->carimages);
        }
        $this->page['carsdetail'] = $porfolioModel[0];
    }
}
