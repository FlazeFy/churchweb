@include('components.typographies.section_title', ['title' => 'Warta Jemaat', 'subtitle' => 'Informasi tentang artikel gereja yang berupa warta jemaat di gereja'])
<br>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
        @foreach($warta as $wt)
            <button class="btn btn-docs"><i class="fa-regular fa-file"></i> {{ucwords($wt->judul)}}</button>
        @endforeach
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12">
        <embed class="w-100 mb-2 rounded" style="height:95vh;" alt="https://firebasestorage.googleapis.com/v0/b/mifik-83723.appspot.com/o/attachment_doc%2F045953ae-99fe-4583-aec4-dc6c9fbf6de7?alt=media&token=f0f3c8a5-f47e-4d40-8532-700f6a576eb7" style="height: 250px;" src="https://firebasestorage.googleapis.com/v0/b/mifik-83723.appspot.com/o/attachment_doc%2F045953ae-99fe-4583-aec4-dc6c9fbf6de7?alt=media&token=f0f3c8a5-f47e-4d40-8532-700f6a576eb7"/>

    </div>
</div>
