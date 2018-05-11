<?php namespace Nicas\Carsforsell\Components;
use Input;
use Cms\Classes\ComponentBase;
use nicas\carsforsell\models\HomeStaticBanner as HomeStaticBannerModel;


class StaticBannerList extends ComponentBase
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
    $porfolioModel = HomeStaticBannerModel::orderBy('id')->get();
      $this->page['homestaticbanner'] = $porfolioModel->toArray();
    }
}
