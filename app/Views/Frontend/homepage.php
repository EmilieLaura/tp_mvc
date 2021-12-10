<h1 class="text-center">Home Page</h1>

<?php
/* @var $posts Post[] */

use App\Entity\Post;

foreach ($posts as $post):
    ?>
    <div>
        <h2 class="mt-5"><?php echo $post['title_post'] ?></h2>
        <p>Publié le : <?php echo $post['date_post'] ?></p>
        <p><?php echo substr($post['content_post'], 0, 250) ?></p>
        <a href="#">Lire la suite</a>
    </div>
<?php endforeach;?>









