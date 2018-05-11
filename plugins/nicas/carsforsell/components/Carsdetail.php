<?php namespace Nicas\Carsforsell\Components;

use Cms\Classes\ComponentBase;
use nicas\carsforsell\models\Carsforsell as CarsforsellModel;

class Carsdetail extends ComponentBase
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
        $porfolioModel = CarsforsellModel::where('slug', $newsid)->get();
        
        foreach ($porfolioModel as $carsdetail) {
            //echo json_encode($carsdetail->carimages);
        }
        $this->page['carsdetail'] = $porfolioModel[0];
    }
}
