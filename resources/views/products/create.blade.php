@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="py-5">
            <div class="row py-5">
                <div class="text-center">
                    <h3>Criar Produto</h3>
                </div>
                <form action="{{route('store')}}" class="col-md-9 m-auto" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-center">
                        <div class="col-md-4 form-group">
                            <label for="title" class="form-group"> Titulo </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            2
                        </div>
                        <div class="col-md-4">
                            3
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
