<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
  public function index(){

    $list=TodoList::all();

    return response($list);
  }


  public function show($id){
           $list=TodoList::findOrFail($id);
          return response($list);
  }
}
