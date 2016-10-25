<?php
namespace Germania\Articles;

use Germania\Prices\PricesInterface;
use Germania\Prices\PdoPrices as PdoPricesBase;

/**
 * This extension defines another table name for the prices.
 */
class PdoPrices extends PdoPricesBase implements PricesInterface
{

    public $table = 'germania_article_prices';

}
