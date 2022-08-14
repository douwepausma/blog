<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'categoryColor' => $this->categoryColor(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }
        
        if (is_category()) {
            $category_id = get_category( get_query_var( 'cat' ) )->cat_ID;

            return get_cat_name($category_id);
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    /**
     * Returns the current category color.
     *
     * @return string
     */
    public function categoryColor()
    {
        if (is_category()) {
            $category_id = get_query_var( 'cat' );
            $color = get_field('category_color', get_term($category_id));
            
            return $color;
        }
        
        $category_id = get_the_category()[0]->cat_ID;
        $color = get_field('category_color', get_term($category_id));
        
        return $color;
    }
}
