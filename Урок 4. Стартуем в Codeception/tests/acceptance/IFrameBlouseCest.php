<?php

$BlouseMainPageTextCSS ='' ;
$BlouseMainPageTextXPath ='';
$BlouseMainPageContainerCSS ='';
$BlouseMainPageContainerXPath ='';
$BlouseClickableElementCSS = '';
$BlouseClickableElementXPath = '';
$IFrameCSS = '';
$IFrameXPath = '';
$IFrameImageCarouselCSS = '';
$IFrameImageCarouselXPath = '';
$IFrameAddToCartButtonCSS = '';
$IFrameAddToCartButtonXPath = '';


class IFrameBlouseCest
{
    // tests
    public function IFrameBlouseClick(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->waitForElementVisible('.fancybox-iframe');
        $I->switchToIFrame('.fancybox-iframe');
        $I->seeElement('.img-responsive');
        $I->seeElement('.exclusive');
        $I->see('Blouse');
    }
}
