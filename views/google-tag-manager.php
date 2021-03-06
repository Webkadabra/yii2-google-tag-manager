<?php
/**
 * @var $this yii\web\View
 * @var $tagManagerId string
 * @var $dataLayerItems array
 */

use yii\helpers\Html;
use yii\helpers\Json;

?>
<script>
    var dataLayer = <?= Json::encode($dataLayerItems) ?>;
</script>
<?php
if (empty($tagManagerId)) {
    return;
}

//Adding a GTM prefix
$tagManagerId = 'GTM-' . $tagManagerId;
?>
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=<?= Html::encode($tagManagerId) ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?= Html::encode($tagManagerId) ?>');
</script>