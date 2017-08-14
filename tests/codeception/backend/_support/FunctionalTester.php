<?php

namespace tests\codeception\backend;

use Yii;
use tests\codeception\common\_support\Page;
use tests\codeception\backend\_pages\LoginPage;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;

   /**
    * Define custom actions here
    */
   public function login()
   {
       $loginPage = LoginPage::openBy($this);
       $loginPage->login('webmaster', 'webmaster');
   }

   public function openPage($route)
   {
       Page::openBy($this, $route);
   }
}
