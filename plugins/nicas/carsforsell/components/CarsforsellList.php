<?php namespace Nicas\Carsforsell\Components;

use Input;

use Cms\Classes\ComponentBase;

use nicas\carsforsell\models\Carsforsell as CarsforsellModel;
use nicas\carsforsell\models\CarAccessories as CarAccessoriesModel;




class CarsforsellList extends ComponentBase

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

        $ms=0;

        $porfolioModeld = CarsforsellModel::orderBy('id')->get();

      $car_states = array();
      $car_prices = array();
      $car_category = array();
      $car_accessories = array();

         foreach ($porfolioModeld as $key => $value) {
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
                      $car_category_le["states"] = $value["car_states"];
                      $car_category[]= $car_category_le;
                }
              }
                

            }
      }
      $allCarAccessoriesModel = CarAccessoriesModel::orderBy('id')->get();
        $ms=0;
        foreach ($allCarAccessoriesModel as $key => $value) {
          if( $value["car_category"]!=""){
              foreach ($value["car_category"] as $key => $car_category_le) {
               $notfound=true;
                foreach ($car_accessories as $key => $car_statesvalue) {
                    if($car_statesvalue == $car_category_le){
                        $notfound=false;
                    }
                }
                if($notfound){
                      $car_category_le["states"] = $value["car_states"];
                      $car_accessories[]= $car_category_le;
                }
              }
            }
        }

      

        $pageno = Input::get('page') ?  Input::get('page') : 1;

      $sizeofcarlist = CarsforsellModel::orderBy('id')->get()->count();

    if(Input::post('car_category_select')=='used-cars'){
       $allCarList = CarsforsellModel::orderBy('id')->get()->toArray();
    }else if(Input::post('car_category_select')=='accessories'){
       $allCarList = CarAccessoriesModel::orderBy('id')->get()->toArray();
    }else{
        $allCarList = array_merge(CarsforsellModel::orderBy('id')->get()->toArray(),CarAccessoriesModel::orderBy('id')->get()->toArray());
    }

     if(Input::post('car_brand_select')){
                $num=array();
                foreach ($allCarList as $key => $carList) {
                   $found = true;
                  if(Input::post('car_brand_select')){
                    if(is_array($carList["car_category"])){
                    foreach ($carList["car_category"] as $carlist_category) {
                      if(Input::post('car_brand_select') == $carlist_category["brand"]){
                        $found = false;
                      }
                    }
                   }
                  }
                   if($found){
                           $num[]=$key;
                        }
                }
                for ($i=sizeof($num)-1; $i >= 0 ; $i--) { 
                        array_splice($allCarList, $num[$i],1);
                      }
              }
               if(Input::post('car_models_select')){
          $num=array();
          foreach ($allCarList as $key => $carList) {
            $found = true;
            if(Input::post('car_models_select')){
              if(is_array($carList["car_category"])){
              foreach ($carList["car_category"] as $carlist_category) {
                if(Input::post('car_models_select') == $carlist_category["model"]){
                   $found = false;
                }
              }
             }
            }
            if($found){
               $num[]=$key;
            }
          }
          for ($i=sizeof($num)-1; $i >= 0 ; $i--) { 
            array_splice($allCarList, $num[$i],1);
          }
         }

              if(Input::post('car_state_select')){
                $num=array();
                foreach ($allCarList as $key => $carList) {
                  $found = true;
                  if(Input::post('car_state_select')){
                    if(Input::post('car_state_select') == $carList["car_states"]){
                         $found = false;
                      }
                  }
                  if($found){$num[]=$key;}
                }
                for ($i=sizeof($num)-1; $i >= 0 ; $i--) {array_splice($allCarList, $num[$i],1);}
               }
     if(Input::post('car_prices_select')){
          $num=array();
          foreach ($allCarList as $key => $carList) {
            $found = true;
            if(Input::post('car_prices_select')){
              if(Input::post('car_prices_select') == $carList["car_price"]){
                   $found = false;
                }
            }
            if($found){
               $num[]=$key;
            }
          }
          for ($i=sizeof($num)-1; $i >= 0 ; $i--) { 
            array_splice($allCarList, $num[$i],1);
          }
         }
    if(Input::post('car_category_select')){
       $this->page['head_title'] ="search results: ".sizeof($allCarList)." results";
    }else{
    $this->page['head_title'] ="recommended for you";
  }
   $sizeofallCarList = sizeof($allCarList);
   if($sizeofallCarList <= 6){
    $pageno = 1;
   }
     $allCarList=array_splice($allCarList,($pageno-1) * 6,6);
     $this->page['isaccessories'] = Input::post('car_category_select')=='accessories';
     $this->page['params'] = json_encode(Input::post());
      $this->page['car_accesortlist'] = json_encode($car_accessories);
      $this->page['car_categorylist'] = json_encode($car_category);
      $this->page['car_statelist'] = $car_states;
      $this->page['carslist'] = $allCarList;
      $this->page['currentpage'] = $pageno;
      $this->page['sizeofcarlist'] = ceil($sizeofallCarList/6);;

    }

}

