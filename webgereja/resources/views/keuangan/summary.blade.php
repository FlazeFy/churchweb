<h4>Total</h4>
<div class="row">
    <div class="col">
        <h6>Pemasukan</h6>
        <p>Rp. {{number_format($pemasukan, 0, ',', '.')}}</p>
    </div>
    <div class="col">
        <h6>Pengeluaran</h6>
        <p>Rp. {{number_format($pengeluaran, 0, ',', '.')}}</p>
    </div>
    <div class="col">
        <h6 class="fw-bold">Sisa</h6>
        <p class="fw-bold">Rp. {{number_format($pemasukan - $pengeluaran, 0, ',', '.')}}</p>
    </div>
</div>
