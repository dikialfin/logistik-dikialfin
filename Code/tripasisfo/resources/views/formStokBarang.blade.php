<x-form>
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session('failed'))
    <div class="alert alert-danger">{{session('failed')}}</div>
    @endif
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Barang">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="kuantitas">Kuantitas</label>
                <input name="kuantitas" type="number" class="form-control @error('kuantitas') is-invalid @enderror" id="kuantitas" placeholder="kuantitas">
                @error('kuantitas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</x-form>