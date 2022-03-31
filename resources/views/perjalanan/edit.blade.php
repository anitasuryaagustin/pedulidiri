<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="/perjalanan/update/{{$table->id}}" method="post">
            @csrf
            @method('PUT')
            <tr>
                <td> ID </td>
                <td> : <input type="text" name="id" value="{{$table->id}}"></td>
            </tr>
            <tr>
                 <td> Tanggal perjalanan </td>
                 <td> : <input type="text" name="tgl_perjalanan" value="{{$table->tgl_perjalanan}}"> </td>
            </tr>
            <tr>
                 <td> Jam </td>
                <td> : <input type="text" name="jam" value="{{$table->jam}}"> </td>
           </tr>
           <tr>
                 <td> Lokasi </td>
                 <td> : <input type="text" name="lokasi" value="{{$table->lokasi}}"> </td>
            </tr>
           <tr>
                 <td> Kota </td>
                 <td> : <input type="text" name="kota" value="{{$table->kota}}"> </td>
                </tr>
           <tr>
                 <td> Kecamatan </td>
                 <td> : <input type="text" name="kecamatan" value="{{$table->kecamatan}}"> </td>
          </tr>
          <tr>
                 <td> Suhu tubuh </td>
                 <td> : <input type="text" name="suhu_tubuh" value="{{$table->suhu_tubuh}}"> </td>
                 </tr>
<tr>
    <td> <button type="submit" class="btn-btn-sm btn=primary"> simpan </button></td>
</tr>
        </form>
    </table>
</body>
</html>
