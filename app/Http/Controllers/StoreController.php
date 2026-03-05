<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Role;
use App\Helpers\Common_function;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $stores = Store::all();
        return view('admin.store.list', compact('stores'));
    }

    public function add(){
        $roles = Role::get();
        return view('admin.store.add',compact('roles'));
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'store_name' => 'required|string|max:255',
            'store_url' => 'required|string|max:255',
            'store_music_url' => 'required|url',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ]);

        $logoPath = "";
        if ($request->hasFile('logo')) {
            $file_name = 'logo_' . $request->logo->hashName();
            Common_function::store_file($request->logo, '/logo', $file_name);
            $logoPath = $file_name;
        }

        Store::create([
            'store_name' => $validated['store_name'],
            'store_slug' => $validated['store_url'],
            'music_url' => $validated['store_music_url'],
            'radio_url' => $request->radio_url,
            'store_logo' => $logoPath
        ]);

        return redirect()->route('admin.store')->with('success', 'Store created successfully!!');
    }

    public function edit(int $id)
    {
        $roles = Role::all();
        $stores = Store::findOrFail($id);
        
        return view('admin.store.edit', compact('roles', 'stores'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'store_id' => 'required|integer|exists:store,id',
            'store_name' => 'required|string|max:255',
            'store_url' => 'required|string|max:255',
            'store_music_url' => 'required|url',
            'logo' => 'nullable|image|max:1024'
        ]);

        $store = Store::findOrFail($validated['store_id']);

        $data = [
            'store_name' => $validated['store_name'],
            'store_slug' => $validated['store_url'],
            'music_url' => $validated['store_music_url'],
            'radio_url' => $request->radio_url,
        ];

        if ($request->hasFile('logo')) {
            $file_name = 'logo_' . $request->logo->hashName();
            Common_function::store_file($request->logo, '/logo', $file_name);
            $data['store_logo'] = $file_name;
        }

        $store->update($data);

        return redirect()->route('admin.store')->with('success', 'Store updated successfully!!');
    }

    public function delete(int $id)
    {
        Store::findOrFail($id)->delete();
        
        return redirect()->route('admin.store')->with('success', 'Store deleted successfully!!');
    }
}
