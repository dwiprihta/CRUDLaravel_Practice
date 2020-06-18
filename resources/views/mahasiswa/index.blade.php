<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
            <!-- Start card -->
            <div class="card" style="width: 100%;">
            <div class="card-body">
            <div class="py-4 d-flex justify-content-end align-items-center">
                 <h5 class="card-title mr-auto">PENDAFTARAN MAHASISWA</h5>
                 <a class="btn btn-primary" href="{{ route('mahasiswas.create') }}">Tambah Mahasiswas</a>
            </div>
                @if (session()->has('notif'))
                <div class="alert alert-success">
                    {{ session()->get('notif') }}
                </div>
                @endif

                 <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nip</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jensi Kelamin</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="{{url('mahasiswas/'.$mahasiswa->id)}}">{{ $mahasiswa->nim }}</a></td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan':'Laki-Laki'}}</td>
                            <td>{{ $mahasiswa->jurusan }}</td>
                            <td>{{ $mahasiswa->alamat == '' ? 'N/A':$mahasiswa->alamat}}</td>
                            <td><a class="btn btn-sm btn-info" href="{{route('mahasiswas.edit',['mahasiswa'=>$mahasiswa->id])}}"/>Edit</a> 
                           <form action="{{ route('mahasiswas.destroy',['mahasiswa'=>$mahasiswa->id])}}" method="POST">
                               @method('DELETE')
                               @csrf    
                                <button type="submit" class="btn btn-sm btn-danger">Del</button>
                           </form>
                            </td>
                        </tr>
                        @empty
                        <td><div class="alert alert-primary" role="alert">Data ini masih kosong</div></td>
                        @endforelse
                    </tbody>
                    </table>
            </div>
        </div>
        <!-- end card -->
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>