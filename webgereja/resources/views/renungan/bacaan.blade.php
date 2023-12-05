<div class="text-center">
    @if($renungan != null)
        <h3 style="color: var(--primaryColor)">{{$renungan->judul}}</h3>
        <h4>{{$renungan->perikop}}</h4>
        <p class="fst-italic text-secondary" style="font-size: var(--textXMD);">{{date("Y M d", strtotime($renungan->for_date))}}</p>
        <?php echo $renungan->isi; ?>
    @endif
</div>