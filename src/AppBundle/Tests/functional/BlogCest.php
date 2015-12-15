<?php
namespace AppBundle;

use AppBundle\FunctionalTester;
use AppBundle\Entity\Post;

class BlogCest
{
    public function postsOnIndexPage(FunctionalTester $I)
    {
        $I->amOnPage('/en/blog/');
        $I->seeNumberOfElements('article.post', Post::NUM_ITEMS);
    }
}

