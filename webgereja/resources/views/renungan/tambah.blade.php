<div class="modal fade" id="addRenunganModal" tabindex="-1" aria-labelledby="diakoniaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/renungan/tambah" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="diakoniaModalLabel">Tambah Renungan</h2>
                    <input class="form-control mb-2" name="judul" type="text" placeholder="Judul">
                    <input class="form-control mb-2" name="for_date" type="date" id="modalDate" value="">
                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="kitab">      
                                @php($i = 0)      
                                @foreach($kitab as $kb)
                                    <option value="{{$kb->kamus_slug}}" <?php if($i == 0){ echo "selected";} ?> >{{$kb->kamus_nama}}</option>
                                    @php($i++)
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <input class="form-control mb-2" name="ayat" type="text" placeholder="Ayat">
                        </div>
                    </div>
                    <div id="rich_box" style="height:55vh !important;"></div>
                    <input hidden id="isi" name="isi">
                    <button type="submit" onclick="getRichText()" class="btn btn-success mt-3 float-end"><i class="fa-solid fa-paper-plane"></i> Simpan Renungan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var desc = document.getElementById("isi");

    function deleteAfterCharacter(str, character) {
        var index = str.indexOf(character);
        if (index !== -1) {
            return str.slice(0, index);
        } else {
            return str;
        }
    }

    function getRichText(){
        var rawText = document.getElementById("rich_box").innerHTML;
        var cleanText = splitOutRichTag(rawText);        
        var characterToDeleteAfter = "</div>";
        var modifiedString = deleteAfterCharacter(cleanText, characterToDeleteAfter);
        desc.value = modifiedString;
    }
</script>

<!-- Main Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#rich_box', {
        theme: 'snow'
    });
</script>