<div class="card">
    <div class="card-header">
        <h4>{{$cardHeader}}</h4>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-md">
                <thead>
                    <tr>
                        @foreach($tableHeader as $header_key=>$head)
                            <th>{{$head}}</th>                            
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tableBody as $body_key=>$body)
                    <tr>
                        @foreach ($tableHeader as $header_key=>$head)
                            <td>{{$body[$header_key]}}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-right">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>