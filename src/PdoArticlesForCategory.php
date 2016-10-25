<?php
namespace Germania\Articles;

class PdoArticlesForCategory extends PdoArticles implements ArticlesInterface
{


    /**
     * @param \PDO                  $pdo           PDO handler
     * @param string                $category_slug description
     * @param Callable              $prices        Callable for reading prices that accepts article ID
     * @param ArticleInterface|null $article       Optional: Article template object
     */
    public function __construct( \PDO $pdo, $category_slug, Callable $prices, ArticleInterface $article = null )
    {
        $this->pdo    = $pdo;
        $this->prices = $prices;

        // ID is listed twice here in order to use it with FETCH_UNIQUE as array key
        $sql = 'SELECT DISTINCT
        W.id,
        W.id                         AS id,
        W.article_slug           AS slug,
        W.article_default_num    AS default_num,
        W.article_name           AS name,
        W.article_number         AS article_number,
        W.article_variants       AS variants,
        W.article_description    AS description,
        W.article_photo          AS photo,
        C.category_name
        FROM germania_articles W

        LEFT JOIN germania_articles_mm Wmm
        ON W.id = Wmm.article_id

        LEFT JOIN germania_article_categories C
        ON Wmm.category_id = C.id

        WHERE W.is_active > 0
        AND   C.category_slug = :category_slug

        ORDER BY W.article_name, W.article_number';

        $stmt = $pdo->prepare( $sql );

        $stmt->setFetchMode( \PDO::FETCH_CLASS, $article ? get_class($article) : Article::class );

        if (!$stmt->execute([
            'category_slug' => $category_slug
        ])):
            throw new \RuntimeException("Could not retrieve Articles from database");
        endif;

        $this->articles = $stmt->fetchAll(\PDO::FETCH_UNIQUE);


        $this->buildObjects();
    }




}
