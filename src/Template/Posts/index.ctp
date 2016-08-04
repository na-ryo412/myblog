<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">MyBlog</a>
        </div>
    </div>
</nav>

<h1>Blog Posts</h1>

<ul>
    <?php foreach ($posts as $post) : ?>
        <li><?= h($post->title); ?></li>
    <?php endforeach; ?>
</ul>