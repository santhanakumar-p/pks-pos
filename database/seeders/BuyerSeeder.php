<?php

namespace Database\Seeders;

use App\Models\Buyer;
use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buyers = [
            ['name' => 'Kumar', 'mobile_no' => '9876543210', 'village' => 'Thanjavur'],
            ['name' => 'Ramesh', 'mobile_no' => '9876543211', 'village' => 'Kumbakonam'],
            ['name' => 'Suresh', 'mobile_no' => '9876543212', 'village' => 'Pudukkottai'],
            ['name' => 'Lakshmi', 'mobile_no' => '9876543213', 'village' => 'Karaikudi'],
            ['name' => 'Selvi', 'mobile_no' => '9876543214', 'village' => 'Mannargudi'],
            ['name' => 'Arun', 'mobile_no' => '9876543215', 'village' => 'Nagapattinam'],
            ['name' => 'Meena', 'mobile_no' => '9876543216', 'village' => 'Mayiladuthurai'],
            ['name' => 'Vijay', 'mobile_no' => '9876543217', 'village' => 'Pattukkottai'],
            ['name' => 'Kavitha', 'mobile_no' => '9876543218', 'village' => 'Peravurani'],
            ['name' => 'Rajesh', 'mobile_no' => '9876543219', 'village' => 'Chidambaram'],
        ];

        foreach ($buyers as $buyer) {
            Buyer::create($buyer);
        }
    }
}
