<p class="byline author vcard italic text-gray-500 text-sm sm:text-base">  
  @if(is_front_page() || is_search())
    <a href="{{ get_category_link(the_category_ID(false)) }}" class="badge badge-{!! $categoryColor !!} not-italic">{{ get_cat_name(the_category_ID(false))}}</a>
  @endif
  <span>{{ __('By', 'sage') }}</span>
  <span rel="author" class="fn">
    {{ get_the_author() }}
  </span>
  <span>{{ __('on', 'sage') }}</span>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date('F jS Y') }}
  </time>
</p>