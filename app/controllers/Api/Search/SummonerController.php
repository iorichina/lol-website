<?php
namespace Api\Search;
use Input;
use URL;
use Response;
class SummonerController extends SearchController {
    public function getIndex() {
        $name   = Input::get('name');
    }
    public function postIndex() {
        $name   = Input::get('name');

        $data['error']  = true;
        $data['msg']    = '阿斯顿浪费空间撒旦款了房间阿斯顿机房阿斯顿飞阿斯顿就发生放假';
        $data['to']     = URL::action('Summoners\\InfoController@getIndex');
        return Response::json($data);
    }
}
