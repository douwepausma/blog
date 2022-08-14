<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
  <div class="search-component relative flex tooltip-subject" data-popper-placement="bottom">
    <input
      class="search-field py-[6px] px-8 border border-gray-300 dark:border-gray-700 bg-transparent rounded-xl w-36"
      type="search"
      placeholder="Search"
      value="{{ get_search_query() }}"
      name="s"
      aria-describedby="tooltip"
    >
    <svg class="slash-icon absolute left-[11px] top-1/2 -translate-y-1/2 cursor-text" onclick="document.getElementById('search-field').focus()" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect class="stroke-gray-500" x="0.25" y="0.25" width="17.5" height="17.5" rx="4.75" stroke-width="0.5"/>
      <path class="stroke-gray-500" d="M11.9773 3.86364L7.44318 14.3125H6.52273L11.0568 3.86364H11.9773Z"/>
    </svg>

    <button class="absolute right-[9px] top-1/2 -translate-y-1/2" aria-label="Submit your search request">
      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="fill-primary-900 dark:fill-white dark:group-hover:fill-primary-900" fill-rule="evenodd" clip-rule="evenodd" d="M11.0703 12.8523C9.93046 13.6434 8.54613 14.1071 7.05353 14.1071C3.15797 14.1071 0 10.9491 0 7.05353C0 3.15797 3.15797 0 7.05353 0C10.9491 0 14.1071 3.15797 14.1071 7.05353C14.1071 8.54611 13.6434 9.93041 12.8524 11.0703C13.2133 11.1063 13.5645 11.2625 13.841 11.539L17.8534 15.5514C18.0487 15.7467 18.0487 16.0633 17.8534 16.2585L16.2586 17.8534C16.0633 18.0486 15.7467 18.0486 15.5515 17.8534L11.539 13.8409C11.2625 13.5645 11.1063 13.2133 11.0703 12.8523ZM11.3942 7.05353C11.3942 9.45079 9.45079 11.3942 7.05353 11.3942C4.65626 11.3942 2.7129 9.45079 2.7129 7.05353C2.7129 4.65626 4.65626 2.7129 7.05353 2.7129C9.45079 2.7129 11.3942 4.65626 11.3942 7.05353Z"/>
      </svg>
    </button>
    <div class="tooltip" role="tooltip">Quickly search the site by pressing
      <svg class="inline" style="margin-top: -2.5px;" width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.25" y="0.25" width="17.5" height="17.5" rx="4.75" stroke="white" stroke-width="0.5"/>
        <path d="M11.9773 3.86364L7.44318 14.3125H6.52273L11.0568 3.86364H11.9773Z" stroke="white" fill="white"/>
      </svg>
      <div class="arrow" data-popper-arrow></div>
    </div>
  </div>
</form>