<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model implements EntityInterface
{
    use HasFactory;

    protected $fillable = [
        'office_id',
        'office_name',
        'address_id',
    ];

    public function getAddressId()
    {
        return $this->address_id;
    }

    public function getAddress(){
        return Address::where('address_id',$this->getAddressId()) -> first();
    }

    public function address(){
        return $this->hasOne(Address::class);
    }

    public function distanceTo(Address $address){
        $office_address = $this->getAddress();
        return $office_address->distanceTo($address);
    }

}
