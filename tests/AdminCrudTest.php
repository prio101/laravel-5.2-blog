<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminCrudTest extends TestCase
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

    /*
     *  Visit the admin panel and response ok
     * */

    public function testAdminResponse(){
        $this->visit('/admin')->assertResponseStatus(200);
    }

    /*
     *  Should visit single post when click show
     * */
    public function testShowPostWhenClicked() {
        $this->visit('/post/1')->assertResponseStatus(200);
    }

    /*
     * Should visit the edit post page with ok response
     * */
    public function testEditPost() {
        $this->visit('/admin/edit/post/1')->assertResponseStatus(200);
    }
}
