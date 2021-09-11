<div>
    <h3>Update Data</h3>
   <form wire:submit.prevent="update">
       <input type="hidden" name="" wire:model='dataId'>
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
       <button type="submit" class="btn btn-sm btn-primary">Update</button>
   </form>
</div>
