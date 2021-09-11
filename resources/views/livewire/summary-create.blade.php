<div>
     {{-- <form wire:submit.prevent="{{ $action }}">
            <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input type="text" class="form-control mb-3" name="title"
                    @error($data['title']) border-danger @enderror wire:model.defer="data.title">
                    
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3"
                    @error($data['description']) border-danger @enderror wire:model.defer="data.description"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="SUBMIT">
        </form> --}}

    <form wire:submit.prevent="store">
        <h3>Create Data</h3>
        <div class="form-group">
            <div class="form-row">
                <div class="col mb-3">
                    <label class="form-label">Title</label>
                    <input wire:model="title" type="text" name="" id="" class="form-control 
                    @error('title') is-invalid @enderror" placeholder="Title">

                    @error('title')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="col mb-3">
                    <label class="form-label">Description</label>
                    <textarea wire:model="description" type="text" name="" id="" class="form-control
                    @error('description') is-invalid @enderror" placeholder="Description"></textarea>
                    
                    @error('description')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
        </div>
        {{-- <input type="submit" class="btn btn-primary" value="SUBMIT"> --}}
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
