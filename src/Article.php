<?php
namespace Germania\Articles;


class Article extends ArticleAbstract implements ArticleInterface
{

	public function __toString()
	{
		return $this->getName();
	}


}
