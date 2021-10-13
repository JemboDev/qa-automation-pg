<?php
namespace Page\Acceptance;

class LoginPage
{
    /**
     * Стандартный юзернейм для фэйла при авторизации
     */
    public const USERNAME = "locked_out_user";

    /**
     * Стандартный пасс для юзера
     */
    public const PASSWORD = "secret_sauce";

    /**
     * Селектор для поля ввода логина
     */
    public static $loginInput = '#user-name';

    /**
     * Селектор для поля ввода пароля
     */
    public static $passwordInput = '#password';

    /**
     * Селектор для кнопки логина
     */
    public static $loginButton = '#login-button';

    /**
     * Селектор для кнопки закрытия окна ошибки
     */
    public static $errorWindowCloseButton = '//button[@class="error-button"]';

    /**
     * Урл страницы авторизации
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

    /**
     * Закрывает окно с ошибкой авторизации
     */
    public function closeErrorWindow()
    {
        $this->acceptanceTester->click(self::$errorWindowCloseButton);
    }

}
