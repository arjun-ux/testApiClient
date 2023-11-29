<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetDataFormApi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>Deskripsi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($jsonData as $i)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $i['name'] }}</td>
                    <td>{{ $i['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('create.data') }}">Tambah</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
