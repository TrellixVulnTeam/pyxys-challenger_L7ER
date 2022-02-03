<div class="col-md-4">
    <article class="post">

        <header>
            <div class="post-thumbnail" style="background: url( {{ get_the_post_thumbnail_url(get_the_ID(), 'large') }} )">
            </div>
        </header>

        <footer class="post-footer">
            <a title="{{ the_title_attribute() }}" rel="dofollow" href="{{ the_permalink() }}">
                <h2 class="post-title">{{ the_title() }}</h2>
            </a>

            <p class="post-excerpt">{{ ConteudosController::getSubTitle(get_the_ID()) }}</p>
        </footer>

    </article>
</div>
