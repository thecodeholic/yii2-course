<?php
/**
 * User: TheCodeholic
 * Date: 10/18/2019
 * Time: 8:37 AM
 */

use app\assets\AppAsset;

/** @var $content string */
/** @var $this \yii\web\View */
?>
<?php $this->beginContent('@app/views/layouts/clear.php') ?>
<div class="container">
    <?php echo $content ?>
</div>
<?php $this->endContent(); ?>
