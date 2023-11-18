<h2>Tata Ibadah</h2>
<table class="table table-paginate" id="tataIbadahTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @for($i = 0; $i < 100; $i++)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        @endfor
    </tbody>
</table>