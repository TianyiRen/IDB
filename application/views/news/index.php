<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="http://localhost/IDB/index.php/news/<?php echo $news_item['dishname'] ?>">View article</a></p>

<?php endforeach ?>