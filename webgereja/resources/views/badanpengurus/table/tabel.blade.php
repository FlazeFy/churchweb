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
    <div class="col-6">
        <div class="mx-auto" style="max-width:720px">
            @if ($b->grup != $before) 
                <h3 class="text d-flex justify-content-center">{{$b->grup}}</h3>
            @endif
            <div class="row">
                <div class="col-6">
                    <h6><b>{{$b->jabatan}}</b></h6>
                </div>
                <div class="col-6">
                    <h6>{{$b->nama}}</h6>
                </div>
            </div>
        </div>
    </div>
    @php ($before = $b->grup)
    @endforeach
</div>
