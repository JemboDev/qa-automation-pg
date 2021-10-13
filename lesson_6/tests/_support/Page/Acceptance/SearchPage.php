<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * Селектор выбранной кнопки Grid
     */
    public static $chosenGridButton = '//li[@id="grid" and @class="selected"]';

    /**
     * Селектор кнопки List
     */
    public static $listButton = '//li[@id="list"]';

    /**
     * Селектор блока с кнопкой Add to card при отображении списком
     */
    public static $rightBlockContent = '//div[@class="right-block-content row"]';

    /**
     * Урл страницы с результатами поиска
     */
    public static $URL = '/index.php?id_category=11&controller=category';

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
