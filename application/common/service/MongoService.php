<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2017/4/10 16:51
 */

namespace app\common\service;
use think\Config;
use think\Db;

class MongoService{
    public static function name($name='',$select=''){
        $config = empty($select)?Config::get('mongo.default'):Config::get('mongo.'.$select);
        return Db::connect($config)->name($name);
    }
}