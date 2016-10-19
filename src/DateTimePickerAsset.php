<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\datetimepicker;

use yii\web\AssetBundle;
use yii;

/**
 * DateTimePickerAsset
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\datetimepicker
 */
class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/semako-uxsolutions-bootstrap-datepicker';

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    public function init()
    {
        $this->css[] = YII_DEBUG ? 'dist/css/bootstrap-datepicker.css' : 'dist/css/bootstrap-datepicker.min.css';
        $this->js[] = YII_DEBUG ? 'dist/js/bootstrap-datepicker.js' : 'dist/js/bootstrap-datepicker.min.js';
    }
}
