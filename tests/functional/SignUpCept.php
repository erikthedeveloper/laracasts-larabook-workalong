<?php
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a LaraBook account');

$I->amOnPage('/');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$username = 'FooBar';
$I->fillField('Username:', $username);
$I->fillField('Email:', 'foo@bar.com');
$I->fillField('Password:', 'FooBazBar');
$I->fillField('Password Confirmation:', 'FooBazBar');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome');

// @todo
// $I->seeRecord('users', [
//     'username' => $username
// ]);

