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
             "css/_lsfw/reset-ls.css?v=1544103235" ,
             "css/_lsfw/atom.css?v=1544103235" ,
             "css/_lsfw/fonts.css?v=1544103235" ,
             "css/_lsfw/tabs.css?v=1544103235" ,
             "css/vendor/font-awesome-5.0/css/fontawesome-all.css?v=1544103236" ,
             "css/vendor/sumoselect.css?v=1544103234" ,
             "css/vendor/th-sumoselect.css?v=1544103234" ,
             "css/vendor/magnific-popup.css?v=1544103234" ,
             "css/lib-ui-tour-filter/flags.css?v=1544103234" ,
             "css/lib-ui-tour-filter/lsfw-tour-filter.css?v=1544103234" ,
             "css/lib-ui-tour-filter/lsfw-form-direction.css?v=1544103234" ,
             "css/lib-ui-tour-filter/lsfw-date-widget.css?v=1544103234" ,
             "css/lib-ui-tour-filter/lsfw-adults-widget.css?v=1544103234" ,
             "css/lib-ui-tour-filter/lsfw-durability-widget.css?v=1544103234" ,
             "css/lib-ui-tour-filter/lsfw-price-widget.css?v=1544103234" ,
             "css/tophotels_site_html/main-cnt.css?v=1544103234" ,
             "css/tophotels_site_html/main.css?v=1544103234" ,
             "css/tophotels_site_html/layouts/header.css?v=1544103235" ,
             "css/tophotels_site_html/layouts/header-mobile.css?v=1544103235" ,
             "css/tophotels_site_html/layouts/footer.css?v=1544103235" ,
             "css/tophotels_site_html/layouts/left-menu.css?v=1544103235" ,
             "css/tophotels_site_html/layouts/left-menu-mobile.css?v=1544103235" ,
             "css/tophotels_site_html/agree-pp.css?v=1544103234" ,
             "css/tophotels_site_html/tabs-bar-mobile.css?v=1544103234" ,
             "css/site.css" ,
             "css/admin.css" ,
    ];
    public $js = [
         //"js/jquery.311.min.js?v=1544103230" ,
         "js/jquery-ui.min.js?v=1544103230",
         "js/vendor/magnific-popup.min.js?v=1544103232" ,
         "js/vendor/SumoSelectLS/js/jquery.sumoselect-ls.min.js?v=1544103233" ,
         "js/vendor/jquery-datepicker-range.js?v=1544103232" ,
         "js/tophotels_site_html/tk-form-v2/date-function.js?v=1544103232" ,
         "js/tophotels_site_html/tk-form-v2/main.js?v=1544103232" ,
         "js/tophotels_site_html/tk-form-v2/form-date.js?v=1544103232" ,
         "js/tophotels_site_html/form-pp-universal.js?v=1544103231" ,
         "js/tophotels_site_html/form-directions.js?v=1544103231" ,
         "js/tophotels_site_html/main.js?v=1544103231" ,
         "js/tophotels_site_html/help-selections.js?v=1544103231" ,
         "js/tophotels_site_html/agree-pp.js?v=1544103231" ,
         "js/tophotels_site_html/header-mobile.js?v=1544103231" ,
         "js/tophotels_site_html/left-menu-mobile.js?v=1544103231" ,
         "js/tophotels_site_html/legal-info-pp.js?v=1544103231" ,
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
