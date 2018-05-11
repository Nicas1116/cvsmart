<?php namespace Nicas\Carsforsell\Components;

use Input;

use Cms\Classes\ComponentBase;

use nicas\carsforsell\models\HomeRotateBanner as HomeRotateBannerModel;





class HomeRotateBannerList extends ComponentBase

{

    public function componentDetails()

    {

        return [

            'name'        => 'Newslist Component',

            'description' => 'No description provided yet...'

        ];

    }



    public function defineProperties()

    {

        return [];

    }



    public function onRun()

    {

    $porfolioModel = HomeRotateBannerModel::orderBy('sorting')->get();

      $this->page['homerotatebanner'] = $porfolioModel->toArray();

    }

}

