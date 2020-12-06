<?php Theme::header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach($posts as $post): ?>
            <div class="post-preview">
                <a href="/post/<?= $post->id ?>/">
                    <div class="post-title">
                        <?= $post->title ?>
                    </div>
                    <div class="post-subtitle">
                        <?= $post->subtitle ?>
                    </div>
                        <?= $post->image ?>                    
                </a>
                <p class="post-meta">Veröffentlicht am <?= $post->date ?></p>
            </div>
            <hr>
            <?php endforeach; ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Weitere Beiträge &rarr;</a>
                </li>
            </ul>

        </div>
    </div>
</div>
<?php Theme::footer(); ?> 
            