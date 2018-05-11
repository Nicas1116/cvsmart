<?php namespace Nicas\Carsforsell\Components;

use Cms\Classes\ComponentBase;
use nicas\carsforsell\models\Carsforsell as CarsforsellModel;


class Carshome extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Newshome Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
      $showonhomepage = 1;
      $porfolioModel = CarsforsellModel::orderBy('id')->where('is_at_home',$showonhomepage)->get();
      $car_brands = array();
    $car_models = array();
    $car_states = array();
     $car_prices = array();
     $car_categories = array();
    $ms=0;
      foreach ($porfolioModel as $key => $value) {
          if( $value["car_brand"]!=""){
                $notfound=true;
                foreach ($car_brands as $key => $car_brandsvalue) {
                    if($car_brandsvalue == $value["car_brand"]){
                        $notfound=false;
                    }
                }
                if($notfound){
                     $car_brands[]= $value["car_brand"];
                }
            }
            if( $value["car_model"]!=""){
            /*$car_model[$ms]["brand"]= $value["car_brand"];
            $car_model[$ms]["model"]= $value["car_model"];
            $ms++;*/
            $car_models[] = $value["car_model"];
            }
            if( $value["car_states"]!=""){
                $notfound=true;
                foreach ($car_states as $key => $car_statesvalue) {
                    if($car_statesvalue == $value["car_states"]){
                        $notfound=false;
                    }
                }
                if($notfound){
                      $car_states[]= $value["car_states"];
                }
            }
            if( $value["car_category"]!=""){
                $notfound=true;
                foreach ($car_categories as $key => $car_categoriesvalue) {
                    if($car_categoriesvalue == $value["car_category"]){
                        $notfound=false;
                    }
                }
                if($notfound){
                      $car_categories[]= $value["car_category"];
                }
            }
      }
       $car_prices[] = "30000-50000";
       $car_prices[] = "50001-100000";
       $car_prices[] = "100000++";
       
      $this->page['car_brandlist'] = $car_brands;
       $this->page['car_statelist'] = $car_states;
       $this->page['car_pricelist'] = $car_prices;
       $this->page['car_categorieslist'] = $car_categories;
       $this->page['car_modellist'] = $car_models;
      $this->page['carsforlisthome'] = $porfolioModel->toArray();
    }
}
