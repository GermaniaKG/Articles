<?php
namespace Germania\Articles;

interface ArticleInterface
{
    public function setId( $id );
    public function getId( );

    public function setArticleNumber( $article_number );
    public function getArticleNumber( );

    public function setName( $name );
    public function getName( );

    public function setSlug( $slug );
    public function getSlug( );

    public function setDescription( $desc );
    public function getDescription( );

    public function setPhoto( $photo );
    public function getPhoto();

    public function setVariants( array $variants );
    public function getVariants();

    public function setDefaultNum( $num );
    public function getDefaultNum();

    public function setPrices( array $prices );
    public function getPrices();



}
