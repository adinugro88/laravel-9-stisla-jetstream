<div>

    @include('livewire.kelas.create')

    @include('livewire.kelas.update')




    @if (session()->has('message'))

    <div class="alert alert-success" style="margin-top:30px;">x

        {{ session('message') }}

    </div>

    @endif
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kelas</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no =1;
            @endphp
            @foreach ($kelas as $item)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$item->kelas}}</td>
                <td>{{$item->keterangan}}</td>
                <td>@mdo</td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
