<?php
/**
 * User: TheCodeholic
 * Date: 10/18/2019
 * Time: 8:42 AM
 */
?>

<?php
/**
 * User: TheCodeholic
 * Date: 10/18/2019
 * Time: 8:37 AM
 */

use app\assets\AppAsset;

/** @var $content string */
/** @var $this \yii\web\View */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?php echo Yii::$app->language ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $this->registerCsrfMetaTags() ?>
    <title>Document</title>
    <?php echo $this->head() ?>
</head>
<body>
<?php echo $this->beginBody() ?>
<?php echo $content ?>
<?php echo $this->endBody() ?>
</body>
</html>
<?php echo $this->endPage() ?>
