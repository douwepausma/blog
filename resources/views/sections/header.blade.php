<header id="site-header" class="banner fixed z-10 flex items-center p-6 bg-white dark:bg-black dark:text-white w-screen left-0 top-0">
  <div id="site-title" class="mr-2 sm:mr-3">
    <a class="brand text-base xs:text-xl font-bold" href="{{ home_url('/') }}">
      <span class="text-{!! $categoryColor !!}-400">blog</span>.douwepausma
    </a>
  </div>
  @if(!is_front_page())
    <span class="mr-2 sm:mr-3">/</span><nav class="site-nav inline-block">{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => 'false', 'echo' => false]) !!}</nav>
  @endif
  <div id="site-actions" class="flex gap-4 ml-auto hidden md:flex">
    {!! get_search_form(false) !!}
    <button class="darkModeToggler btn btn-outline btn-icon dark:border-gray-700 dark:hover:border-primary-300 group tooltip-subject" data-popper-placement="bottom" aria-describedby="tooltip" aria-label="Toggle dark mode">
      <svg class="darkModeIconDark" width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="dark:fill-white dark:group-hover:fill-primary-900" fill-rule="evenodd" clip-rule="evenodd" d="M17.7436 11.3633C17.8654 10.9082 17.3018 10.6081 16.9091 10.8684C15.799 11.6043 14.4674 12.0329 13.0358 12.0329C9.15916 12.0329 6.01652 8.89028 6.01652 5.01364C6.01652 3.58199 6.44513 2.25044 7.18102 1.14032C7.44133 0.747645 7.14127 0.184061 6.68616 0.305825C2.8356 1.33605 0 4.8492 0 9.02465C0 14.0089 4.04053 18.0494 9.02478 18.0494C13.2002 18.0494 16.7134 15.2138 17.7436 11.3633Z" fill="white"/>
      </svg>
      <svg class="darkModeIconLight" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="dark:fill-white dark:group-hover:fill-primary-900" fill-rule="evenodd" clip-rule="evenodd" d="M8 0.5C8 0.223858 8.22386 0 8.5 0H9.5C9.77614 0 10 0.223858 10 0.5V3.5C10 3.77614 9.77614 4 9.5 4H8.5C8.22386 4 8 3.77614 8 3.5V0.5ZM12 9C12 10.6569 10.6569 12 9 12C7.34315 12 6 10.6569 6 9C6 7.34315 7.34315 6 9 6C10.6569 6 12 7.34315 12 9ZM15.0104 2.28248C14.8152 2.08722 14.4986 2.08722 14.3033 2.28248L12.182 4.4038C11.9867 4.59906 11.9867 4.91564 12.182 5.11091L12.8891 5.81801C13.0844 6.01327 13.4009 6.01327 13.5962 5.81801L15.7175 3.69669C15.9128 3.50143 15.9128 3.18485 15.7175 2.98958L15.0104 2.28248ZM8 14.5C8 14.2239 8.22386 14 8.5 14H9.5C9.77614 14 10 14.2239 10 14.5V17.5C10 17.7761 9.77614 18 9.5 18H8.5C8.22386 18 8 17.7761 8 17.5V14.5ZM5.11091 12.182C4.91565 11.9867 4.59906 11.9867 4.4038 12.182L2.28248 14.3033C2.08722 14.4986 2.08722 14.8151 2.28248 15.0104L2.98959 15.7175C3.18485 15.9128 3.50143 15.9128 3.69669 15.7175L5.81802 13.5962C6.01328 13.4009 6.01328 13.0844 5.81802 12.8891L5.11091 12.182ZM17.5 8C17.7761 8 18 8.22386 18 8.5V9.5C18 9.77614 17.7761 10 17.5 10H14.5C14.2239 10 14 9.77614 14 9.5V8.5C14 8.22386 14.2239 8 14.5 8H17.5ZM15.7175 15.0104C15.9128 14.8152 15.9128 14.4986 15.7175 14.3033L13.5962 12.182C13.4009 11.9867 13.0844 11.9867 12.8891 12.182L12.182 12.8891C11.9867 13.0844 11.9867 13.4009 12.182 13.5962L14.3033 15.7175C14.4986 15.9128 14.8152 15.9128 15.0104 15.7175L15.7175 15.0104ZM3.5 8C3.77614 8 4 8.22386 4 8.5V9.5C4 9.77614 3.77614 10 3.5 10H0.5C0.223858 10 0 9.77614 0 9.5V8.5C0 8.22386 0.223858 8 0.5 8H3.5ZM5.81802 5.11091C6.01328 4.91565 6.01328 4.59906 5.81802 4.4038L3.6967 2.28248C3.50143 2.08722 3.18485 2.08722 2.98959 2.28248L2.28248 2.98959C2.08722 3.18485 2.08722 3.50143 2.28248 3.69669L4.4038 5.81801C4.59906 6.01328 4.91565 6.01328 5.11091 5.81801L5.81802 5.11091Z" fill="black"/>
      </svg>
      <div class="tooltip" role="tooltip">Switch to dark or light mode!<div class="arrow" data-popper-arrow></div></div>
    </button>
  </div>
</header>
