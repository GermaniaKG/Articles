<?php
namespace Germania\Articles;

class Articles implements ArticlesInterface
{

    public $articles = array();


    public function push( ArticleInterface $article )
    {
        $this->articles[ $article->getId() ] = $article;
        return $this;
    }


    /**
     * @implements ContainerInterface
     * @return ArticleInterface
     */
    public function get( $id )
    {
        if ($this->has( $id )) {
            return $this->articles[ $id ];
        }
        throw new ArticleNotFoundException("Could not find Article with ID '$id'");
    }


    /**
     * @implements ContainerInterface
     * @return boolean
     */
    public function has ($id )
    {
        return array_key_exists( $id, $this->articles);
    }



    /**
     * @implements IteratorAggregate
     */
    public function getIterator()
    {
        return new \ArrayIterator( $this->articles );
    }


    /**
     * @implements Countable
     */
    public function count()
    {
        return count($this->articles);
    }
}
