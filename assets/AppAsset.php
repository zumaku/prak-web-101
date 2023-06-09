<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "template/css/bootstrap.min.css",
        "template/css/core.css",
        "template/css/components.css",
        "template/css/icons.css",
        "template/css/pages.css",
        "template/css/responsive.css",
    ];
    public $js = [
        "template/js/jquery.min.js",
        "template/js/bootstrap.min.js",
        "template/js/detect.js",
        "template/js/fastclick.js",
        "template/js/jquery.slimscroll.js",
        "template/js/jquery.blockUI.js",
        "template/js/waves.js",
        "template/js/wow.min.js",
        "template/js/jquery.nicescroll.js",
        "template/js/jquery.scrollTo.min.js",
        "template/plugins/peity/jquery.peity.min.js",
        "template/plugins/waypoints/lib/jquery.waypoints.js",
        "template/plugins/counterup/jquery.counterup.min.js",
        "template/plugins/morris/morris.min.js",
        "template/plugins/raphael/raphael-min.js",
        "template/plugins/jquery-knob/jquery.knob.js",
        "template/pages/jquery.dashboard.js",
        "template/js/jquery.core.js",
        "template/js/jquery.app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
