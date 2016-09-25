<?php 
class HttpRequest {

    //通过curl post数据
    public static function cPost($url, $data = array(), $timeout = 3000) {
        $c = curl_init(); 
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($c, CURLOPT_URL, $url); 
        curl_setopt($c, CURLOPT_POST, true); 
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT_MS, $timeout);
        curl_setopt($c, CURLOPT_POSTFIELDS, http_build_query($data));   
        $ret = curl_exec($c); 
        curl_close($c);
        return $ret;
    }

    public static function cGet($url, $timeout = 3000) {
        $c = curl_init(); 
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($c, CURLOPT_URL, $url); 
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT_MS, $timeout); 
        $ret = curl_exec($c); 
        curl_close($c); 
        return $ret;
    }

    /**
     * POST
     * 不需要socket mod
     * 
     */
    public static function Post($host,$page,$data,$port=80,$timeout=3){
        $fp = fsockopen($host, $port, $errno, $errstr, $timeout);
        if (!$fp) {
            return false;       
        }else {
            if(is_array($data)) {
                $Content =array();
                foreach($data as $k=>$v)
                {
                    $Content[] = $k."=".rawurlencode ($v);              
                }
                $Content = implode("&",$Content);
            }else {
                $Content = $data;
            }
            //$stream
            $stream = "POST /$page HTTP/1.0\r\n";
            $stream .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $stream .= "Host: $host\r\n";
            $stream .= "Content-Length: ".strlen($Content)."\r\n";
            $stream .= "Connection: Close\r\n\r\n";
            fwrite($fp, $stream);
            usleep(10);
            fwrite($fp, $Content);
            stream_set_timeout($fp, $timeout);
            $res = stream_get_contents($fp);
            $info = stream_get_meta_data($fp);
            fclose($fp);
            //echo $stream;
            if ($info['timed_out']) {
                return false;       
            }else {
//              return $res;
                return substr(strstr($res, "\r\n\r\n"),4);
//              return true;
            }
        }
    }
    
    public static function Get($host,$pos,$port=80,$timeout=3){
        $fp = fsockopen($host, $port, $errno, $errstr, $timeout);
        if (!$fp) {
            return false;       
        }else {
            $stream = "GET /$pos HTTP/1.0\r\n";
            $stream .= "Host: $host\r\n";
            $stream .= "Cookie: member_id=jingki%4056.com";
            $stream .= "Connection: Close\r\n\r\n";
            fwrite($fp, $stream);
            usleep(10);
            stream_set_timeout($fp, $timeout);
            $res = stream_get_contents($fp);
            $info = stream_get_meta_data($fp);
            fclose($fp);
            //echo $stream;
            if ($info['timed_out']) {
                return false;       
            }else {
//              return $res;
                return substr(strstr($res, "\r\n\r\n"),4);
//              return true;
            }
        }
    }
}