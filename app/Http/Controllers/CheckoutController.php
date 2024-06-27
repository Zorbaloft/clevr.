<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Course;


class CheckoutController extends Controller
{
    public function directPurchase($slug)
    {
        // Query the course by slug
        $course = Course::where('slug', $slug)->firstOrFail();

        session(['course_id' => $course->id]);

        $cart = [
            $course->slug => [
                'title' => $course->title,
                'price' => $course->price,
                'image' => $course->image_path
            ]
        ];
        // Calculate tax (22% of the course price)
        $tax = $course->price * 0.05;
        // Add the tax to the total
        $total = $course->price + $tax;

        return view('cart/checkout', compact('cart', 'total', 'tax'));
    }


    public function completeCheckout(Request $request)
    {
        $courseId = session('course_id');
        if (!$courseId) {
            return redirect()->back()->withErrors('No course found in the session.');
        }

        $course = Course::find($courseId);
        if (!$course) {
            return redirect()->back()->withErrors('Course not found.');
        }

        $paymentSuccess = $this->processPayment($request, $course);

        if (!$paymentSuccess) {
            return redirect()->back()->withErrors('Payment failed. Please try again.');
        }

        $user = auth()->user();

        $this->attachCourseToUser($user, [$courseId]);

        session()->forget('course_id');



        return redirect()->route('student.courses.index')->with('message', 'Curso comprado com sucesso!');
    }


    private function attachCourseToUser($user, $courses)
    {
        if (is_null($courses)) {
            return false;
        }

        foreach ($courses as $course) {
            if (!$user->courses->contains($course)) {
                $user->courses()->attach($course);
                foreach (Course::where('id', $course)->first()->lessons()->get() as $lesson) {
                    $user->lessons()->attach($lesson->id);
                }
            }
        }

        return true;
    }
    protected function processPayment($request, $course)
    {
        // Placeholder for payment processing logic
        // Simulate a successful payment
        return true;
    }
}
