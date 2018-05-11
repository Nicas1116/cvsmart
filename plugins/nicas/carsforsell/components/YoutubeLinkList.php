<?php namespace Nicas\Carsforsell\Components;
use Input;
use Cms\Classes\ComponentBase;
use nicas\carsforsell\models\YoutubeLink as YoutubeLinkModel;


class YoutubeLinkList extends ComponentBase
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
    $porfolioModel = YoutubeLinkModel::orderBy('id')->get();

    foreach ($porfolioModel as $porfolio) {
        $video_id = explode("?v=", $porfolio->youtubelink);
        $video_id = $video_id[1];
       $porfolio->video_id = $video_id;
    }
    
      $this->page['youtubelinklist'] = $porfolioModel->toArray();
    }
}
