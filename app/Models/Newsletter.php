<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $table = 'newsletter';

    protected $fillable = ['email'];

    // Add a method to store the subscriber email
    public static function store($request)
    {
        // Check if the email already exists
        $existingSubscriber = self::where('email', $request->input('email'))->first();

        if ($existingSubscriber) {
            return response()->json([
                'message' => 'Email này đã subscribe website chúng tôi'
            ], 500);
        }

        // Save the email to the database
        self::create($request->all());

        // Send a confirmation email to the user
        // Mail::to($request->input('email'))->send(new \App\Mail\SubscriptionConfirmation());

        return response()->json([
            'message' => 'Cảm ơn bạn đã subscribe website chúng tôi'
        ], 200);
    }
}
