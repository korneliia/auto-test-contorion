<?php

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToLogin(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('#popin_tc_privacy_button');
        $I->amOnPage('/login');
        $I->fillField('#login_email', 'ko.hrishchuk+qa@gmail.com');
        $I->fillField('#login_password', 'TestingLogin1');
        $I->click('[data-qa="loginButtonSubmit"]');
        $I->see('Du bist nun bei Contorion angemeldet.');
    }
}
