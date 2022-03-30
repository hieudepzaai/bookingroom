<?php

namespace App\Http\Controllers\BackEnd\Config;

use App\Http\Controllers\Controller;
use Config;

class ConfigController extends  Controller
{
    public function getConfig(){
        return Config::get('AppConstant.post_status');
    }

}
