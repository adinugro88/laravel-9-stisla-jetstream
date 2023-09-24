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
                   
                @livewire('kelas.index' )
                   
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
