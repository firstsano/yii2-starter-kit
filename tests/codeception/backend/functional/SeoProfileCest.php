<?php
namespace tests\codeception\backend;
use tests\codeception\backend\FunctionalTester;

class SeoProfileCest
{
    public function _fixtures()
    {
        return [];
    }

    public function _before(FunctionalTester $I)
    {
        $I->login();
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function testIndexPage(FunctionalTester $I)
    {
        $I->wantTo("ensure index page works");
        $I->openPage('seo-profile/index');

        $I->expectTo('see index page for seo profiles');
        $I->canSeeResponseCodeIs(200);
    }
}
