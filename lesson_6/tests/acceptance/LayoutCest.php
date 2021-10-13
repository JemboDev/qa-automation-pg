<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

class LayoutCest
{
    /**
     * Сменить отображение результатов поиска с Grid на List
     * */
    public function changeLayout(AcceptanceTester $I)
    {
        $searchPage = new MainPage($I);
        
        $I->amOnPage(MainPage::$URL);
        $I->moveMouseOver(MainPage::$dressesButton);
        $I->waitForElement(MainPage::$summerDressesButton);
        $I->click(MainPage::$summerDressesButton);
        $I->amOnPage(SearchPage::$URL);
        $I->seeElement(SearchPage::$chosenGridButton);
        $I->click(SearchPage::$listButton);
        $I->seeElement(SearchPage::$rightBlockContent);

        // $I->fillField(LoginPage::$loginInput, LoginPage::USERNAME);
        // $I->fillField(LoginPage::$passwordInput, LoginPage::PASSWORD);
        // $I->click(LoginPage::$loginButton);
        // $I->waitForElement(LoginPage::$errorWindowCloseButton);
        // $loginPage->closeErrorWindow();
        // $I->dontSeeElement(LoginPage::$errorWindowCloseButton);
    }
}
