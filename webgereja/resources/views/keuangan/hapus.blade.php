<div class="modal fade" id="hapusKeuangan{{$ku->id}}Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body text-center">
                <form action="/keuangan/hapus/{{$ku->id}}" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4">Hapus Keuangan</h2>
                    <p>Apakah Anda yakin ingin menghapus keuangan dengan konteks "{{$ku->konteks}}"?</p>
                    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-floppy-disk"></i> Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>