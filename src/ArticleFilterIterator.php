<?php
namespace Germania\Articles;


class ArticleFilterIterator extends \FilterIterator
{
    public $article_id;

    public function __construct(\Traversable $iterator , ArticleInterface $article)
    {
        parent::__construct( $iterator instanceOf \IteratorAggregate ? $iterator->getIterator() : $iterator);

        $this->article_id = $article->getId();
    }

    public function accept()
    {
        $current = $this->getInnerIterator()->current();
        return ($current instanceOf ArticlesProviderInterface
            and $current->getArticles()->has( $this->article_id ));
    }
}
