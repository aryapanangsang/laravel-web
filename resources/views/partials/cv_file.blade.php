<div class="title-cv">
    <h3 class="font-bold fs-6 text-center">CV / Daftar Riwayat Hidup</h3>
</div>
<div class="row p-4 max-w-max d-flex  justify-content-center">
    <div class="col-sm-8">
        <a href="#">CV-{{ $user->name }}</a>
    </div>
    <div class="col-sm-3 ">
        <a href="" class="btn btn-danger">x</a>
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Upload CV
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload CV Anda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store_cv') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
</button>
