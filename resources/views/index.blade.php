@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if(is_front_page())
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-8 -mx-4">
      <a href="/category/faith" class="card bg-gradient-to-r transition-colors duration-150 rounded-xl px-4 py-3 border border-gray-300 dark:border-gray-700 hover:border-gray-400 dark:hover:border-gray-400 dark:text-white">
        <span class="text-2xl font-bold"><span class="text-amber-400 mr-2" style="vertical-align: 2px;">/</span>Faith</span>
        <p>
          Devotions, illustrations, stories & sermons
        </p>
      </a>
      <a href="/category/coding" class="card bg-gradient-to-r transition-colors duration-150 rounded-xl px-4 py-3 border border-gray-300 dark:border-gray-700 hover:border-gray-400 dark:hover:border-gray-400 dark:text-white">
        <span class="text-2xl font-bold"><span class="text-blue-400 mr-2" style="vertical-align: 2px;">/</span>Coding</span>
        <p>
          Projects, guides, tools, tips & tricks
        </p>
      </a>
      <a href="/category/reviews" class="card bg-gradient-to-r transition-colors duration-150 rounded-xl px-4 py-3 border border-gray-300 dark:border-gray-700 hover:border-gray-400 dark:hover:border-gray-400 dark:text-white">
        <span class="text-2xl font-bold"><span class="text-emerald-400 mr-2" style="vertical-align: 2px;">/</span>Reviews</span>
        <p>
          Pretty much anything I think off to review
        </p>
      </a>
    </div>
  @endif

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {{-- {!! get_search_form(false) !!} --}}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
