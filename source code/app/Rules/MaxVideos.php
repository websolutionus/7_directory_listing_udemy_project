<?php

namespace App\Rules;

use App\Models\ListingVideoGallery;
use Auth;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MaxVideos implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $packageVideosLimit = Auth::user()->subscription->package->num_of_video;
        $listingVideosCount = ListingVideoGallery::where('listing_id', $value)->count();

        if($packageVideosLimit === -1) {
            return;
        }

        if($listingVideosCount >= $packageVideosLimit) {
            $fail('You have reached the maximum limit of '. $packageVideosLimit .' Videos');
        }
    }
}
