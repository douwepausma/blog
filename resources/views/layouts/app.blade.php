<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main w-full max-w-2xl mt-20 sm:mt-24 m-auto">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif
  
  <div class="menu-mobile fixed bottom-0 right-0 z-40 w-full overflow-hidden h-0">
    <div class="menu-mobile_inner h-full grid gap-4 p-6 dark:text-white bg-white dark:bg-black border-t border-gray-300 dark:border-gray-700"> {{-- Grid template defined in corresponding SASS file --}}
      <nav class="site-nav col-span-3 text-2xl text-right -mx-2 mb-8 flex justify-end items-end">{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => 'false', 'echo' => false]) !!}</nav>
      {!! get_search_form(false) !!}
      <button class="darkModeToggler self-center btn btn-outline btn-icon dark:border-gray-700 dark:hover:border-primary-300 group">
        <svg class="darkModeIconDark" width="18" height="18" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="dark:fill-white dark:group-hover:fill-primary-900" fill-rule="evenodd" clip-rule="evenodd" d="M17.7436 11.3633C17.8654 10.9082 17.3018 10.6081 16.9091 10.8684C15.799 11.6043 14.4674 12.0329 13.0358 12.0329C9.15916 12.0329 6.01652 8.89028 6.01652 5.01364C6.01652 3.58199 6.44513 2.25044 7.18102 1.14032C7.44133 0.747645 7.14127 0.184061 6.68616 0.305825C2.8356 1.33605 0 4.8492 0 9.02465C0 14.0089 4.04053 18.0494 9.02478 18.0494C13.2002 18.0494 16.7134 15.2138 17.7436 11.3633Z" fill="white"/>
        </svg>
        <svg class="darkModeIconLight" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path class="dark:fill-white dark:group-hover:fill-primary-900" fill-rule="evenodd" clip-rule="evenodd" d="M8 0.5C8 0.223858 8.22386 0 8.5 0H9.5C9.77614 0 10 0.223858 10 0.5V3.5C10 3.77614 9.77614 4 9.5 4H8.5C8.22386 4 8 3.77614 8 3.5V0.5ZM12 9C12 10.6569 10.6569 12 9 12C7.34315 12 6 10.6569 6 9C6 7.34315 7.34315 6 9 6C10.6569 6 12 7.34315 12 9ZM15.0104 2.28248C14.8152 2.08722 14.4986 2.08722 14.3033 2.28248L12.182 4.4038C11.9867 4.59906 11.9867 4.91564 12.182 5.11091L12.8891 5.81801C13.0844 6.01327 13.4009 6.01327 13.5962 5.81801L15.7175 3.69669C15.9128 3.50143 15.9128 3.18485 15.7175 2.98958L15.0104 2.28248ZM8 14.5C8 14.2239 8.22386 14 8.5 14H9.5C9.77614 14 10 14.2239 10 14.5V17.5C10 17.7761 9.77614 18 9.5 18H8.5C8.22386 18 8 17.7761 8 17.5V14.5ZM5.11091 12.182C4.91565 11.9867 4.59906 11.9867 4.4038 12.182L2.28248 14.3033C2.08722 14.4986 2.08722 14.8151 2.28248 15.0104L2.98959 15.7175C3.18485 15.9128 3.50143 15.9128 3.69669 15.7175L5.81802 13.5962C6.01328 13.4009 6.01328 13.0844 5.81802 12.8891L5.11091 12.182ZM17.5 8C17.7761 8 18 8.22386 18 8.5V9.5C18 9.77614 17.7761 10 17.5 10H14.5C14.2239 10 14 9.77614 14 9.5V8.5C14 8.22386 14.2239 8 14.5 8H17.5ZM15.7175 15.0104C15.9128 14.8152 15.9128 14.4986 15.7175 14.3033L13.5962 12.182C13.4009 11.9867 13.0844 11.9867 12.8891 12.182L12.182 12.8891C11.9867 13.0844 11.9867 13.4009 12.182 13.5962L14.3033 15.7175C14.4986 15.9128 14.8152 15.9128 15.0104 15.7175L15.7175 15.0104ZM3.5 8C3.77614 8 4 8.22386 4 8.5V9.5C4 9.77614 3.77614 10 3.5 10H0.5C0.223858 10 0 9.77614 0 9.5V8.5C0 8.22386 0.223858 8 0.5 8H3.5ZM5.81802 5.11091C6.01328 4.91565 6.01328 4.59906 5.81802 4.4038L3.6967 2.28248C3.50143 2.08722 3.18485 2.08722 2.98959 2.28248L2.28248 2.98959C2.08722 3.18485 2.08722 3.50143 2.28248 3.69669L4.4038 5.81801C4.59906 6.01328 4.91565 6.01328 5.11091 5.81801L5.81802 5.11091Z" fill="black"/>
        </svg>
      </button>
      <div class="w-[50px] h-[50px]"></div>
    </div> 
  </div>
  <button class="menu-mogile-toggler fixed bottom-6 right-6 z-40 btn btn-{!! $categoryColor !!} p-3 md:hidden">
    <svg width="30" height="30" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect rx=".5" y="12" width="14" height="3" id="icon-bar-1" class="fill-{!! $categoryColor !!}-900" transform-origin="5.1109 2.98959"/>
      <rect rx=".5" x="4" y="3" width="14" height="3" id="icon-bar-2" class="fill-{!! $categoryColor !!}-900" transform-origin="2.98959 12.8891"/>
    </svg>
  </button>

@include('sections.footer')