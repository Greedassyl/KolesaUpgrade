<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class Habr
{
    /**
     * Url страницы авторизации
     */
    public static $URL = 'ru';

    /**
     * селектор класса меню категорий
     */
    public static $topMenuCategorySelect = '//li[@class="nav-links__item"]/a[@href="%s"]';

    public static $randKeys = array_rand($getDataForCategorySelect, 2);

    protected $getDataForCategorySelect = [
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/top/"]', 'name' => 'top'],
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/develop/"]', 'name' => 'develop'],
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/admin/"]', 'name' => 'admin'],
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/design/"]', 'name' => 'design'],
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/management/"]', 'name' => 'management'],
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/marketing/"]', 'name' => 'marketing'],
            ['menuPoint' => '//li[@class="nav-links__item"]/a[@href="https://habr.com/ru/flows/popsci/"]', 'name' => 'popsci']
        ];
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Нажимает на кнопку закрытия текста ошибки
     */

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
