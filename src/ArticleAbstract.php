<?php
namespace Germania\Articles;

abstract class ArticleAbstract implements ArticleInterface
{
    public $id;
    public $slug;
    public $name;
    public $description;
    public $article_number;
    public $variants = array();
    public $photo;
    public $default_num;
    public $prices = array();


    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of slug.
     *
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Sets the value of slug.
     *
     * @param mixed $slug the slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the value of article_number.
     *
     * @return mixed
     */
    public function getArticleNumber()
    {
        return $this->article_number;
    }

    /**
     * Sets the value of article_number.
     *
     * @param mixed $article_number the article number
     *
     * @return self
     */
    public function setArticleNumber($article_number)
    {
        $this->article_number = $article_number;

        return $this;
    }

    /**
     * Gets the value of variants.
     *
     * @return mixed
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * Sets the value of variants.
     *
     * @param array $variants the variants
     *
     * @return self
     */
    public function setVariants( array $variants)
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the photo
     *
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Gets the value of default_num.
     *
     * @return mixed
     */
    public function getDefaultNum()
    {
        return $this->default_num;
    }

    /**
     * Sets the value of default_num.
     *
     * @param mixed $default_num the default num
     *
     * @return self
     */
    public function setDefaultNum($default_num)
    {
        $this->default_num = $default_num;

        return $this;
    }

    /**
     * Gets the value of prices.
     *
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets the value of prices.
     *
     * @param mixed $prices the prices
     *
     * @return self
     */
    public function setPrices( array $prices)
    {
        $this->prices = $prices;

        return $this;
    }


}
