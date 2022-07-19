<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            Kelompok 2
          </a>
          @auth
            <form action="/logout" class="" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">logout</button>
            </form>
            @else
            <a href="/login" class="btn">login</a>
          @endauth
        </div>
    </nav>

    <div class="container pt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i => $item)
                        <tr>
                        <th scope="row">{{ $i+1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>
                            @auth
                                <form action="/anggota/{{ $item->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" >delete</button>
                                </form>
                                <a href="/anggota/{{ $item->id }}" class="btn btn-success">edit</a>
                                @else
                                <a href="/anggota/{{ $item->id }}" class="btn btn-success">show</a>
                            @endauth
                        </td>
                        </tr>
                    @endforeach
                    @auth
                        <a href="/anggota/" class="btn btn-success">tambah</a>
                    @endauth
                </tbody>
              </table>
    </div>
    
</body>
</html>