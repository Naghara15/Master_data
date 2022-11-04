<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderlist;
use DB;

class orderlistcontroller extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {

             $dataorderlist = DB::table('orderlist')->select('orderlist_id' ,'order_id', 'employee_id', 'orl_status')->where('orl_status','1')->get();
            // $dataorderlist = DB::table('orderlist')                        
            //             ->join('order', 'orderlist.orl_status', '=', 'order.order_status')
            //             ->join('pegawai', 'orderlist.orl_status', '=', 'pegawai.pegawai_status')                        
            //             ->select('orderlist.orderlist_id' ,'orderlist.order_id', 'orderlist.employee_id')
            //             ->where('orderlist.orl_status', '=', '1')
            //             ->get();

        return view('orderlist.orderlist', compact('dataorderlist'))->with('orderlist', $dataorderlist);

            // $dataorderlist = Orderlist::all();
    
            // return view('orderlist.orderlist', compact(
            //     'dataorderlist'
            // ));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $modelorderlist = new Orderlist;
            return view('orderlist.orderlistcreate', compact(
                'modelorderlist'
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
            $modelorderlist = new Orderlist;
            $modelorderlist ->order_id = $request->order_id;
            $modelorderlist ->employee_id = $request->employee_id;
            $modelorderlist ->save();
    
            return redirect('orderlist');
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
            $modelorderlist = Orderlist::find($id);
            return view('orderlist.orderlistedit', compact(
                'modelorderlist'
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
            $modelorderlist = Orderlist::find($id);
            $modelorderlist ->order_id = $request->order_id;
            $modelorderlist ->employee_id = $request->employee_id;
            $modelorderlist ->save();
    
            return redirect('orderlist');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $modelorderlist = Orderlist::find($id);
            $modelorderlist ->orl_status = '0';
            $modelorderlist ->save();
            // $modelorderlist = Orderlist::find($id);
            // $modelorderlist->delete();
            return redirect('orderlist');
        }
}
