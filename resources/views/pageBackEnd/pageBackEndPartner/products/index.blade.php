@extends('layouts.masterBackEndPartner')

@section('title', 'Data Produk')

@section('content')
    <div id="content" class="app-content">
        {{ Breadcrumbs::render('products') }}
        <div class="row">
            <div class="col-xl-12 ui-sortable">
                <div class="panel panel-inverse" data-sortable-id="table-basic-1">
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@yield('title')</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                                    class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                                    class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                                    class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                            <a href="{{ route('products.create') }}" class="btn btn-sm btn-success mb-3"><i class="fas fa-plus"></i> TAMBAH</a>

                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Nama Produk</th>
                                        <th>Bisnis</th>
                                        <th>Kategori</th>
                                        <th>Bpom</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        let columns = [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'code',
                name: 'code'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'business',
                name: 'business'
            },
            {
                data: 'category',
                name: 'category'
            },
            {
                data: 'bpom',
                name: 'bpom'
            },

            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]

        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}",
            columns: columns
        });
    </script>
@endpush
