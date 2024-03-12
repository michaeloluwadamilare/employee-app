<?php

namespace App\Http\Controllers;

use App\Models\MenuList;
use Illuminate\Http\Request;

class MenuListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menuLists = MenuList::all();
        return view('menu_lists.index', compact('menuLists'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
