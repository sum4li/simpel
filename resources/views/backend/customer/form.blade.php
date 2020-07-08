@extends('backend.layouts.app')
@section('title',$data ? 'Edit Customer':'Tambah Customer')
@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body pt-4">
                @if(!$data)
                {!! Form::open()->post()->route('customer.store') !!}
                @else
                {!! Form::open()->put()->route('customer.update',[$data->id])->fill($data) !!}
                @endif
                <div class="row">
                    <div class="col-12">
                        {!! Form::text('name', 'Nama') !!}
                    </div>
                    <div class="col-12">
                        {!! Form::text('email', 'E-Mail') !!}
                    </div>
                    <div class="col-12">
                        {!! Form::textarea('address', 'Alamat')->attrs(['rows'=>'10','cols'=>'30']) !!}
                    </div>
                    <div class="col-12">
                        {!! Form::submit('Simpan') !!}
                        {!! Form::anchor('Batal')->secondary()->route('customer.index') !!}
                        
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>    
@endsection
