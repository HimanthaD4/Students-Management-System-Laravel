{{--  <form action="{{ route('students.update',$student->id) }}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="row">
        <div class="col lg 8">

            <div class="form-group">
                <input class="form-control" name="name"  value="{{ $student->name }}" type="text" placeholder="Input Name">
            </div>

            <div class="form-group">
                <input class="form-control" name="Image" value="{{ $student->image }}" type="file" placeholder="Input Image">
            </div>

            <div class="form-group">
                <input class="form-control" name="age" value="{{ $student->age }}" type="number" placeholder="Input Age">
            </div>

        </div>

        <div class="col lg 4">
            <button class="btn btn-primary">Update</button>
        </div>
    </div>
</form>  --}}



<form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
    @csrf


    <div class="row">
        <div class="col-lg-8">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" placeholder="Input Name" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/jpg, image/jpeg, image/png">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" placeholder="Input Age" required>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- You can add a preview of the current image here if needed -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
