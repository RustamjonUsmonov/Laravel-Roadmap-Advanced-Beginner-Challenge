<div class="form-check float-start">
    <label class="form-check-label" for="completedCheck">
        Create New Task
    </label>
</div> <!-- end form-check-->

<hr class="mt-4 mb-2">

<div class="row">
    <div class="col">
        <!-- task description -->
        <div class="row mt-3">
            <div class="col">
                <div class="border rounded">
                    <form class="m-2" action="{{route('tasks.store')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <p class="text-muted font-13">
                                Please write the task title:
                            </p>
                            <input type="text" class="form-control" maxlength="25"
                                   data-toggle="maxlength" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Project ID</label>
                            <p class="text-muted font-13">
                                Write Project id:
                            </p>
                            <input type="number" class="form-control" min="1"
                                   name="project_id" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Due Date</label>
                            <input type="text" class="form-control date" id="due-date"
                                   data-toggle="date-picker" data-single-date-picker="true"
                                   name="due_date" required>
                        </div>

                        <div>
                            <label class="form-label">Description</label>
                            <p class="text-muted font-13">
                                Please write task details properly:
                            </p>
                            <textarea data-toggle="maxlength" class="form-control"
                                      maxlength="225" rows="3"
                                      placeholder="This textarea has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="mb-3 p-2 bg-light">
                            <div class="">
                                <button type="submit" class="btn btn-sm btn-success"><i
                                        class="uil uil-message me-1"></i>Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end task description -->
    </div> <!-- end col -->
</div> <!-- end row-->
