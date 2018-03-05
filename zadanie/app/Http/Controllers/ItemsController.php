<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CreateItemRequest;
use App\Item;
use App\Price;
use Request;


class ItemsController extends Controller
{
	//Strona główna
	public function index()
	{
	    $items = Item::latest()->get();
	    return view('welcome')->with('items', $items);
	}

	//Formularz dodawnia produktu
	public function create()
	{   
	    return view('items.create');
	}

	//Dodawanie produktu
	public function store(CreateItemRequest $request)
	{
        Item::create($request->all());
        $request->session()->flash('item_create', 'Produkt został dodany');
        return redirect('/');
	}

	public function edit($id)
	{
        $items = Item::findOrFail($id);
        return view('items.edit')->with('items',$items);
	}

	public function update($id, CreateItemRequest $request)
    {
       $items = Item::findOrFail($id);
       $items->title = $request->input('title');
       $items->description = $request->input('description');
       $items->price = $request->input('price');
       $items->save();
       $request->session()->flash('item_update', 'Produkt został poprawiony');
       return redirect('/')->with('items',$items);;
    }


    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        session()->flash('item_update', 'Produkt został usunięty');
        return redirect('/');
            
    }
}
