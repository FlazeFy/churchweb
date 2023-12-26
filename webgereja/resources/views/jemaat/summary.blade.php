<h4>Status Jemaat</h4>
<div class="row">
    @foreach($summary as $s)
        <div class="col"><h2>{{$s->total}}</h2> <p style="font-size:var(--textLG);">{{ucfirst($s->status)}}</p></div>
    @endforeach
</div>
