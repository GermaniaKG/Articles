<?php
namespace Germania\Articles;

use Interop\Container\ContainerInterface;

interface ArticlesInterface extends \IteratorAggregate, \Countable, ContainerInterface
{
    public function push (ArticleInterface $article );
}
