<?php

class PrintedDressSearchCest
{
    // tests
    public function searchForFiveGoods(FunctionalTester $I)
    {
        $I->amOnPage(' ');

        // Ждёмс прогрузку поиска и кликаем
        $I->seeElement('//*[@id="search_query_top"]');
        $I->fillField('//*[@id="search_query_top"]', 'Printed dress');
        $I->click('#searchbox > button');

        // Ждём прогрузки страницы с результами поиска и считаем кол-во карточек товара
        $I->seeElement('#center_column > h1 > span.heading-counter');
        $I->seeNumberOfElements('.product-image-container', 5);
    }
}
