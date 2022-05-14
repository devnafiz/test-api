<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
   
    public function test_fetch_todo_list()
    {

      
        //dd(route('todo-list.store'));
        $response = $this->getJson(route('todo-list.store'));
        //response not json data so add json()

        //dd($response->json());
        $this->assertEquals(1,count($response->json()));
    }
}
