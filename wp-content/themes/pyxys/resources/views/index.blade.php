@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="my-5 py-5 container">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Desculpe, não foi encontrado nenhum resultado!.', 'sage') }}
        </div>
      @endif

      @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
      @endwhile

      {!! get_the_posts_navigation() !!}
  </div>
@endsection
