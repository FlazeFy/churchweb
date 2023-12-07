<div class="modal fade" id="signOutModal" tabindex="-1" aria-labelledby="signOutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class='modal-body text-center'>
                <form class='d-inline' action='/login/signout' method='POST'>
                    @csrf
                    <p style='font-weight:500;'>Apakah Anda yakin ingin keluar?</p>
                    <button type="submit" class='btn btn-danger'>Ya, Keluar</button>
                </form>
            </div>
        </div>
    </div>
</div>