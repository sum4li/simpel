@push('css-plugins')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">    
@endpush
@push('js-plugins')
<script src="{{asset('backend/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>    
@endpush