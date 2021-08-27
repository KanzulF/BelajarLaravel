<x-app-main>
      <h1 class="text-center">Edit Data</h1>
      {{-- {{ dd($data); }} --}}
        <form action="{{ route('contents.update', $data->id) }}" method="post">
          @method('put')
            <div class="mb-3">
                @csrf
                <label class="form-label">Title</label>
              <input type="text" class="form-control" name="title" value="{{ $data->title }}">
              <label class="form-label">Description</label>
              <input type="text" class="form-control" name="description" value="{{ $data->description }}">
            </div>
            <a href="{{ route('contents.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</x-app-main>