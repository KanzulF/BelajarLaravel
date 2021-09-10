<div>
    {{-- @livewire('summary-create') --}}
    {{-- <livewire:summary-create :data=$data></livewire:summary-create> --}}

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <livewire:summary-create></livewire:summary-create>
       
   
        <h1 class="text-center">SUMMARY</h1>
        <table class="table table-striped mt-3 table-bordered align-middle" action="href">
            <thead>
              <tr class="btn-primary text-center">
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              {{-- {{ dd($data[0]); }} --}}
              @foreach ($data as $no => $item) 
              <tr class="text-center">
                {{-- {{ dd($item); }} --}}
                <td class="col-md-1">{{ $no+1 }}</td>
                <td class="col-md-3">{{ $item ->title }}</td>
                <td class="col-md-5">{{ $item ->description }}</td>
                <td class="col-md-2">{{ $item ->status }}</td>
                <td class="col-md-3"> 
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
</div>
