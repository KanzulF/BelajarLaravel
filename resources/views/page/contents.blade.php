 @extends('layouts.main')
 
 @section('{{ $slug }}')
 <h1 class="text-center">{{ $slug }}</h1>
 <table class="table table-striped mt-3 table-bordered align-middle" action="href">
   <a href="{{ route('contents.create') }}" class="btn btn-primary">Tambah Data</a>
     <thead>
       <tr class="btn-primary text-center">
         <th scope="col">No</th>
         <th scope="col">Title</th>
         <th scope="col">Description</th>
         <th scope="col">Action</th>
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
         <td class="col-md-2">
           {{-- <a href="{{ route('contents.destroy', $item ->id)  }}" class="btn btn-danger">Delete</a> --}}
           <form action="{{ route('contents.destroy',$item->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger">Delete</button>
           <a href="{{ route('contents.edit', $item ->id) }}" class="btn btn-warning">Edit</a>
           <a href="/move/{{ $item -> status }}/{{ $item -> id }}" class="btn btn-primary {{ $hide }}">Move</a>
           </form>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
 @endsection
