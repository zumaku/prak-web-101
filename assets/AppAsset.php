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
        "assets/js/jquery.min.js",
        "assets/js/bootstrap.min.js",
        "assets/js/detect.js",
        "assets/js/fastclick.js",
        "assets/js/jquery.slimscroll.js",
        "assets/js/jquery.blockUI.js",
        "assets/js/waves.js",
        "assets/js/wow.min.js",
        "assets/js/jquery.nicescroll.js",
        "assets/js/jquery.scrollTo.min.js",
        "assets/plugins/peity/jquery.peity.min.js",
        "assets/plugins/waypoints/lib/jquery.waypoints.js",
        "assets/plugins/counterup/jquery.counterup.min.js",
        "assets/plugins/morris/morris.min.js",
        "assets/plugins/raphael/raphael-min.js",
        "assets/plugins/jquery-knob/jquery.knob.js",
        "assets/pages/jquery.dashboard.js",
        "assets/js/jquery.core.js",
        "assets/js/jquery.app.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
