@extends('layouts.master')
@section('title', 'Edit COA')

@section('content')
    <div id="content" class="app-content">

        {{ Breadcrumbs::render('coa_edit') }}

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Edit COA</h4>
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
                        <form action="{{ route('coa.update', $coa->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="form-label" for="parent">Parent</label>
                                <select class="form-select @error('parent') is-invalid @enderror" id="parent" name="parent"
                                    required autofocus>
                                    <option value="" disabled selected>-- Pilih --</option>
                                    @forelse ($parentCoa as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $coa->parent == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                    @empty
                                        <option value="" disabled>Data tidak ditemukan
                                        </option>
                                    @endforelse
                                </select>
                                @error('parent')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="kode">Kode</label>
                                <input class="form-control @error('kode') is-invalid @enderror" type="text" id="kode"
                                    name="kode" placeholder="Kode" value="{{ old('kode') ? old('kode') : $coa->kode }}"
                                    required />
                                @error('kode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text" id="nama"
                                    name="nama" placeholder="Nama" value="{{ old('nama') ? old('nama') : $coa->nama }}"
                                    required />
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="reset" class="btn btn-secondary me-1">Reset</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">List COA</h4>
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
                        @include('accounting.coa._treeview')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href="{{ asset('template/assets/plugins/jstree/dist/themes/default/style.min.css') }}" rel="stylesheet" />
@endpush

@push('js')
    <script src="{{ asset('template/assets/plugins/jstree/dist/jstree.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/demo/ui-tree.demo.js') }}"></script>
@endpush
