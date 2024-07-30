<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #ffe803">
    @include('include.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Form Isi Data Peserta
                    </div>
                    <div class="card-body">
                        <form action="/daftarpeserta" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Peserta</label>
                                <input type="text" name="namapeserta" class="form-control" id="" placeholder="Masukkan nama peserta">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="number" name="nis" class="form-control" id="" placeholder="Masukkan NIS">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="" placeholder="Masukkan Jurusan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Sekolah</label>
                                <select name="sekolah_id" id="sekolah_id" class="form-control" placeholder="Masukkan nama sekolah">
                                    <option value="">Silahkan pilih Asal Sekolah</option>
                                    @foreach ($sekolah as $item)
                                        <option value="{{$item->id}}">{{$item->namasekolah}}</option>
                                    @endforeach
                                </select> <br>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"> Simpan </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    DataTable Sekolah
                </h6> <br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta</th>
                                <th>NIS</th>
                                <th>Jurusan</th>
                                <th>Asal Sekolah</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $datapeserta as $item)
                            <tr>
                              <td>{{$item->id}}</td>
                              <td>{{$item->namapeserta}}</td>
                              <td>{{$item->nis}}</td>
                              <td>{{$item->jurusan}}</td>
                              <td>{{optional ($item->sekolah)->namasekolah}}</td>
                            <td>
                            <a href="/peserta/edit/{{$item->id}}">Edit</a>
                            <a href="/peserta/hapus/{{$item->id}}">Hapus</a>
                            </td>

                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
