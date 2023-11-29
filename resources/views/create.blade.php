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
    <form action="{{ route('store.data') }}" method="post">
    @csrf
        <div class="row g-3 align-items-center">
            <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" name="name">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Deskripsi</label>
            </div>
            <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" name="description">
            </div>
        </div>
        <button type="submit">simpan</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
