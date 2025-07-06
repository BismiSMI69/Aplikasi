<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Reservation;
use App\Models\Menu;
use App\Http\Requests\StudentCreateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\SessionBagProxy;

class CustomerController extends Controller
{
    public function index(Request $request){

        $keyword = $request->keyword;

        $customer = Customer::where('name', 'LIKE', '%'.$keyword.'%')->
        simplePaginate(5);
        return view('customers', ['customerList' => $customer]);

    }
    public function show($id){
        $customer = Customer::with(['reservations', 'menus'])->findOrFail($id);
        return view('customer-detail', ['customer' => $customer]);
    }
    
    public function create()
    {
        $menu = Menu::select('id', 'name')->get();
        $reservation = Reservation::select('id','ruangan', 'meja')->get();
        return view('customer-add', ['reservation' => $reservation, 'menu' => $menu ]);
    }

    public function store(Request $request)
    {

        // $newname = '';
        // if($request->file('photo')){
        //     $extension = $request->file('photo')->getClientOriginalExtension();
        //     $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
        //     $request->file('photo')->storeAs('photo', $newName);
        // }

        // $customer['image'] = $newName;
        
        $customer = Customer::create($request->all());

        // $customer = new Customer;
        // $customer->name = $request->name;
        // $customer->reservation_date = $request->reservation_date;
        // $customer->reservation_id = $request->reservation_id;
        // $customer->save();
        

         if($customer) {
            Session::flash('status', 'success');
            Session::flash('message', 'menambahkan data berhasil !');
         }
         
        return redirect('/customer');
        
    }

    public function edit(Request $request, $id)
    {
        $customer = Customer::with('reservations')->findOrFail($id);
        $reservation = Reservation::where('id', '!=', $customer->reservation_id)->get(['id','ruangan', 'meja']);
        return view('customer-edit', ['customer' => $customer, 'reservation' => $reservation]);
    }

    public function update(Request $request, $id) {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect('/customers');
    }
    public function delete($id){

        $customer = Customer::findOrFail($id);
        return view('customer-delete', ['customer' => $customer]);
    }
    public function destroy($id){

        // $deleteCustomer = DB::table('customers')->where('id',$id)->delete();
        $deletedCustomer = Customer::findOrFail($id);
        $deletedCustomer->delete();

        if($deletedCustomer) {
            Session::flash('status', 'success');
            Session::flash('message', 'Menghapus data Berhasil !');
         }
        // return view('customer-delete', ['customer' => $customer]);
        return redirect('/customers');

    }

    public function makanan($id)
    {
        $menu = Menu::select('id', 'name', 'gambar')->get();
        $customer = Customer::findOrFail($id);
        $reservation = Reservation::select('id','ruangan', 'meja')->get();
        return view('customer-food', ['customer'=> $customer,'reservation' => $reservation, 'menu' => $menu ]);
    }
    public function makananup(Request $request,$id){
        $customer = Customer::findOrFail($id);
        $customer->menus()->attach([$request->menu_id]);

        return redirect('/customers');
    }
}

