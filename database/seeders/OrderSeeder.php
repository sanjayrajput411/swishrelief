<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $value = 50;
        for($i=0;$i<=$value;$i++){
            Order::create([
                'medical_qty' => 8,
                'store_name' => 'Test store name',
                'patient_type' => 'Test patient type',
                'address' => 'Test address',
                'order_status' => 1,
                'delivery_date' => '2023-09-12 05:30:12',
                'delivery_time' => '2023-09-12 05:30:12'
            ]);
        }
    }
}
