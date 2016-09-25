<?php
namespace Api;
use Controller;
use Request;
use Input;
use Exception;
use App;
class ApiController extends Controller {
    public function __construct() {
        // 确保是异步方法请求的
        if (!Request::ajax() && 'local'!==App::environment()) {
            throw new Exception("Error Request Type", 1);
        }
    }
}
