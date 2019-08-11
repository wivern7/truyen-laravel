<?php $__env->startSection('title', 'Đọc Truyện Online Mới Nhất - ' . \App\Option::getvalue('sitename')); ?>
<?php $__env->startSection('seo'); ?>
    <meta name="description" content="<?php echo e(\App\Option::getvalue('description')); ?>">
    <meta name="keywords" content="<?php echo e(\App\Option::getvalue('keyword')); ?>">
    <link rel="image_src" href="link_to_thumbnail" />
    <meta property="og:description" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb', showtrangchu()); ?>
<?php $__env->startSection('content'); ?>

    <div class="container visible-md-block visible-lg-block" id="intro-index">
        <div class="title-list">
            <h2><a href="<?php echo e(route('danhsach.truyenhot')); ?>" title="Truyện hot">Truyện hot <span class="glyphicon glyphicon-fire"></span></a></h2>
            <select id="hot-select" class="form-control new-select">
                <option value="all">Thể loại : Tất cả</option>
                <?php echo e(category_parent(\App\Category::get())); ?>

            </select>
        </div>
        <div class="index-intro">
            <?php echo \App\Story::getListHotStories(); ?>

        </div>
    </div>

    <div class="container" id="list-index">
      <?php echo $__env->make('partials.reading', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="list list-truyen list-new col-xs-12 col-sm-12 col-md-8 col-truyen-main">
            <div class="title-list">
                <h2><a href="<?php echo e(route('danhsach.truyenmoi')); ?>" title="Truyện mới">Truyện mới cập nhật <span class="glyphicon glyphicon-menu-right"></span></a></h2>
                <select id="new-select" class="form-control new-select">
                    <option value="all">Thể loại : Tất cả</option>
                    <?php echo e(category_parent(\App\Category::get())); ?>

                </select>
            </div>
                <?php echo \App\Story::getListNewStories(); ?>


            <div class="title-list">
                <h2><a>Có thể bạn quan tâm <span class="glyphicon"></span></a></h2>
            </div>
                <div style="padding: 8px; border: 2px solid #696969; word-wrap: break-word;">
                <center>
                <div id="e515df0d202ae52fcebb14295743063b"></div>
                <script async src="https://click.advertnative.com/loading/?handle=1030" ></script>
                </center>
                </div>
        </div>
        <?php /*Sidebar*/ ?>
        <div class="visible-md-block visible-lg-block col-md-4 text-center col-truyen-side">
		<?php echo $__env->make('widgets.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('widgets.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    <?php echo \App\Story::getListDoneStories(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>