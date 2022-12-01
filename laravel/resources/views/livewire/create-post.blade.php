<div>
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<div id="content" style="margin-top: 20px">
    <div id="content" style="margin-top: 20px">
        <div class="container">
          <div class="card">
            <div class="card-header">
              Formulir Pembuatan Postingan
            </div>
            <div>
                @if (session()->has('message'))
                <div class="container" style="margin-top: 20px">
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                </div>
                @endif
            </div>
            
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Postingan</label>
                  <textarea placeholder="tulis sesuatu.." wire:model="body" class="form-control @error('body') is-invalid @enderror" name="" id="" style="width: 100%" rows="10"></textarea>
                  @error('body') <span class="error">{{ $message }}</span> @enderror
                  <div class="d-grid gap-2">
                    {{-- {{ $body }} --}}
                    <button wire:click="createPost" class="btn btn-primary" style="margin-top: 20px" type="button">
                        <div wire:loading wire:target="createPost">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                        </div>
                        Submit
                    </button>
                    
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
