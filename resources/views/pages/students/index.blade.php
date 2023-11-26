@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col lg 12 text-center">
            <h1 class='page-title'>My Students List</h1>
        </div>
    </div>

    <div class="col lg 12">
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form">
            @csrf
            <div class="row">
                <div class="col lg 8">

                    <div class="form-group">
                        <input class="form-control" name="name" type="text" placeholder="Input Name">

                    </div>

                    <div class="form-group">
                        <input class="form-control" name="Image" type="text" placeholder="Input Image">
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="Age" type="text" placeholder="Input Age">
                    </div>

                   <div class="form-group">
                        <input class="form-control" name="Status" type="text" placeholder="Input status">
                    </div>
                </div>

                <div class="col lg 4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection



@push('css')
<style>
    .page-title{
        padding-top:7vh;
        font-size:2rem;
        color: rgb(128, 65, 201);
    }
</style>
@endpush
