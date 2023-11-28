
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
           <img src="https://img.freepik.com/premium-vector/girl-graduation-cap-sitting-around-pile-books-online-courses-distance-studying-self-education_460582-689.jpg"
           alt="" width="150px">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
