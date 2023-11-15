<!-- Vertically centered Modal -->
  <div class="modal fade" id="AddTeacherModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class='bx bxs-file-plus text-success'></i> Add Teacher</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Vertical Form -->
            <form  method="POST" action="{{ route('teacherAdd') }}" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-12">
                  <label for="name" class="form-label">Teacher Name</label>
                  <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="col-12">
                  <label for="designation" class="form-label">Designation</label>
                  <input type="text" class="form-control" name="designation" id="designation" required>
                </div>
                <div class="col-12">
                  <label for="teachersWords" class="form-label">Teachers Words</label>
                  <input type="text" class="form-control" name="teachersWords" id="teachersWords" required>
                </div>
                <div class="col-12">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo" required>
                  </div>
                <div class="text-center">
                  <button type="submit"  class="btn btn-outline-success btn-sm">Add</button>
                  {{-- <button type="reset" class="btn btn-secondary btn-sm">Reset</button> --}}
                  <button type="button" class="btn btn-outline-danger btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </form><!-- Vertical Form -->
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->