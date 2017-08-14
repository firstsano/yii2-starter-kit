<?php
namespace tests\codeception\backend;
use tests\codeception\backend\FunctionalTester;
use tests\codeception\common\fixtures\SubscriptionFixture;
use yii\helpers\Url;

class SubscriptionCest
{
    public function _fixtures()
    {
        return [
            'subscription' => [
                'class' => SubscriptionFixture::className(),
                'dataFile' => '@tests/codeception/common/fixtures/data/subscription.php',
            ]
        ];
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
        $I->openPage('subscription/index');

        $I->expectTo('see index page for descriptions');
        $I->canSeeResponseCodeIs(200);
    }

    public function testViewPage(FunctionalTester $I)
    {
        $subscription = $I->grabFixture('subscription', 0);

        $I->wantTo("ensure view page works");
        $I->openPage(['subscription/view', 'id' => $subscription->id]);

        $I->expectTo('see response code of success');
        $I->canSeeResponseCodeIs(200);

        $I->expectTo("see subscription's email");
        $I->canSee($subscription->email);
    }
}
