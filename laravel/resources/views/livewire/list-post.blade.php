<div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr align="center">
                <th scope="col">No</th>
                <th scope="col">ID User</th>
                <th scope="col">Postingan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($posts as $item)
              <tr align="center">
                <td>{{ $no++ }}</td>
                <td>{{ $item->user_id }}</td>
                <td>{{ $item->body }}</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <button wire:click="showUpdateFrom({{ $item->id }})" class="btn btn-warning" style="width: 100%"> Edit </button>
                        </div>
                        
                        <div class="col-6">
                            <button wire:click="delete({{ $item->id }})" class="btn btn-danger" style="width: 100%"> Hapus </button>
                        </div>
                    </div>
                </td>
                @if($StateId == $item->id)
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Edit Postingan</label>
                              <textarea wire:model="body" class="form-control @error('body') is-invalid @enderror" name="" id="" style="width: 100%" rows="10"></textarea>
                              @error('body') <span class="error">{{ $message }}</span> @enderror
                              <div class="d-grid gap-2">
                                {{-- {{ $body }} --}}
                                <button wire:click="updatePost({{ $item->id }})" class="btn btn-primary" style="margin-top: 20px" type="button">
                                    <div wire:loading wire:target="createPost">
                                        <div class="spinner-border spinner-border-sm" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                          </div>
                                    </div>
                                    Submit
                                </button>
                                
                              </div>
                          </form>
                        @endif
              </tr>
              @endforeach
            </tbody>
          </table>

          <select class="form-select" aria-label="Default select example">
            @foreach ($posts as $post)
            <option value="{{ $post->body }}">{{ $post->body }}</option>
            @endforeach
          </select>

          
    </div>
    
</div>
