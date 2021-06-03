<?php

use Codeception\Example;
use Page\Acceptance\Habr;
use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс для рандомного выбора категории
 * @group random
 */
class SelectRandomCategoryCest
{
    /**
     * тест рандомно выбирает категорию и подтверждает это через урл
     * @param Example $data
     * @dataProvider Habr::randkeys
     * @group random
     */
    public function SelectThanAssertRandomCategory(AcceptanceTester $I,Example $data)
    {
        $I->amOnPage(Habr::$URL);
        $I->waitForElementClickable(sprintf(Habr::$randKeys[0], $data['menuPoint']));
        $I->click(sprintf(Habr::$randKeys[0], $data['menuPoint']));
        $I->seeInCurrentUrl(sprintf(Habr::$randKeys[0], $data['name']));
    }


    

    public function getRandomCategory()
    {
        return sprintf(
            '%s',
            $this->getDataForCategorySelect[array_rand($this->getDataForCategorySelect)]
        );
    }
}
