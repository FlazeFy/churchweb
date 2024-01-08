<style>
    .text{
        font-weight: bold;
        color: var(--primaryColor);
        max-width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border-radius: 5%;
    }
</style>
<div class="row">
    @php ($before = '')
    @foreach ($bph as $b)
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="mx-auto" style="max-width:720px">
            @if ($b->grup != $before) 
                <h3 class="text d-flex justify-content-center mt-2">{{$b->grup}}</h3>
            @endif
            <div class="row mb-2">
                <div class="col-lg-4 col-md-12 col-sm-12 pt-1">
                    <h6><b>{{$b->jabatan}}</b></h6>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 pt-1">
                    <p class="mb-0">{{$b->nama}}</p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <button class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#ubahBph{{$b->id}}Modal"><i class="fa-solid fa-pen-to-square"></i></button>
                    @include('badanpengurus.ubah')
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusBph{{$b->id}}Modal"><i class="fa-solid fa-trash"></i></button>
                    @include('badanpengurus.hapus')
                </div>
            </div>
        </div>
    </div>
    @php ($before = $b->grup)
    @endforeach
</div>
