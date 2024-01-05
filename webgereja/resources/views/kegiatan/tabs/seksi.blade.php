@php($i = 0)
@foreach($kegiatan as $kg)
    @if($kg->tipe_jadwal == $type)
        @php($props = json_decode($kg->penanggung_jawab, true))
        <div class="row mb-4 pb-2">
            <div class="col">
                @if($i % 2 != 0)
                    <h4>{{$props['penyelenggara']}}</h4>
                    <img class="img img-fluid" src="{{ asset('/assets/kegiatan_seksi_sample.jpg') }}">
                @else 
                    <p class="mt-4">{{$kg->keterangan}}</p>
                    @if($props['tema'] != null)
                        <p class="mb-2">Tema : {{$props['tema']}}</p>
                    @endif
                    @if($props['judul'] != null)
                        <p class="mb-2">Judul : {{$props['judul']}}</p>
                    @endif
                    <p class="mb-2">Hari / Tgl : {{date("D Y-m-d", strtotime($kg->waktu_mulai))}}</p>
                    <p class="mb-2">Pukul : {{date("H:i", strtotime($kg->waktu_mulai))}} - 
                        @if($kg->waktu_selesai != null)
                            {{$kg->waktu_selesai}}
                        @else 
                            Selesai
                        @endif
                    </p>
                @endif
            </div>
            <div class="col">
                @if($i % 2 != 0)
                    <p class="mt-4">{{$kg->keterangan}}</p>
                    @if($props['tema'] != null)
                        <p class="mb-2">Tema : {{$props['tema']}}</p>
                    @endif
                    @if($props['judul'] != null)
                        <p class="mb-2">Judul : {{$props['judul']}}</p>
                    @endif
                    <p class="mb-2">Hari / Tgl : {{date("Y-m-d h:i", strtotime($kg->waktu_mulai))}}</p>
                    <p class="mb-2">Pukul : {{$kg->waktu_mulai}} - 
                        @if($kg->waktu_selesai != null)
                            {{$kg->waktu_selesai}}
                        @else 
                            Selesai
                        @endif
                    </p>
                @else 
                    <h4>{{$props['penyelenggara']}}</h4>
                    <img class="img img-fluid" src="{{ asset('/assets/kegiatan_seksi_sample.jpg') }}">
                @endif
            </div>
        </div>
        @php($i++)
    @endif
@endforeach
@if($i == 0) 
    <div class="text-center">
        <br><img src="{{asset('assets/no_data.png')}}" alt='no_data.png' style='width:30%;'><br>
        <h5>Tidak ada data kegiatan</h5>
    </div>
@endif