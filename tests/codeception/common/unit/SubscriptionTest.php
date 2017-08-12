<?php

namespace tests\codeception\common\unit;

use Yii;
use common\models\Subscription;
use tests\codeception\common\fixtures\SubscriptionFixture;
use yii\codeception\DbTestCase;

class SubscriptionTest extends DbTestCase
{
    public $appConfig = '@tests/codeception/config/common/unit.php';

    /**
     * @var \tests\codeception\common\UnitTester
     */
    protected $tester;


    public function fixtures()
    {
        return [
            'subscriptions' => [
                'class' => SubscriptionFixture::className(),
                'dataFile' => '@tests/codeception/common/fixtures/data/subscription.php',
            ]
        ];
    }

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testIsBlockedDefaultValue()
    {
        $subscription = new Subscription(['email' => 'test@mail.ru']);
        $this->assertTrue($subscription->save());
        $this->assertFalse($subscription->is_blocked);
    }

    public function testEmailIsNotBig()
    {
        $longEmail = str_repeat('a', 200) . "@mail.ru";
        $subscription = new Subscription(['email' => $longEmail]);
        $this->assertFalse($subscription->validate());
    }

    public function testEmailUniqueness()
    {
        $subscription = new Subscription(['email' => $this->subscriptions[0]['email']]);
        $this->assertFalse($subscription->save());
    }
}