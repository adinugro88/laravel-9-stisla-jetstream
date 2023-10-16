

    <x-slot name="header_content">
     
        <h1>Student</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Student</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
         @include('livewire.student.create')
           
        </div>
        <div class="card-body">
           
            <table class="table">
                <caption>List of users</caption>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">nama</th>
                        <th scope="col">grade</th>
                        <th scope="col">phone</th>
                        <th scope="col">address</th>
                        <th scope="col">school</th>
                        <th scope="col">parent</th>
                        <th scope="col">phone parent</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
        
                    {{-- @if(isset($kelas))
                   
                    @php
                    $no =1;
                    @endphp
                    @foreach ($kelas as $item) --}}
                    <tr>
                        <th scope="row">1</th>
                        <td>2</td>
                        <td>5</td>
                        <td>@mdo</td>
                        <td>2</td>
                        <td>5</td>
                        <td>@mdo</td>
                        <td>2</td>
                        <td>5</td>
                        <td>@mdo</td>
                       
                    </tr>
                    {{-- @endforeach
        
                    @else --}}
                    {{-- <tr>
                        <td><h2>data kosong</h2></td>
                        
                    </tr> --}}
                   
                    {{-- @endif --}}
                   
        
        
                </tbody>
            </table>
        </div>
    </div>
  

