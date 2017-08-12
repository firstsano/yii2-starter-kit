<?php
namespace tests\codeception\common\unit;



use Yii;
use Codeception\Specify;
use common\models\LoginForm;
use tests\codeception\common\fixtures\UserFixture;
use yii\codeception\TestCase as Yii2TestCase;

class UserTest extends Yii2TestCase
{
    public $appConfig = '@tests/codeception/config/common/unit.php';

    /**
     * @var \tests\codeception\common\UnitTester
     */
    protected $tester;


    protected function _before()
    {
    }


    protected function _after()
    {
    }

    // tests
    public function testUser()
    {
    }
}