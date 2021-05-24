<?php

class FiveDressCest
{

    /**
     * Этот тест проверяет что количество найденных товаров составляет 
     * 5 штук
     */
    public function FindFiveDressesInSearchResults(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container', 5);
        
    }
}