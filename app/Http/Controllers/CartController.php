<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }


    public function store(Request $request)
    {
        $course = Course::find($request->course_id);

        $cart = session()->get('cart', []);

        // Only add the course to the cart if it's not already in there
        if (!isset($cart[$course->id])) {
            $cart[$course->id] = [
                "title" => $course->title,
                "price" => $course->price,
                "image" => $course->image_path
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    //Se necessario implementar a função update, descomentar o código abaixo

    // public function update(Request $request, $id)
    // {
    //     $cart = session()->get('cart', []);

    //     if (isset($cart[$id])) {
    //         $cart[$id]['quantity'] = $request->quantity;
    //         session()->put('cart', $cart);
    //     }

    //     return redirect()->route('cart.index')->with('success', 'Cart updated!');
    // }

    public function destroy($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Course removed from cart!');
    }
}
