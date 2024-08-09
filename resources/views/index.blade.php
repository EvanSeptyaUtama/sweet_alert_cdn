<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Fitur Sweet Alert</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if (Session::has('success'))
                    <script>
                        swal("Sukses", "{{ Session::get('success') }}", 'success', {
                            button: true,
                            button: "OKE",
                            time: 3000,
                        });
                    </script>
                @endif
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary delete-data" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            + Makanan
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Makanan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            @forelse ($makanans as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama_makanan }}</td>
                                    <td>{{ $item->deskripsi_makanan }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td><i>Data kosong!</i></td>
                                </tr>
                            @endforelse
                        </table>

                        @include('create')
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
