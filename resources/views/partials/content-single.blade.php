<article @php(post_class('prose max-w-none dark:prose-invert dark:prose-p:text-white dark:prose-ul:text-white'))>
  <header class="not-prose">
    {{-- <span class="text-2xl sm:text-3xl text-gray-400 mr-1">/</span> --}}
    <h1 class="entry-title inline font-bold text-2xl sm:text-4xl text-gray-900 dark:text-white">
      {!! $title !!}
    </h1>
    @include('partials.entry-meta')
  </header>

  @if(get_the_post_thumbnail_url())
    <div class="entry-image my-6">
      <img class="absolute my-0 object-cover object-center lg:rounded-xl h-full w-full" src="{{get_the_post_thumbnail_url()}}" alt="">
    </div>
  @endif

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>
