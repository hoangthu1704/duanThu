
<?php
    if(isset($show_all_blog) && !empty($show_all_blog)){
?>
<div class="frame_all_blog">
    <?php
    if(isset($idblog) && !empty($idblog)){
        $show_blog = show_blog($idblog);
    ?>
    <div class="frame_content_main">
        <div><h1><?=$show_blog['BlogTitle']?></h1></div>
        <div>
            <div><p><?=$show_blog['BlogContent']?></p></div>
            <div><img src="assets/images/<?=$show_blog['BlogImage']?>" alt="" width="100%"></div>
        </div>
    </div>
    <?php } ?>
    <div class="fl_ju">
        
        <div class="chicot">
            <?php
            foreach ($show_all_blog as $value):
                extract($value);
            ?>
            <div class="frame_blog">
                <div><img src="assets/images/<?=$BlogImage?>" alt="" width="100%" height="250px"></div>
                <div>
                    <p class="content_blog"><?=$BlogContent?>
                    </p>
                    <div class="wt_bt">
                        <a href="?mod=page&act=blog&idblog=<?=$id_blog?>" class="cus_bt">xem chi tiết</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
    }else{
        echo "<h1 style='text-align: center;'>Không có tin tức nào có sẵn</h1>";
    }
?>