<?php
/**
 * Created by PhpStorm.
 * User: Goletter
 * Date: 2019/1/8
 * Time: 15:54
 */

namespace Goletter\EasyTBK\JingDong;


interface RequestInterface
{
    public function getMethod();

    public function getParamJson();
}