<style><?php require_once('assets/css/news_list.css')?></style>


<div id="app">
    <div class="news_list_style">

        <div  class="search">
            <input v-on:keyup="show_searched_news" 
                type="text" id="title_search" placeholder="Поиск по заголовку">
        </div>

        <div v-if="show_all_news" class="news_list">
            <?php foreach($news_data as $news): ?>
                
                <div class="news_header">
                    <h1 class="news_title">
                        <a href="getnews/<?php echo $news->news_id?>">
                            <?php echo $news->news_title?>
                        </a>
                    </h1>
                    <div class="news_date"><?php echo $news->news_date?></div>
                </div>

                <p class="news_text"><?php echo $news->news_text ?>...</p>

                <?php if($news->news_img != ''):?>
                    <img src="/proj/assets/images/<?php echo $news->news_img?>" width="100%" alt="">
                <?php endif?>

            <?php endforeach?>
        </div>

    </div>

    <div v-if="show_searched" class="show_searced_news">
        {{news_data}}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script><?php require_once('assets/js/script.js') ?></script>
    