<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MAHASISWA</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container pt-5">
    <div claass="row">
        <div class="col-lg-6">

        <div class="card" style="width: 100%;">
            <div class="card-body">
                 <h5 class="card-title">EDIT MAHASISWA</h5><hr>
                 <form action="{{ route('mahasiswas.update',['mahasiswa'=>$mahasiswa->id]) }}" method="POST">
                 @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" placeholder="Nim..." value="{{old ('nim') ?? $mahasiswa->nim}}">
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nim" placeholder="Nama..." value="{{old ('nama') ?? $mahasiswa->nama}}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin)=='L' ? 'checked': '' }} >
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin)=='P' ? 'checked': '' }} >
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Teknik Komputer"{{(old('jurusan') ?? $mahasiswa->jurusan)=='Teknik Komputer' ? 'selected': '' }}>Teknik Komputer</option>
                            <option value="Teknik Sipil"{{(old('jurusan') ?? $mahasiswa->jurusan)=='Teknik Sipil' ? 'selected': '' }}>Teknik Sipil</option>
                            <option value="Teknik Perkebunan"{{(old('jurusan') ?? $mahasiswa->jurusan)=='Teknik Perkebunan' ? 'selected': '' }}>Teknik Perkebunan</option>
                            </select>
                            @error('jurusan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-groub">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{old('alamat') ?? $mahasiswa->alamat}}</textarea>
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-primary center-block">Daftar</button>
                 </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>