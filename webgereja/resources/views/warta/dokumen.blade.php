@include('components.typographies.section_title', ['title' => 'Warta Jemaat', 'subtitle' => 'Informasi tentang artikel gereja yang berupa warta jemaat di gereja'])
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
        @foreach($warta as $wt)
            <button class="btn btn-docs"><i class="fa-regular fa-file"></i> {{ucwords($wt->judul)}}</button>
        @endforeach
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <embed class="w-100 mb-2 rounded" style="height:95vh;" alt="https://drive.google.com/file/d/1XzKcbaCZYgMM7D71sNcoSSXdbCk7KRcV/preview" style="height: 250px;" src="https://drive.google.com/file/d/1XzKcbaCZYgMM7D71sNcoSSXdbCk7KRcV/preview"/>

    </div>
</div>
