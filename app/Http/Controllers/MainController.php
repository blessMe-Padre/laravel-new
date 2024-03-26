<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function reviews() {
        $reviews = new ContactModel();
        return view('reviews', ['reviews' => $reviews->all()]);
    }

    public function reviews_one($id) {
        $reviews = new ContactModel();
        return view('reviews_one', ['data' => $reviews->find($id)]);
    }

    public function reviews_edit($id) {
        $reviews = new ContactModel();
        return view('reviews-edit', ['data' => $reviews->find($id)]);
    }

    public function reviews_check(Request $request) {
        $valid = $request->validate([
            'name' => 'required | min:3',
            'massage' => 'required | min:10',
        ]);

        $review = new ContactModel();
        $review->name = $request->input('name');
        $review->email = $request->input('email');
        $review->massage = $request->input('massage');

        $review->save();

        return redirect()->route('reviews');
    }

    public function reviews_check_submit($id, Request $request) {
        $valid = $request->validate([
            'name' => 'required | min:3',
            'massage' => 'required | min:10',
        ]);

        $review = ContactModel::find($id);
        $review->name = $request->input('name');
        $review->email = $request->input('email');
        $review->massage = $request->input('massage');

        $review->save();

        return redirect()->route('reviews-edit', $id);
    }
}
