@php
    $term_id = ConteudosController::getCategory( get_the_ID(), 'term_id' );
    $term_name = ConteudosController::getCategory( get_the_ID(), 'name' );
@endphp

<div class="container">
    <div class="breadcumbs">
        <a href="{{ home_url() }}">Home</a> - <a href="{{ !intval($term_id) ? '#' : get_term_link($term_id) }}"> {{ $term_name }} </a> - <span>Selo LGPD Report: o que é e qual sua importância?</span>
    </div>
</div>
