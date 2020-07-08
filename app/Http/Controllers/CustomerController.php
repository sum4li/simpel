<?php

namespace App\Http\Controllers;

use App\Models\Backend\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        return view('backend.customer.index');
    }

    public function create()
    {
        $data=null;
        return view('backend.customer.form',compact(['data']));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {            
            DB::commit();
        } catch (\Throwable $th) {
           DB::rollback();
        }
    }

    public function edit($id)
    {
        $data = Customer::findOrFail($id);
        return view('backend.customer.form',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        return 'hehe';
    }
}
