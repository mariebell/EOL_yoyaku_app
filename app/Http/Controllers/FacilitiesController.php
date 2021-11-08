<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Facility;
use App\Model\Prefecture;

class FacilitiesController extends Controller
{
    public function index() {
        $facilities = Facility::all();
        $prefectures = Prefecture::all();
        return view('facilities.index', ['facilities' => $facilities, 'prefectures' => $prefectures]);
    }

    public function add() {
        return view('facilities.add', ['facility' => []]);
    }

    public function create(Request $request) {
        $facility = new Facility();
        $facility->administrator_id = 0;
        $facility->name = $request->name;
        $facility->phone = $request->phone;
        $facility->email = $request->email;
        $facility->prefecture_id = $request->prefecture_id;
        $facility->municipality_id = $request->municipality_id;
        $facility->stations_id = '0';
        $facility->address = '';
        $facility->open_weekdays = '';
        $facility->number_of_unit = 0;
        $facility->established = '2020-01-01';
        $facility->delete_flag = 0;
        $facility->url = $request->url;

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'prefecture_id' => 'required|integer',
            'municipality_id' => 'required|integer',
            'url' => 'url',
        ]);
        $facility->save();
        return redirect(action('FacilitiesController@index'));
    }

    public function show($id = null) {
        $facility = Facility::where('id', $id)->firstOrFail();
        return view('facilities.show', ['facility' => $facility]);
    }

    public function edit($id = null) {
        $facility = Facility::where('id', $id)->firstOrFail();
        return view('facilities.edit', ['facility' => $facility]);
    }

    public function update(Request $request, $id) {
        $facility = Facility::find($id);
        $facility->name = $request->name;
        $facility->phone = $request->phone;
        $facility->email = $request->email;
        $facility->prefecture_id = $request->prefecture_id;
        $facility->municipality_id = $request->municipality_id;
        $facility->url = $request->url;
        $facility->saveOrFail();

        return redirect(action('FacilitiesController@show', ['id' => $facility->id]));
    }

    public function destroy() {

    }
}
