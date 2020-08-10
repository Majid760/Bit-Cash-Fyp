@extends('layouts.admin-dashb')

<link href="{{ asset('backend/css/custom-admin.css') }}" />

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger text-center">{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <br />
                <h3 class="text-center">Import The Promoted Products CSV File</h3>
                <br />
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Import CSV File Of Promoted Products! </h3>
                    </div>
                    <div class="panel-body">
                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                        <li>{{ session('message') }}</li>
                                    </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.import-promoted-product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                <input type="file" class="form-control" name="promoted-file" accept=".csv">
                                <br>
                                <button  class="btn btn-primary">Import Products</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection


@section('script')

@endsection
