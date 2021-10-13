<?php
namespace Page\Acceptance;

class MainPage
{
    /**
     * Селектор для кнопки Dresses
     */
    public static $dressesButton = '(//a[@class="sf-with-ul" and @title="Dresses"])[2]';
    
    /**
     * Селектор для кнопки Summer Dresses
     */
    public static $summerDressesButton = '(//a[@title="Summer Dresses"])[2]';

    /**
     * Урл главной страницы
     */
    public static $URL = '';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
