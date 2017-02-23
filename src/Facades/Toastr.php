<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-02-23
 * Time: 13:13
 */

namespace Henscs\Toastr\Facades;


use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}