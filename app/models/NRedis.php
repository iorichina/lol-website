<?php 
class NRedis{
    public function __call($name, $params){
        $redis = Redis::connection('nutcracker');
        call_user_func_array(array($redis, $name), $params);
    }
    public static function __callStatic($name, $arguments){
        $redis = Redis::connection('nutcracker');
        call_user_func_array(array($redis, $name), $arguments)
    }
}