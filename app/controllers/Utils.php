<?php
/**
 * array('/abc/'=>array(
 *             '/fff'=>array('xxx', 'yyy', 'zzz'), 
 *             'kkk'=>'xyz'
 *         ), 
 *         'de'=>array('d'=>'e'));
 * ->/assets?abc/fff/xxx,abc/fff/yyy,abc/fff/zzz,abc/kkk/xyz,de/d/e
 * 
 * array('/abc');
 * ->/assets/abc
 * 
 * array('/abc'=>array('/fff'=>array('xxx', 'yyy', 'zzz')));
 * ->/assets?abc/fff/xxx,abc/fff/yyy,abc/fff/zzz
 * 
 * '/yx/xxx';
 * ->/assets/yx/xxx
 */
class Utils {
    const ASSETS_STATIC_ROOT_PATH   = '/static-assets';
    const ASSETS_URL_ROOT_PATH      = '/assets?';
    public static function assetsUrl($paths='', $absolute=false, $depth='') {
        $url        = '';
        if (!is_array($paths)) {
            $url    = trim($depth, '/') . '/' . trim($paths, '/');
        }else{
            $depth  = trim($depth, '/') . '/';
            $url            = array();
            foreach ($paths as $key => $value) {
                $tmp        = $depth . (is_int($key) ? '' : trim($key, '/'));
                if (!is_array($value)) {
                    $tmp    = trim($tmp, '/') . '/' . trim($value, '/');
                    $url[]  = trim($tmp, '/');
                }else{
                    $value  = static::assetsUrl($value, $absolute, $tmp);
                    if (is_array($value)) {
                        $url= array_merge($url, $value);
                    }else{
                        $url[]  = $value;
                    }
                }
            }
            if ('/'===$depth && count($url)<=1) {
                $depth  = '';
                $url    = array_pop($url);
            }
        }
        if      (''===$depth) {
            return self::ASSETS_STATIC_ROOT_PATH . (trim($url, '/') ? '/' . trim($url, '/') : '');
        }elseif ('/'===$depth) {
            return self::ASSETS_URL_ROOT_PATH . implode(',', $url);
        }
        return $url;
    }
}