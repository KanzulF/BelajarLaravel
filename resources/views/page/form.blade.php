<x-app-main>
      <h1 class="text-center">Edit Data</h1>
        <form action="{{ route('contents.store') }}" method="post">
            <div class="mb-3">
                @csrf
              <label class="form-label">Title</label>
              <input type="text" class="form-control mb-3" name="title">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <a href="{{ route('contents.index') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</x-app-main>