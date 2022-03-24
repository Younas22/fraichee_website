@include('home.include.header')

<!-- Section Our-Primise Start -->
<section class="mt-5">
    <div class="section-header">
        <div class="section-title">
            <h1 class="text-white mb-1">Blog</h1>
            <h3 class="text-white">Archive</h3>
        </div>
    </div>
</section>
<!-- Section Our-Primise End -->
<section class="insight">
    <div class="container-fluid">
        <div class="row">

<?php foreach ($blog as $key) { ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <a href="single-blog.php">
                        <img class="card-img-top" src="<?= url('public/assets/images/blog').'/'.$key->post_img; ?>" alt="Card image cap" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= url('/blog-details').'/'. str_replace(' ', '-', $key->post_slug); ?>"> <?=$key->post_title?></a>
                        </h5>
                        <div class="post-meta-data">
                            <span class="post-date"> <?=date('m/d/Y', strtotime($key->post_created_at))?> </span>
                            <span class="post-avatar"> No Comments </span>
                        </div>
                        <div class="post-excerpt">
                            <p>
                                <?=Str::limit($key->post_desc, 20) ?>
                            </p>
                        </div>
                        <div class="card-button">
                            <a href="#">Read More »</a>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
        </div>
        <hr><?= $blog->links(); ?>
    </div>
</section><!-- Blogs -->
@include('home.include.footer')