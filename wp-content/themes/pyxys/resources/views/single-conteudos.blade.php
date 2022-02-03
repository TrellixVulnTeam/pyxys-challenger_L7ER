@extends('layouts.app')

@section('content')

    <div class="main-single">

        @include('partials.breadcumbs')

        <div class="container">
            <div class="row">
                <div class="col-md-9 px-0">
                    @while(have_posts()) @php the_post() @endphp
                        @include('partials.content-single-'.get_post_type())
                    @endwhile
                </div>
            </div>
        </div>

        <section class="related-posts">
            <div class="container">
                <h3 class="section-title">Matérias Relacionadas</h3>

                <div class="row">
                    @php
                        $terms = ConteudosController::getCategories(get_the_ID());
                        $posts = ConteudosController::getRelatedPosts($terms);
                    @endphp

                    @if($posts->have_posts())
                        @while($posts->have_posts()) @php $posts->the_post() @endphp
                            @include('partials.related-post')
                        @endwhile
                    @endif
                </div>
            </div>
        </section>

    </div>

@endsection
