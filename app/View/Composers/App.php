<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'categoryColor' => $this->categoryColor(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
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
        if (is_single()) {
            $category_id = get_the_category()[0]->cat_ID;
            $color = get_field('category_color', get_term($category_id));

            return $color;
        }
        if (is_home() || is_search()) {
            return 'primary';
        }
        return;
    }
}
