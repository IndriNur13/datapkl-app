<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/daftarpeserta" method="POST">
        @csrf
        <small>Nama Peserta</small> <br>
        <input type="text" name="namapeserta" id=""> <br>
        <small>NIS</small> <br>
        <input type="number" name="nis" id=""> <br>
        <small>Jurusan</small> <br>
        <input type="text" name="jurusan" id=""> <br>
        <small>Asal Sekolah</small> <br>
        <select name="sekolah_id" id="sekolah_id">
            <option value="">Silahkan pilih Asal Sekolah</option>
            @foreach ($sekolah as $item)
                <option value="{{$item->id}}">{{$item->namasekolah}}</option>
            @endforeach
        </select> <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
