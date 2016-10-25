<?php
namespace Germania\Articles;

interface ArticlesProviderInterface
{
    public function getArticles();
    public function setArticles( ArticlesInterface $articles);
}
