@extends('layouts.master')
@section('title', 'COA')

@section('content')
    <div id="content" class="app-content">

        {{ Breadcrumbs::render('grup_index') }}

        <div class="d-flex justify-content-end">
            <a href="{{ route('coa.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus me-1"></i>
                Create
            </a>
        </div>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">{{ trans('sidebar.sub_menu.akun_grup') }}</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                            class="fa fa-redo"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="card bg-dark border-0 text-white">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="data-table" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Akun Header</th>
                                        <th>Akun Header</th>
                                        <th>Akun Grup</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($AkunHeader as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->code_account_header}}</td>
                                        <td>{{ $item->account_header}}</td>
                                        <td>{{ $item->account_group_id }}</td>
                                        <td>
                                            <a href="{{ route('akun_grup.edit', $item->id) }}" class="btn btn-primary btn-xs mb-1"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('akun_grup.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                                {!! method_field('delete') . csrf_field() !!}
                                                <button type="submit" class="btn btn-danger btn-xs mb-1">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
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
    </div>
@endsection
