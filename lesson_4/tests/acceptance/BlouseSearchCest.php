<?php

class BlouseSearchCest
{
    /**
     * Проверить поиск по тексту и открытие модального окна с товаром
     *  */
    public function searchForBlouseCest(AcceptanceTester $I)
    {
        $I->amOnPage(' ');

        // Ждёмс прогрузку поиска и кликаем
        $I->waitForElement('#search_query_top');
        $I->fillField('#search_query_top', 'Blouse');
        $I->click('#searchbox > button');

        // Ждём прогрузки страницы с результами поиска, а конкретно кнопочки "Quick view" и жмакаем на неё
        $I->waitForElement('#center_column > ul > li > div > div.left-block > div > a.product_img_link > img');
        $I->moveMouseOver('#center_column > ul > li > div > div.left-block > div > a.product_img_link > img');
        $I->waitForElement('#center_column > ul > li > div > div.left-block > div > a.quick-view > span');
        $I->click('#center_column > ul > li > div > div.left-block > div > a.quick-view > span');

        // Ждём пока откроется модальное окно
        $I->switchToIFrame('.fancybox-iframe');
        $I->waitForElement('#product > div > div > div.pb-left-column.col-xs-12.col-sm-4.col-md-5');

        // Если это действительно блузка - тест успешно пройден
        $I->see('Blouse', '//*[@id="product"]/div/div/div[2]/h1');
    }
}
