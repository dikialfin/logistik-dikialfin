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
                <label for="barang">Barang</label>
                <select name="barang" class="form-control @error('barang') is-invalid @enderror" id="barang">
                    @foreach($listBarang as $barang)
                    <option value="{{$barang->id}}">{{$barang->nama}}</option>
                    @endforeach
                </select>
                @error('barang')
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
    <div class="row mb-4">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="asal">Asal Barang</label>
                <textarea name="asal" class="form-control @error('asal') is-invalid @enderror" id="asal" rows="3"></textarea>
                @error('asal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal">
                @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</x-form>