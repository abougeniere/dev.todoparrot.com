<?php
/**
 * Created by PhpStorm.
 * User: abougeniere
 * Date: 06/05/2015
 * Time: 15:35
 */

use todoparrot\todolist;

class TodolistTest extends TestCase
{

    public function testCanInstantiateTodolist()
    {

        $list = new Todolist;

        $this->assertEquals(get_class($list), 'todoparrot\Todolist');

    }


    public function testNotValidWhenNameMissing()
    {
        $t = new Todolist;

        $this->assertFalse($t->validate());
    }

}