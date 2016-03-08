<?php $this->need('header.php'); ?>

<div class="container" id="main">
    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="post-title"><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title() ?></a></h3>
                    <div class="post-meta">
                        <span>时间：<?php $this->date('Y-m-d'); ?> | </span>
                        <span>分类：<?php $this->category(','); ?></span>
                    </div>
                    <div class="post-content"><?php $this->content('Continue Reading...'); ?></div>
                </div>
            </div>
            <p class="tags">标签：<?php $this->tags(' , ', true, ''); ?></p>
            <?php $this->need('comments.php'); ?>
        </div>

    <?php $this->need('sidebar.php'); ?>
    <?php $this->need('footer.php'); ?>
