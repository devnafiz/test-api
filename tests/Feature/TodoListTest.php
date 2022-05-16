<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\TodoList;

class TodoListTest extends TestCase
{
   
   use RefreshDatabase;
   private $list;

   public function setUp():void{

       parent::setUp();

       $this->list=TodoList::factory()->create(['name'=>'my list']);

   }

    public function test_fetch_all_todo_list()
    {

        
      

      //TodoList::create(['name'=>'my list']);
        //dd(route('todo-list.store'));
        $response = $this->getJson(route('todo-list.store'));
        //response not json data so add json()

        //dd($response->json());
        $this->assertEquals(1,count($response->json()));
        $this->assertEquals('my list',$response->json()[0]['name']);
    }

    public function test_fetch_single_todo_list(){


           //$list=TodoList::factory()->create();
        //action
         $response=$this->getJson(route('todo-list.show',$this->list->id))
         //dd($response);

              ->assertOk()
              ->json();

         $this->assertEquals($response['name'] ,$this->list->name);


    }
}
