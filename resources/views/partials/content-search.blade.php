<article @php(post_class('mb-6'))>
  <a href="{{ get_permalink() }}" class="no-underline">
    <header class="mb-1">
      <h2 class="entry-title font-bold text-xl dark:text-white">
          {!! $title !!}
      </h2>
      @include('partials.entry-meta')
    </header>

    <div class="entry-summary dark:text-white">
      @php(the_excerpt())
  </div>
  </a>
</article>
