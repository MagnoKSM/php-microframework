<?php
/**
 * Created by PhpStorm.
 * User: MagnoKSM
 * Date: 16/04/2019
 * Time: 22:14
 */

namespace MagnoKsm\Render;


interface PHPRenderInterface
{
    public function setData($data);
    public function run();
}