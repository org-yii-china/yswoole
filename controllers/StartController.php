<?php
namespace yswoole\controllers;
use yii\console\Controller;

/**
 * yswoole 启动脚本
 *
 * @author huangxianan <xianan_huang@163.com>
 * Date: 2018/11/8
 */

class StartController extends Controller
{
    /**
     * 启动脚本
     * @return string
     */
    public function actionIndex()
    {
        return "yswoole is start!";
    }
}