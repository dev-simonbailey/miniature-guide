<?php

namespace App\Http\Controllers;

use App\BlueSky\Scratch;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('order.list', [
            'scratchData' => Scratch::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        // you may need more complex form alidation, in which case you can create a class just for that
        // https://laravel.com/docs/8.x/validation#form-request-validation
        $request->validate(
            [
                'post' => 'bail|required|unique:scratch_table|max:255',
            ]);

        $user = 1; // would come from authed user
        $postData = $request->all();
        $postData[Scratch::FIELD_USER_ID] = $user;

        $scratch = Scratch::create(
            $postData
        );

        return redirect()->route('order.show', ['id' => $scratch->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('order.show', [
            'order' => Scratch::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        return view('order.edit', [
            'order' => Scratch::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'post' => 'bail|required|unique:scratch_table|max:255',
            ]);
        $scratch = Scratch::findOrFail($id);
        $scratch->update($request->all());

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scratch = Scratch::find($id);
        $scratch->delete();
    }
}
