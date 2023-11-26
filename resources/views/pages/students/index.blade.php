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


                </div>

                <div class="col lg 4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>



<div class="col lg 12 mt-5">
    <div>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col"># </th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Age</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $key=> $student)

                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->image }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        @if ($student->status == 0 )
                            <span class="badge bg-warning">Inactive</span>
                        @else
                        <span class="badge bg-success">Active</span>
                        @endif
                    </td>


                    <td>
                        <a href="{{ route('students.delete',$student->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i> </a>
                        <a href="{{ route('students.active',$student->id) }}" class="btn btn-success"><i class="far fa-solid fa-eye"></i> </a>
                    </td>


                </tr>

                @endforeach

            </tbody>
          </table>

    </div>
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
