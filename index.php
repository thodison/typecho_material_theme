<?php

/**
 * 这是HanSon 基于material 的Typecho模板
 *
 * @package Material Theme
 * @author HanSon
 * @version 2.0.0
 * @link http://hanc.cc
 */

$this->need('header.php');
?>
<section class="billboard">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="intro animate fadeIn">
                    <h1><?php $this->options->slogan() ?></h1>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">

        <div class="<?php if(empty($this->options->sidebar)):echo"col-md-12";else:echo"col-md-9";endif; ?>">
            <?php while($this->next()): ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                    <div class="post-meta">
                        <span>作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> | </span>
                        <span>时间：<?php $this->date('F j, Y'); ?> | </span>
                        <span>分类：<?php $this->category(','); ?> | </span>
                        <span>评论：<a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a> </span>
                    </div>
                    <div class="post-content"><?php $this->content('<p class="all">阅读全文...</p>'); ?></div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php $this->pageNav('«','»'); ?>
        </div>

    <?php $this->need('sidebar.php'); ?>
    <?php $this->need('footer.php'); ?>
