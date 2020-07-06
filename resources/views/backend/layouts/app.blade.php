<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') | {{env('APP_NAME')}}</title>
    @include('backend.partials._css')
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            @include('backend.partials.header')
            @include('backend.partials.sidebar')
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="#">Modules</a></div>
                            <div class="breadcrumb-item">DataTables</div>
                        </div>
                    </div>                  
                    @php
                        $tableHeader=['no'=>'No','name'=>'Nama'];
                        $tableBody=[
                            ['no'=>1,'name'=>'Nama1'],
                            ['no'=>2,'name'=>'Nama2'],
                            ['no'=>3,'name'=>'Nama3']
                        ];
                    @endphp
                    <div class="section-body">
                        <x-table.full-width card-header="hehe" :table-header="$tableHeader" :table-body="$tableBody"></x-table-full-width>
                    </div>
                </section>
            </div>
            @include('backend.partials.footer')
        </div>
    </div>
    @include('backend.partials._js')
</body>
</html>
