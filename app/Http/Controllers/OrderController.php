<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $orders = Order::all();

        
        return View::make('order.view')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('order.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_order' => 'required',
            'address_order'=> 'required',
            'mark_order'=> 'required',
            'telp_order'=> 'required',
            'email_order'=> 'required',
            
            'pack_order' => 'required',
            'odpzone_order' => 'required',
            'odp_order' => 'required',
            'odpnum_order' => 'required',
            'status_order' => 'required'
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Project created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.detail',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        
        return view('order.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'name_order' => 'required',
            'address_order'=> 'required',
            'mark_order'=> 'required',
            'telp_order'=> 'required',
            'email_order'=> 'required',
            
            'pack_order' => 'required',
            'odpzone_order' => 'required',
            'odp_order' => 'required',
            'odpnum_order' => 'required',
            'status_order' => 'required',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
    
        return redirect()->route('orders.index')
                        ->with('success','Product deleted successfully');
    }
}
