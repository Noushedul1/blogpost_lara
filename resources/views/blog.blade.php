@extends('master')
@section('title')
 Blog   
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 my-2">
            <div class="card card-body">
                <h4 class="text-center text-success">{{ Session::get('blogmsg') }}</h4>
                <form action="{{ route('addblog') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="form-label col-md-3">Name :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="" class="form-label col-md-3">Email :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="" class="form-label col-md-3">Description :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="" class="form-label col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-success" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>   
@endsection