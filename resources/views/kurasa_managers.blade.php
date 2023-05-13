@extends('layouts.app')
@section('content')



    <!--**********************************
        Content body start
    ***********************************-->

    <!-- row -->
    <div class="container-fluid">
        <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
            <h2 class="mb-3 me-auto"> Kurasa Managers</h2>
            <div>

            </div>
        </div>
        @include('message')
<div class="row">
    <div class="col-xl-12">
        <div class="table-responsive">

                <table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" id="example5">
                    <thead>
                    <tr>
                        <th>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                <label class="form-check-label" for="checkAll">
                                </label>
                            </div>
                        </th>
                        <th>Manager  ID</th>
                        <th>Date created</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($managers as $manager)

                        <tr>
                            <td class="tbl-bx">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" value="" id="customCheckBox10">
                                    <label class="form-check-label" for="customCheckBox10">
                                    </label>
                                </div>
                            </td>
                            <td>{{ $manager->id }}</td>
                            <td class="wspace-no">{{ $manager->created_at }}</td>
                            <td>{{ $manager->name }}</td>
                            <td class="text-ov">{{ $manager->phone }}</td>
                            <td class="text-ov">{{ $manager->email }}</td>
                            <td>
                                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#import">Import Employee</button>


                            </td>
                        </tr>
                        <div class="bootstrap-modal">
                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade" id="import">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Import Employee for {{$manager->name}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('employees.import') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="file" class="form-label">Make sure the extension is .csv and has this fields:name, type and  gender </label>
                                                    <input class="form-control" type="file" id="file" name="file">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    </tbody>
                </table>


    </div>
</div>
    </div>

@endsection
