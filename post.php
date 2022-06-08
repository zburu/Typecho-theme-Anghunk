<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <div class="main">
        <main class="container">
            <div class="main-content">
                <div class="breadcrumb">
                   <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->category(); ?> 
                </div>
                <div>
                    <h1 class="post-title"><?php $this->title() ?></h1>
                    <div class="post-time">
                        <time><?php $this->date('Y 年 m 月 d 日'); ?></time> / 
                        <span>阅读: <?php get_post_view($this) ?></span> / 
                        <span class="post-tags"><?php $this->tags('', true, ''); ?></span> / 
                        <a href="#comments"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></a>
                    </div>
                </div>
                <div class="content"> 
                    <?php $this->content(); ?>
                </div>
                <div class="prevornext">
                    <p><?php $this->theNext(); ?></p>
                    <p><?php $this->thePrev(); ?></p>
                </div>
                <?php _getHistoryToday($this->created) ?>
            </div>
        </main>
        <?php $this->need('comments.php'); ?>
        <div class="container">
            <?php $this->need('footer.php'); ?>
        </div>
    </div>
</div>
</body>
</html>
