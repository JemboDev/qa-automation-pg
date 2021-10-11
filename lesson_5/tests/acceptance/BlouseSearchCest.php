<?php

class BlouseSearchCest
{
    /**
     * Проверить поиск по тексту и открытие модального окна с товаром
     *  */
    public function searchForBlouseCest(AcceptanceTester $I)
    {
        $searchQueryTopCSS = '#search_query_top';
        $searchQueryTopXPath = '//*[@id="search_query_top"]';
        $searchBoxButtonCSS = '[name="submit_search"]';
        $searchBoxButtonXPath = '//button[@name="submit_search"]';
        $searchResultsCSS = '.heading-counter';
        $searchResultsXPath = '//span[@class="heading-counter"]';
        $itemElementCSS = '[alt="Blouse"]';
        $itemElementXPath = '//img[@alt="Blouse"]';
        $quickViewCSS = 'quick-view';
        $quickViewXPath = '//a[@class="quick-view"]';
        $iFrameCSS = '.fancybox-iframe';
        $iFrameXPath = '//iframe[@class="fancybox-iframe"]';
        $blouseTitleCSS = '[itemprop="name"]';
        $blouseTitleXPath = '//h1[@itemprop="name"]';

        $I->amOnPage('');

        // Ждёмс прогрузку поиска и кликаем
        $I->waitForElement('#search_query_top');
        $I->fillField('#search_query_top', 'Blouse');
        $I->click('#searchbox > button');

        // Ждём прогрузки страницы с результами поиска, а конкретно кнопочки "Quick view" и жмакаем на неё
        $I->waitForElement('.left-block');
        $I->moveMouseOver('.left-block');
        $I->waitForElement('.quick-view');
        $I->click('.quick-view');

        // Ждём пока откроется модальное окно
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForElement('#product > div > div > div.pb-left-column.col-xs-12.col-sm-4.col-md-5');

        // Если это действительно блузка - тест успешно пройден
        $I->see('Blouse', '//*[@id="product"]/div/div/div[2]/h1');
    }
}
