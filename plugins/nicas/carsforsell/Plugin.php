<?php namespace Nicas\Carsforsell;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Nicas\Carsforsell\Components\Carsaccessoriesdetail' => 'Carsaccessoriesdetail',
            'Nicas\Carsforsell\Components\Carsdetail' => 'Carsdetail',
            'Nicas\Carsforsell\Components\CarsforsellList' => 'CarsforsellList',
            'Nicas\Carsforsell\Components\Carshome' => 'Carshome',
            'Nicas\Carsforsell\Components\StaticBannerList' => 'StaticBannerList',
            'Nicas\Carsforsell\Components\YoutubeLinkList' => 'YoutubeLinkList',
            'Nicas\Carsforsell\Components\HomeRotateBannerList' => 'HomeRotateBannerList',
        ];
    }

    public function registerSettings()
    {
    }
}
