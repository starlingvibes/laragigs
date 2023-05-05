<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Senior Laravel Developer',
                'description' => 'Responsible for managing all infrastructure'
            ],
            [
                'id' => 2,
                'title' => 'Junior Laravel Developer',
                'description' => 'Working with the Senior Developer'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
;
?>