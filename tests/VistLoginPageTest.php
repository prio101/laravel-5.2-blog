<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VistLoginPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     *  should visit landing page then should
     *  click login link and
     *  then see login page
     * */
    public function testVisitLoginPage(){
        $this->visit('/')->click('Login')->assertResponseStatus(200);

    }

    /**
     * Visit the admin page
     *
     * */
    public function testAdminPageVisit(){
        $this->visit('/login')->click('Login')->assertResponseStatus(200);
    }
}
