<?php

    if (isset($_GET["action"]) && $_GET["action"] == "ajax_comments") {
        $this->need('comments.php');
    } else {
        if(strpos($_SERVER["PHP_SELF"],"themes")) header('Location:/');
        $this->need('header.php');
?>

<div class="container" id="main">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="post-title"><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title() ?></a></h3>
                    <div class="post-content"><?php $this->content('Continue Reading...'); ?></div>
                </div>
            </div>
            <?php $this->need('comments.php'); ?>
        </div>

    <?php $this->need('sidebar.php'); ?>
    <?php $this->need('footer.php'); ?>
<?php } ?>
