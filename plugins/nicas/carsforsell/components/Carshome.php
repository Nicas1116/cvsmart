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
      $allCarModel = CarsforsellModel::orderBy('id')->get();
      $car_states = array();
      $car_prices = array();
      $car_category = array();
      $car_accessories = array();
      $ms=0;

      foreach ($allCarModel as $key => $value) {



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
              foreach ($value["car_category"] as $key => $car_category_le) {
               $notfound=true;
                foreach ($car_category as $key => $car_statesvalue) {
                    if($car_statesvalue == $car_category_le){
                        $notfound=false;
                    }
                }
                if($notfound){
                      $car_category[]= $car_category_le;
                }
              }
                

            }
            if( $value["car_accessories"]!=""){
              foreach ($value["car_accessories"] as $key => $car_category_le) {
               $notfound=true;
                foreach ($car_accessories as $key => $car_statesvalue) {
                    if($car_statesvalue == $car_category_le){
                        $notfound=false;
                    }
                }
                if($notfound){
                      $car_accessories[]= $car_category_le;
                }
              }
                

            }
            
      }
       $car_prices[] = "30000-50000";
       $car_prices[] = "50001-100000";
       $car_prices[] = "100000++";

       
       $this->page['car_accesortlist'] = json_encode($car_accessories);
      $this->page['car_categorylist'] = json_encode($car_category);
       $this->page['car_statelist'] = $car_states;
       $this->page['car_pricelist'] = $car_prices;

      $this->page['carsforlisthome'] = $porfolioModel->toArray();
    }

}

