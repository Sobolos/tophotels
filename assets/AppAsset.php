<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
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
        "css/_lsfw/reset-ls.css" ,
        "css/_lsfw/atom.css" ,
        "css/_lsfw/fonts.css" ,
        "css/_lsfw/tabs.css" ,
        "css/vendor/font-awesome-5.0/css/fontawesome-all.css" ,
        "css/vendor/sumoselect.css" ,
        "css/vendor/th-sumoselect.css" ,
        "css/vendor/magnific-popup.css" ,
        "css/lib-ui-tour-filter/flags.css" ,
        "css/lib-ui-tour-filter/lsfw-tour-filter.css" ,
        "css/lib-ui-tour-filter/lsfw-form-direction.css" ,
        "css/lib-ui-tour-filter/lsfw-date-widget.css" ,
        "css/lib-ui-tour-filter/lsfw-adults-widget.css" ,
        "css/lib-ui-tour-filter/lsfw-durability-widget.css" ,
        "css/lib-ui-tour-filter/lsfw-price-widget.css" ,
        "css/tophotels_site_html/main-cnt.css" ,
        "css/tophotels_site_html/main.css" ,
        "css/tophotels_site_html/layouts/header.css" ,
        "css/tophotels_site_html/layouts/header-mobile.css" ,
        "css/tophotels_site_html/layouts/footer.css" ,
        "css/tophotels_site_html/layouts/left-menu.css" ,
        "css/tophotels_site_html/layouts/left-menu-mobile.css" ,
        "css/tophotels_site_html/agree-pp.css" ,
        "css/tophotels_site_html/tabs-bar-mobile.css" ,
        "css/site.css" ,
        "css/admin.css" ,
    ];
    public $js = [
        "js/jquery-ui.min.js",

        "js/vendor/magnific-popup.min.js",
        "js/vendor/SumoSelectLS/js/jquery.sumoselect-ls.min.js",
        "js/vendor/jquery-datepicker-range.js",

        "js/mobile/header-mobile.js",
        "js/mobile/left-menu-mobile.js",

        "js/tour/date-function.js",
        "js/tour/main.js",
        "js/tour/tour.js",
        "js/tour/departiation.js",
        "js/tour/guests.js",
        "js/tour/price.js",
        "js/tour/nights.js",
        "js/tour/tour_inputs.js",

        "js/custom_tour/custom_tour.js",
        "js/custom_tour/formHints.js",

        "js/legal-agreement.js",
        "js/tabs.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
