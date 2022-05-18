<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Attribute;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'latitude',
        'longitude',
    ];

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    // Determines the distance to an address
    public function distanceTo(Address $destination_address){
        // Application of Haversine formula
        $earth_radius = 6371; // Earth radius in km
        $dLat = deg2rad($this->getLatitude() - $destination_address->getLatitude());
        $dLon = deg2rad($destination_address->getLongitude() - $this->getLongitude());
        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($this->getLatitude())) * cos(deg2rad($destination_address->getLatitude())) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * asin(sqrt($a));
        return $earth_radius * $c;
    }

}
