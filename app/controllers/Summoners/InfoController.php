<?php
namespace Summoners;
use Cache;
use Input;
class InfoController extends SummonersController {
    public function getIndex() {
        $a = -1;
        echo 'ff_'.$a;
        // phpinfo();
        // Cache::put('name', Input::get('name'), 1);
        // var_dump(Cache::get('name'));
    }
}
