<x-app-layout>
    <x-slot name="header_content">
        <h1>Kelas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="col-12 col-md-12 col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h4></h4>
                </div>
                <div class="card-body">
                   
                 
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
            </div>
        </div>
    </div>
</x-app-layout>
