<?php $list_data = array_fill(0, 6, [
    'title' => 'Something Text',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet beatae consequatur cupiditate earum minima nemo, nihil nostrum placeat porro quasi similique sint voluptate! Ab architecto assumenda cum debitis quisquam suscipit!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet beatae consequatur cupiditate earum minima nemo, nihil nostrum placeat porro quasi similique sint voluptate! Ab architecto assumenda cum debitis quisquam suscipit!',
    'time' => '12:30 20-12-2017',
    'autor' => 'Mister Anonim'
]); ?>
<div class="list-blog-post-container">
    <div class="list-blog-post--flexbox">

        <?php foreach ($list_data as $data): ?>
            <div class="list-blog-post--flexbox--onebox">
                <div class="list-blog-post--flexbox--onebox--strap">
                    <span><?php echo $data['title']; ?></span>
                </div>
                <div class="list-blog-post--flexbox--onebox--content">
                    <p><?php echo implode(' ', array_slice(explode(' ', $data['content']), 0, 20)); ?></p>
                </div>
                <div class="list-blog-post--flexbox--onebox--strap__bottom">
                    <span><?php echo $data['time']; ?></span>
                    <span><?php echo $data['autor']; ?></span>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
    <div class="list-blog-post--navigation"></div>
</div>

