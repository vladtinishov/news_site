<style><?php require_once('assets/css/news_list.css')?></style>

<div class="news_list_style">

    <?php foreach($news_data as $news): ?>
        
        <div class="news_header">
            <h1 class="news_title"><?php echo $news->news_title?></h1>
            <div class="news_date"><?php echo $news->news_date?></div>
        </div>

        <p class="news_text"><?php echo $news->news_text ?></p>

        <?php if($news != ''):?>
            <img src="<?php $news->news_img?>" alt="">
        <?php endif?>

    <?php endforeach?>

</div>

    