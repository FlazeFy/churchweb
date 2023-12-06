@php($split = explode(" : ",$renungan->perikop))
@php($ayat = $split[1])

<input class="form-control mb-2" name="judul" type="text" placeholder="Judul" value="{{$renungan->judul}}">
<div class="row">
    <div class="col">
        <select class="form-select" aria-label="Default select example">      
            @php($i = 0)      
            @foreach($kitab as $kb)
                <option value="{{$kb->kamus_slug}}" <?php if($i == 0){ echo "selected";} ?> >{{$kb->kamus_nama}}</option>
                @php($i++)
            @endforeach
        </select>
    </div>
    <div class="col">
        <input class="form-control mb-2" name="ayat" type="text" value="{{$ayat}}" placeholder="Ayat">
    </div>
</div>
<div id="rich_box" style="height:55vh !important;"><?php echo $renungan->isi; ?></div>

<script type="text/javascript">
    var desc = document.getElementById("content_desc");

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