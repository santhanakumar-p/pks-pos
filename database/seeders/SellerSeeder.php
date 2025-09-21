<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sellers = [
            ['name' => 'Manikandan', 'mobile_no' => '9100000001', 'village' => 'Villupuram'],
            ['name' => 'Saravanan',  'mobile_no' => '9100000002', 'village' => 'Cuddalore'],
            ['name' => 'Karthik',    'mobile_no' => '9100000003', 'village' => 'Vellore'],
            ['name' => 'Priya',      'mobile_no' => '9100000004', 'village' => 'Tiruvannamalai'],
            ['name' => 'Anitha',     'mobile_no' => '9100000005', 'village' => 'Kanchipuram'],
            ['name' => 'Dinesh',     'mobile_no' => '9100000006', 'village' => 'Sriperumbudur'],
            ['name' => 'Revathi',    'mobile_no' => '9100000007', 'village' => 'Thiruvallur'],
            ['name' => 'Balaji',     'mobile_no' => '9100000008', 'village' => 'Arakkonam'],
            ['name' => 'Deepa',      'mobile_no' => '9100000009', 'village' => 'Panruti'],
            ['name' => 'Mohan',      'mobile_no' => '9100000010', 'village' => 'Gudiyatham'],
        ];

        foreach($sellers as $seller) {
            Seller::create($seller);
        }
    }
}
