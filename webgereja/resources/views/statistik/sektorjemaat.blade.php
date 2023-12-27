<div class="position-relative">
    <h5 class="text-secondary fw-bold">Statistik jemaat menurut kelompok sektor</h5>
    <button class="btn btn-transparent px-2 py-0 position-absolute" style="right:10px; top:0;" type="button" id="section-more-MOL" data-bs-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="fa-solid fa-ellipsis-vertical more"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="section-more-MOL">
        <span class="dropdown-item">
        <label for="floatingInputValue" style="font-size:12px;">Cakupan diagram</label>
        <input type="number" class="form-control py-1" name="MOL_range" min="3" max="10" value="3" onblur="this.form.submit()" required>
        </span>
        <a class="dropdown-item" data-bs-target="#mlChart" data-bs-toggle="modal"><i class="fa-solid fa-circle-info"></i> Bantuan</a>
    </div>
    <div id="pie_chart_sektor"></div>

    @if(count($statsSektor) == 0)
        <img src="{{asset('assets/nodata.png')}}" class="img nodata-icon">
        <h6 class="text-center">Tanpa data</h6>
    @endif

    @include('components.popup.mini_help', ['id' => 'mlChart', 'title'=> 'Most Location Chart', 'location'=>'most_loc_chart'])
</div>

<script type="text/javascript">
    var options = {
        series: [{
        data: [
            <?php
                foreach($statsSektor as $sk){
                    echo "$sk->total,";
                }
            ?>
        ]
        }],
            chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: [
                <?php
                    foreach($statsSektor as $sk){
                        echo "'$sk->context',";
                    }
                ?>
            ],
        }
    };

    var chart = new ApexCharts(document.querySelector("#pie_chart_sektor"), options);
    chart.render();
</script>