<?php

namespace Tests\Unit;

use App\Models\Address;
use App\Models\Office;
use Tests\TestCase;

class DistanceFormulaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    // Tests if the distance from the office calculated by 'distanceTo' method gives the expected result
    public function testAffiliateDistanceFromDublinOffice()
    {
        $dublin_office  = Office::where('office_id','1') -> first();
        $address_yousef = Address::where('address_id','1') -> first();;
        $distance = $dublin_office -> distanceTo($address_yousef);
        $this->assertTrue(intval($distance) == 41);
    }

    public function testAffiliateDistanceFromFakeOffice()
    {
        $dublin_office  = Office::where('office_id','2') -> first();
        $address_yosef = Address::where('address_id','1') -> first();;
        $distance = $dublin_office -> distanceTo($address_yosef);
        $this->assertTrue(intval($distance) == 115);
    }

    public function testAffiliateDistanceFromAffiliate()
    {
        $address_yosef = Address::where('address_id','1') -> first();;
        $address_lance = Address::where('address_id','2') -> first();;
        $distance = $address_lance -> distanceTo($address_yosef);
        $this->assertTrue(intval($distance) == 309);
    }

    public function testOfficeDistanceFromOffice()
    {
        $dublin_office  = Office::where('office_id','1') -> first();
        $fake_office  = Address::where('address_id','34') -> first();
        $distance = $dublin_office -> distanceTo($fake_office);
        $this->assertTrue(intval($distance) == 74);
    }
}
