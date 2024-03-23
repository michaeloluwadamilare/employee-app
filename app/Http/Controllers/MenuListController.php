<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\MenuList;


class MenuListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuLists = MenuList::with('category')
        ->whereIn('status', ['Active', 'Inactive'])
        ->orderBy('category_id')
        ->get();
        return view('admin.menu', compact('menuLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255|unique:menu_lists,name',
            'status' => 'required|in:Active,Inactive,Deactivate',
            'description' => 'nullable|string',
            'amount' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $menu = new MenuList();
        $menu->name = $request->name;
        $menu->status = $request->status;
        $menu->description = $request->description;
        $menu->amount = $request->amount;
        $menu->category_id = $request->category_id;

        $menu->save();

        return redirect()->route('menu-lists')->with('success', 'Category added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('menu_lists.show', compact('menuList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = MenuList::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:menu_lists,name,' . $menu->id,
            'status' => 'required|in:Active,Inactive,Deactivate',
            'description' => 'nullable|string',
            'amount' => 'required|numeric|min:0',
            'category_id' => [
                'required',
                'exists:categories,id',
                Rule::unique('menu_lists')->ignore($menu->id)->where(function ($query) use ($request) {
                    return $query->where('category_id', $request->category_id);
                }),
            ],
        ]);

        $menu->name = $request->name;
        $menu->status = $request->status;
        $menu->description = $request->description;
        $menu->amount = $request->amount;
        $menu->category_id = $request->category;


        $menu->save();
        return redirect()->route('menu-lists')->with('success', 'Menu updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $menu = MenuList::findOrFail($id);
        $menu->status = 'Deactivate';
        $menu->save();

        return redirect()->route('menu-lists')->with('success', 'Menu deleted successfully!');

    }
}
