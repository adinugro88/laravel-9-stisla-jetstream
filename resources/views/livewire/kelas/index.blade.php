<div>
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $item)
            <tr>
                <th scope="row">{{$item->id}}}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            @endforeach
           
           
        </tbody>
    </table>
</div>
