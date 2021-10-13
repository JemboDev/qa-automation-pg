<?php

use Page\Acceptance\LoginPage;

class FailedLoginCest
{
    /**
     * Проверить закрытие диалогового окна после неудачного логина
     * */
    public function closeWindowAfterFail(AcceptanceTester $I)
    {
        $loginPage = new LoginPage($I);
        
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$loginInput, LoginPage::USERNAME);
        $I->fillField(LoginPage::$passwordInput, LoginPage::PASSWORD);
        $I->click(LoginPage::$loginButton);
        $I->waitForElement(LoginPage::$errorWindowCloseButton);
        $loginPage->closeErrorWindow();
        $I->dontSeeElement(LoginPage::$errorWindowCloseButton);
    }
}
