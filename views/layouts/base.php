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
<header>
    header goes here
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php echo $content ?>
        </div>
        <div class="col-sm-3">
            <ul class="list-group">
                <li class="list-group-item">Sidebar Item 1</li>
                <li class="list-group-item">Sidebar Item 1</li>
                <li class="list-group-item">Sidebar Item 1</li>
            </ul>
            <?php if (isset($this->blocks['sidebar'])): ?>
                <hr>
                <?php echo $this->blocks['sidebar'] ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<footer>
    Footer goes here
</footer>
<?php $this->endContent(); ?>
