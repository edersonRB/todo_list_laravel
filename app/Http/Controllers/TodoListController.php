<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function index() {
        //return view('tasks', ['listItems' => ListItem::all()] );
        return view('tasks', ['listItems' => ListItem::orderBy('updated_at','DESC')->get()] );
    }

    public function saveItem(Request $request)
    {
        $newListItem = new ListItem;
        
        if(strlen($request->listItem)>60)
        {
            $message='Item muito grande!';
            return redirect('/');
        }
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        
        return redirect('/');
    }

    public function editItem($id,Request $request)
    {
        $listItem = ListItem::find($id);

        if(strlen($request->editingItem)>60)
        {
            return redirect('/');
        }
        else if($request->editingItem!='')
        {
            $listItem->name = $request->editingItem;
            $listItem->update();     
        }
        else{
            (new TodoListController)->deleteItem($id);
        }

        return redirect('/');
    }

    public function markComplete($id)
    {
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
    }

    public function markIncomplete($id)
    {
        $listItem = ListItem::find($id);
        $listItem->is_complete = 0;
        $listItem->save();
        
        return redirect('/');
    }

    public function deleteItem($id)
    {
        $listItem = ListItem::find($id);
        $listItem->delete();
        
        return redirect('/');
    }
    
}
