<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderlist;
use DB;

class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dataorder = DB::table('order')->select('order_id','nama_order','jenis_order', 'order_status')->where('order_status','1')->get();
       // $dataorder = DB::table('order')->select('order_id','nama_order','jenis_order')->get();

        return view('order.order', compact('dataorder'))->with('order', $dataorder);

        // $dataorder = Order::all();

        // return view('order.order', compact(
        //     'dataorder'
        // ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelorder = new Order;
        return view('order.ordercreate', compact(
            'modelorder'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelorder = new Order;
        $modelorder ->nama_order = $request->nama_order;
        $modelorder ->jenis_order = $request->jenis_order;
        $modelorder ->save();

        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelorder = Order::find($id);
        return view('order.orderedit', compact(
            'modelorder'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modelorder = Order::find($id);
        $modelorder ->nama_order = $request->nama_order;
        $modelorder ->Jenis_order = $request->jenis_order;
        $modelorder ->save();

        return redirect('order');
    }

    public function delete(Request $request, $id) {
        $modelorder = Order::find($id);
        $modelorder ->order_status = '0';
        $modelorder ->save();

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $modelorder = Order::find($id);
        $modelorder ->order_status = '0';
        $modelorder ->save();

        DB::table('orderlist')
        ->where('order_id' ,'=', $id)
        ->update(array('orl_status' => 0));
        //->save();

        // return redirect('order/index');
        // $modelorder = Order::find($id);
        // $modelorder->delete();
         return redirect('order');
    }
}
