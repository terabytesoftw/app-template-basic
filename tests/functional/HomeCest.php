<?php

namespace Terabytesoft\App\Template\Basic;

use Terabytesoft\App\Template\Basic\FunctionalTester;

/**
 * Class HomeCest.
 *
 * Acceptance tests for codeception
 */
class HomeCest
{
    /**
     * _before
     *
     * @param FunctionalTester $I
     */
    public function _before(FunctionalTester $I): void
    {
        $I->amOnPage('/site/index');
    }

    /**
     * indexPageTest
     *
     * @param FunctionalTester $I
     */
    public function testIndexPageTest(FunctionalTester $I): void
    {
        $I->wantTo('ensure that index page works.');
        $I->expectTo('see page index.');
        $I->see(\Yii::t('AppBasic', 'Web Application'));
    }
}
