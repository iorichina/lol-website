<?php
/**
 * 读取接口信息
 */
namespace Champions;
use ModelBase;
use Config;
use HttpRequest;
class Api extends ModelBase {
    const API_CHAMPION_INFO_URL = '/fast-api/champion-info';
    /**
     * 返回英雄信息
     * @param  string $name 英雄名字
     * @return array       empty array on failure
     */
    public static function info($name) {
        $rs = HttpRequest::cGet(static::genUrl(static::API_CHAMPION_INFO_URL, array('name'=>$name)),2000);
        if ($rs) {
            return json_decode($rs, true);
        }
        return array();
    }
    protected static function genUrl($url, $params=null) {
        if (strpos($url, '/')===0) {
            $return = Config::get('app.url').substr($url, 1);
        }else{
            $return = $url;
        }
        return $return  . (!$params?"":'?' . http_build_query($params) );
    }
}