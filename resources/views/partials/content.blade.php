<article @php(post_class('mb-6'))>
  <header class="mb-1">
      <a href="{{ get_permalink() }}" class="no-underline">
        <h2 class="entry-title font-bold text-xl dark:text-white">
            {!! $title !!}
        </h2>
      </a>
      @include('partials.entry-meta')
    </header>

    <div class="entry-summary dark:text-white">
      @php(the_excerpt())
    </div>
</article>
