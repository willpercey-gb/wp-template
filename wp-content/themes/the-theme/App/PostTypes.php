<?php

namespace App;

use UWebPro\WordPress\PostType;

class PostTypes
{
    public const NEW_POST_TYPE = 'post_type';

    public const NEW_POST_TYPE_CATEGORY = 'post_type_category';

    public function __construct()
    {

        $types = new PostType();

        $types->new()->setTranslations('New Post Type', 'New Post Types')
            ->customIcon('dashicons-calendar-alt')
            ->register(self::NEW_POST_TYPE)
            ->registerTaxonimies('Post Type Category', 'Post Type Categories')
            ->init();

    }
}
