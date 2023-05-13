@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto">Add Manager to {{$supermarket->name}}</h2>
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
                            <form method="post" action="{{route('managers.store', $supermarket)}}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <input type="text" class="form-control input-default " name="name" placeholder="Manager name">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phone" class="form-control input-rounded"  placeholder="Phone">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control input-rounded"  placeholder="email">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
