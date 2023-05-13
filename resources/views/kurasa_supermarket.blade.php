@extends('layouts.app')
@section('content')

    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('welcome')}}">Go home</a></li>
            </ol>
        </div>
        @include('message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="https://kurasa.org/images/about.svg" alt="" style="width: 100px; height: 100px">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        <img class="img-fluid" src="https://kurasa.org/images/undraw_researching_23gp.svg" alt="" style="width: 100px; height: 100px">
                                    </div>

                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                <img class="img-fluid" src="https://kurasa.org/images/about.svg" alt="" width="10">
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="https://kurasa.org/images/undraw_researching_23gp.svg" alt="" width="50"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h4>{{$supermarket->name}} Supermarket</h4>
                                        <div class="comment-review star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                        </div>

                                        <p>{{$supermarket->name }} Products on offer:&nbsp;&nbsp;
                                            <span class="badge badge-success light">Cooking oil</span>
                                            <span class="badge badge-success light">Uji floor</span>
                                            <span class="badge badge-success light">Milk</span>

                                        </p>
                                        <p class="text-content"> <i
                                                    class="fa fa-map me-2"></i><h4>Location: {{$supermarket->location}}. </h4></p>

                                            <div class="d-flex align-items-end flex-wrap mt-4">
                                                <p class="text-content"> <i
                                                            class="fa fa-map me-2"></i><h4>Managers: </h4></div>
                                                @foreach($managers as $manager)
                                            <span class="badge badge-warning light">{{$manager->name}}</span>

                                            @endforeach
                                       </div>
                                        <div class="d-flex align-items-end flex-wrap mt-4">

                                            <div class="shopping-cart  mb-2 me-3">
                                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#importsuppliers">Import Suppliers</button>

                                            </div>
                                            <!--Add Manager-->
                                            <div class="shopping-cart  mb-2 me-3">
                                                <a class="btn btn-primary" href="{{route('add_manager',$supermarket)}}"><i
                                                            class="fa fa-shopping-basket me-2"></i>Add  Manager</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
    <div class="bootstrap-modal">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="importsuppliers">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Import Supplier for {{$supermarket->name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('suppliers.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="file" class="form-label">Make sure the extension is .csv and has this fields:name, phone and location </label>
                                <input class="form-control" type="file" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
