<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Orderlist;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = Order::create(array(
            'order_id' => 1,
            'nama_order' => 'obat1',
            'jenis_order' => 'kapsul',
        ));

        $order2 = Order::create(array(
            'order_id' => 2,
            'nama_order' => 'obat2',
            'jenis_order' => 'bubuk',
        ));

        $orderlist = Orderlist::create(array(
            'orderlist_id' => 1,
            'order_id' => 1,
            'employee_id' => 1,
        ));

        $orderlist2 = Orderlist::create(array(
            'orderlist_id' => 2,
            'order_id' => 2,
            'employee_id' => 1,
        ));

        $orderlist3 = Orderlist::create(array(
            'orderlist_id' => 3,
            'order_id' => 1,
            'employee_id' => 2,
        ));

        $orderlist4 = Orderlist::create(array(
            'orderlist_id' => 4,
            'order_id' => 2,
            'employee_id' => 2,
        ));
        


    }
}
