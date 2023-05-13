@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">Update Supermarket</h2>
            <div>

            </div>
        </div>
        @include('message')
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enter Details</h4>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">
                            <form method="post" action="{{route('supermarkets/update',['id'=> $supermarket->id])}}">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default " name="name" value="{{$supermarket->name}}">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="location" class="form-control input-rounded" value="{{$supermarket->location}}" >
                                </div>
                                <button type="submit" class="btn btn-primary">Update {{$supermarket->name}} Supermarket</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
