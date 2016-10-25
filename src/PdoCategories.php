<?php
namespace Germania\Articles;

use Germania\Categories\PdoCategories as PdoCategoriesBase;
use Germania\Categories\CategoriesInterface;

/**
 * This extension defines another table name for the categories.
 */
class PdoCategories extends PdoCategoriesBase implements CategoriesInterface
{

    public static $table = 'germania_article_categories';

}
