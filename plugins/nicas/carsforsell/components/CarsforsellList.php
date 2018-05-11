<?php namespace Nicas\Carsforsell\Components;

use Input;

use Cms\Classes\ComponentBase;

use nicas\carsforsell\models\Carsforsell as CarsforsellModel;





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

      

        $pageno = Input::get('page') ?  Input::get('page') : 1;

      $sizeofcarlist = CarsforsellModel::orderBy('id')->get()->count();

    $carListModel = CarsforsellModel::orderBy('id')->get();//->forPage($pageno,6);
     $allCarList = array();
    if(Input::post('car_category_select')){
   
    foreach ($carListModel as $key => $carList) {
      if(Input::post('car_category_select')){
        if(is_array($carList["car_category"])){
        foreach ($carList["car_category"] as $carlist_category) {
          if(Input::post('car_category_select') == $carlist_category["category"]){
            $allCarList[] = $carList;
          }
        }
       }
      }
      
    }
  }else{
   $allCarList =$carListModel->toArray();
  }
  echo json_encode(Input::post());
  if(Input::post('car_brand_select')){
    foreach ($allCarList as $key => $carList) {
      if(Input::post('car_brand_select')){
        if(is_array($carList["car_category"])){
        foreach ($carList["car_category"] as $carlist_category) {
          if(Input::post('car_brand_select') != $carlist_category["brand"]){
            array_splice($allCarList, $key,1);
          }
        }
       }
      }
      
    }
  }

  if(Input::post('car_state_select')){
     if(Input::post('car_state_select')){
    $num=array();
    foreach ($allCarList as $key => $carList) {
      echo $key."-".Input::post('car_state_select')."==".$carList["car_states"].":".(Input::post('car_state_select') != $carList["car_states"])."<br/>";
     if(Input::post('car_state_select') != $carList["car_states"]){
      $num[]=$key;
        
      }
      
    }
    for ($i=sizeof($num)-1; $i >= 0 ; $i--) { 
      echo $num[$i];
      array_splice($allCarList, $num[$i],1);
    }
    }
  }

  //echo json_encode($allCarList);
      $this->page['car_accesortlist'] = json_encode($car_accessories);
      $this->page['car_categorylist'] = json_encode($car_category);
      $this->page['car_statelist'] = $car_states;
      $this->page['carslist'] = $allCarList;
      $this->page['currentpage'] = $pageno;
      $this->page['sizeofcarlist'] = ceil($sizeofcarlist/6);;

    }

}

