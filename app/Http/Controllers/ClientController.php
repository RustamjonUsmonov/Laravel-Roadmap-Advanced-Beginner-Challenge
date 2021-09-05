<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientStoreRequest;
use App\Models\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $clients = Client::select(['name', 'created_at', 'email', 'id'])->withCount(['projects'])->paginate(10);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ClientStoreRequest $request)
    {
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('clients.index')->with(['message' => 'Successfully stored']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $client = Client::findOrFail($id)->first();
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientStoreRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ClientStoreRequest $request, int $id)
    {
        $client = Client::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('clients.index')->with(['message' => 'Successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $client = Client::where('id', $id)->delete();
        return redirect()->route('clients.index')->with(['message' => 'Successfully deleted']);
    }
}
