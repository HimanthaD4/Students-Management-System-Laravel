@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class='page-title' style="color: #6c757d; font-size: 2.5rem; margin-top: vh;">My Students List</h1>
        </div>
    </div>

    <div class="col-lg-8 mx-auto">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="https://free-vectors.net/_ph/10/924162920.jpg" alt="Vector Image" class="img-fluid">
            </div>

            <div class="col-lg-6">
                <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data"
                    style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; max-width: 400px; margin: auto;">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" name="name" type="text" placeholder="Enter Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" name="Image" type="file"
                            accept="image/jpg, image/jpeg, image/png" required>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input class="form-control" name="age" type="number" placeholder="Enter Age" required>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12 mt-5">
        <table class="table table-hover">
            <thead class="table-dark">
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
                    <td> <img src="{{ $student->image }}" alt="{{ $student->name }}" width="50" height="50"></td>
                    <td>{{ $student->age }}</td>
                    <td>
                        @if ($student->status == 0 )
                        <span class="badge bg-warning">Inactive</span>
                        @else
                        <span class="badge bg-success">Active</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('students.delete',$student->id) }}"
                            class="btn btn-danger"><i class="far fa-trash-alt"></i> </a>
                        <a href="{{ route('students.active',$student->id) }}"
                            class="btn btn-success"><i class="far fa-solid fa-eye"></i> </a>
                        <a href="javascript:void(0)" class="btn btn-info"><i
                                class="fas fa-edit" onclick="studentEditModal({{ $student->id }})"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="studentEdit" tabindex="-1" aria-labelledby="studentEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentEditLabel">Edit Student Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="studentEditContent">
                
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
    .page-title {
        padding-top: 7vh;
        font-size: 2rem;
        color: rgb(128, 65, 201);
    }
</style>
@endpush

@push('js')
<script>
    function studentEditModal(student_id){
        var data ={
            student_id:student_id,
        };
        $.ajax({
            url:"{{ route('students.edit') }}",
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType: '',
            data:data,
            success: function(response){
                $('#studentEdit').modal('show');
                $('#studentEditContent').html(response);
            }
        });
    }
</script>
@endpush
