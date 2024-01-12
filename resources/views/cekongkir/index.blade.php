<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cek Ongkir</h1>
    <form action="" method="post">
        @csrf
        <label for="province_origin">Provinsi Asal :</label>
        <select id="province_origin" class="form-control">
            <option value="">Pilih Provinsi</option>
            @foreach ($province as $item)
                <option value="{{ $item['province_id'] }}">{{ $item['province'] }}</option>
            @endforeach
    </form>
</body>
</html>
