<?php

namespace tests\codeception\common\_support;

use yii\codeception\BasePage;

/**
 * Represents custom page
 */
class Page extends BasePage
{
    public static function openBy($I, $route)
    {
        $page = new static($I);
        $page->route = $route;
        $I->amOnPage($page->getUrl());
        return $page;
    }
}
