<div class="modal fade" id="formModal">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 30px;">
            <form method="post" class="mb-0" action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="">
                <div class="modal-header border-0">
                    <h5 class="modal-title ms-2">
                        Add Level
                    </h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </button>
                </div>
                <div class="modal-body px-4">
                    <div class="form-group form-floating">
                        <input type="text" class="form-control br-15" name="name" value="{{ old('name') }}" placeholder="Level Name" required="required" autofocus>
                        <label for="floatingName">Level Name</label>
                    </div>
                    <div class="form-check mt-3 ms-2 d-none" id="active_div">
                        <input class="form-check-input" type="checkbox" id="active" name="active" value="{{ old('active') }}">
                        <label class="form-check-label" for="active">Active</label>
                    </div>
                </div>
                <div class="modal-footer border-0 me-2 mb-2">
                    <button type="submit" class="btn btn-primary">
                        Add Level
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteConfirmationModal">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 30px;">
            <form method="post" class="mb-0" action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="">
                <div class="modal-header border-0">
                    <h5 class="modal-title ms-2">
                        Confirm Deletion
                    </h5>
                    <button type="button" class="close-btn" data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                    </button>
                </div>
                <div class="modal-body px-4">
                    <h6>
                        Are you sure you want to delete the Level below?
                    </h6>
                    <ul class="list-group my-3">
                        
                    </ul>
                    <h6 class="text-danger">
                        This action cannot be undone.
                    </h6>
                </div>
                <div class="modal-footer border-0 me-2 mb-2">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                        No
                    </button>
                    <button type="button" class="btn btn-danger confirm">
                        Yes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>