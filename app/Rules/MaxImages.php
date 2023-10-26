<?php

namespace App\Rules;

use App\Models\ListingImageGallery;
use Auth;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MaxImages implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $packageImageLimit = Auth::user()->subscription->package->num_of_photos;
        $listingImagesCount = ListingImageGallery::where('listing_id', $value)->count();
        $uploadedImagesCount = count(request('images'));

        if($packageImageLimit === -1) {
            return;
        }

        if($listingImagesCount + $uploadedImagesCount > $packageImageLimit) {
            $fail('You have reached the maximum limit of '. $packageImageLimit .' Images');
        }
    }
}
