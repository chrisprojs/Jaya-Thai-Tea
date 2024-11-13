<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function getReviewById($id)
    {
        $reviews = Review::where('product_id',$id)->get();
        return $reviews;
    }

    public function postReview(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,product_id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        try {
            $review = DB::transaction(function () use ($request) {
                return Review::create([ // Return the created review object
                    'product_id' => $request->product_id,
                    'rating' => $request->rating,
                    'comment' => $request->comment,
                ]);
            });

            if ($review) {
                return response()->json([
                    'product_id' => $review->product_id,
                    'rating' => $review->rating,
                    'comment' => $review->comment
                ]);
            } else {
                return response()->json(['error' => 'Failed to create review.'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while submitting the review.'+ $e->getMessage()], 500);
        }
    }



}
