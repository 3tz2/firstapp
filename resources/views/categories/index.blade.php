
@extends('admin.dashboard')
@section('DynamicContent')


    <div class='card'>
        <div class='card-header'><br><br><br>
            <h3 class="text-dark">Categories Table</h3>
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>


            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class='card-body'>
            <div class="row justfy-content-center my-3">
        <a href="#" class="btn btn-success col-3" data-toggle="modal" data-target="#exampleModal">Add New Catogeroy</a>
            </div>
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>category Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <a href="" class="btb btn-outline-success mx-2"  data-toggle="modal" data-target="#Edit-Modal{{ $item->id }}"><i class="fa fa-pencil"></i>Edit</a>
                                    <a href="" class="btb btn-outline-danger mx-2"><i class="fa fa-trash"></i>Delete</a>
                                </td>
                                @include('categories.editmodal')
                            </tr>
                        @endforeach
                        <tr>
                            <td>test</td>
                            <td>test</td>
                            <td>test</td>
                            <td>
                                <a href="" class="btb btn-outline-success mx-2"  data-toggle="modal" data-target="#Edit-Modal{{ $item->id }}"><i class="fa fa-pencil"></i>Edit</a>
                                <a href="" class="btb btn-outline-danger mx-2"><i class="fa fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>




    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Cat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                 <form action="{{ route('Category.store') }}" method='post'>
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <lable class="form-lable">CatName</lable>
                                <input type="text" class='form-control' name="CatName">
                            </div>
                            <div class="col-6">
                                <lable class="form-lable">CatDesc</lable>
                                <textarea id="" cols="30" class='form-control' name="CatDesc"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Cat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







@endsection
