<?php

class ArticlePageCest
{
    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage(' ');
        $I->seeElement('#app > div.tm-layout__wrapper > div.tm-layout > div.tm-base-layout__header > div > div > div > div > nav > a:nth-child(2)');
        $I->click('#app > div.tm-layout__wrapper > div.tm-layout > div.tm-base-layout__header > div > div > div > div > nav > a:nth-child(2)');
        $I->seeElement('//*[@id="581558"]/div[1]/h2/a/span');

        codecept_debug($I->grabTextFrom('//*[@id="581558"]/div[1]/h2/a/span'));

        $I->click('//*[@id="581558"]/div[1]/h2/a/span');
        $I->seeElement('//*[@id="post-content-body"]/div/p[1]');
    }
}
