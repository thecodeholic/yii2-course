<?php
/**
 * User: TheCodeholic
 * Date: 10/10/2019
 * Time: 9:09 AM
 */

/** @var \yii\web\View $this */

$this->title = 'Page - About us';

$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii2, advanced'])
?>

<h1>Hello From PageController</h1>

<?php echo $id ?>
<br>

<div>
    <?php echo $this->render('page_footer') ?>
</div>
