<!-- START: Latest News -->
<div class="nk-gap-2"></div>
<h3 class="nk-decorated-h-2"><span><span class="text-main-1">Últimas</span> Noticias</span></h3>
<div class="nk-gap"></div>

<div class="nk-news-box">
    <div class="nk-news-box-list">
        <div class="nano">
            <div class="nano-content">
                <?php
                // Leer el contenido del archivo JSON
                $json = file_get_contents('application/widgets/db/last-news.json');
                // Convertir el contenido en un objeto PHP
                $blogs = json_decode($json);
                // Mostrar la información de cada blog
                foreach ($blogs as $blog) {
                    echo '<div class="nk-news-box-item">';
                    echo '<div class="nk-news-box-item-img">';
                    echo '<img src="' . $blog->image . '" alt="' . $blog->title . '">';
                    echo '</div>';
                    echo '<img src="' . $blog->image . '" alt="' . $blog->title . '" class="nk-news-box-item-full-img">';
                    echo '<h3 class="nk-news-box-item-title">' . $blog->title . '</h3>';
                    echo '<span class="nk-news-box-item-categories">';
                    echo '<span class="bg-main-4">' . $blog->category . '</span>';
                    echo '</span>';
                    echo '<div class="nk-news-box-item-text">';
                    echo '<p>' . $blog->description . '</p>';
                    echo '</div>';
                    echo '<a href="' . $blog->link . '" class="nk-news-box-item-url">Leer más</a>';
                    echo '<div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> ' . $blog->date . '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="nk-news-box-each-info">
        <div class="nano">
            <div class="nano-content">
                <!-- Aquí se insertará información sobre la noticia seleccionada -->
                <div class="nk-news-box-item-image">
                    <img src="assets/images/post-1.jpg" alt="">
                    <span class="nk-news-box-item-categories">
                        <span class="bg-main-4">MMO</span>
                    </span>
                </div>
                <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                <div class="nk-news-box-item-text">
                    <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                </div>
                <a href="blog-article.html" class="nk-news-box-item-more">Leer más</a>
                <div class="nk-news-box-item-date">
                    <span class="fa fa-calendar"></span> Sep 18, 2018
                </div>
            </div>
        </div>
    </div>
</div>

<div class="nk-gap-2"></div>
<div class="nk-blog-grid">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <!-- START: Post -->
            <div class="nk-blog-post">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                    <span class="nk-post-comments-count">13</span>

                    <span class="nk-post-categories">
                        <span class="bg-main-5">Indie</span>
                    </span>

                </a>
                <div class="nk-gap"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                <div class="nk-post-text">
                    <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                </div>
                <div class="nk-gap"></div>
                <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Leer más</a>
                <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
            </div>
            <!-- END: Post -->
        </div>

        <div class="col-md-6 col-lg-3">
            <!-- START: Post -->
            <div class="nk-blog-post">
                <a href="blog-article.html" class="nk-post-img">
                    <img src="assets/images/post-6-mid.jpg" alt="At first, for some time, I was not able to answer">
                    <span class="nk-post-comments-count">0</span>

                    <span class="nk-post-categories">
                        <span class="bg-main-5">Racing</span>
                    </span>

                </a>
                <div class="nk-gap"></div>
                <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                <div class="nk-post-text">
                    <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                </div>
                <div class="nk-gap"></div>
                <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Leer más</a>
                <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
            </div>
            <!-- END: Post -->
        </div>

   <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="assets/images/post-7-mid.jpg" alt="At length one of them called out in a clear">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-6">MOBA</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
                    <div class="nk-post-text">
                        <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
            
            <div class="col-md-6 col-lg-3">
                <!-- START: Post -->
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="assets/images/post-8-mid.jpg" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                    <div class="nk-post-text">
                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>
                <!-- END: Post -->
            </div>
            
        </div>
    </div>
    <!-- END: Latest News -->
