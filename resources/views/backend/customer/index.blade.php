@extends('backend.layouts.app')
@section('title','Customer')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">      
      <div class="card-body pt-4">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center">
                  #
                </th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach (App\Models\Backend\Customer::limit(100)->get() as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->address}}</td>
                        <td>
                            <a href="{{route('customer.edit',$row->id)}}" class="btn btn-secondary">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@include('backend.plugins.datatables')
@push('scripts')
    <script>
        $('#table-1').DataTable({
            pageLength: 5
        });
    </script>
@endpush