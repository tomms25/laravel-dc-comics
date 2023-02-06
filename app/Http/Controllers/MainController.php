<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class MainController extends Controller
{
    public function home(){

        $person = Person::all();

        // $data =[
        //     'person' => $person
        // ]

        return view('pages.home', compact('person'));
    }

    public function personShow(Person $person) {

        return view('pages.personShow', compact('person'));
    }

    public function personDelete(Person $person) {

        $person -> delete();
    
        return redirect() -> route('home');
    }

    public function personCreate() {

        return view('pages.personCreate');
    }

    public function personStore(Request $request) {

        $data = $request -> validate([
            'name' => 'required|string|max:32',
            'description' => 'nullable|string',
            'priority' => 'required|integer|min:0|max:10',
        ]);
    
        $person = new Person();
    
        $person -> name = $data['name'];
        $person -> description = $data['description'];
        $person -> priority = $data['priority'];
    
        $person -> save();
    
        return redirect() -> route('home');
    }

    public function personEdit(Person $person) {

        return view('pages.personEdit', compact('person'));
    }

    public function personUpdate(Request $request, Person $person) {

        $data = $request -> validate([
            'name' => 'required|string|max:32',
            'description' => 'nullable|string',
            'priority' => 'required|integer|min:0|max:10',
        ]);
    
        $person -> name = $data['name'];
        $person -> description = $data['description'];
        $person -> priority = $data['priority'];
    
        $person -> save();
    
        return redirect() -> route('home');
    }
    
}
