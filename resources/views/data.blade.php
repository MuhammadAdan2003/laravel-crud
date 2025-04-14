<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Table</title>
    <style>
        .data-table {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            overflow: hidden;
        }

        .table-header {
            background-color: #0d6efd;
            color: white;
        }

        .table-title {
            color: #0d6efd;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .table-responsive {
            border-radius: 10px;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(13, 110, 253, 0.1);
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <h2 class="table-title text-center">User Data</h2>
        @if (session('success'))
            <div class="alert alert-danger mt-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('update'))
            <div class="alert alert-success mt-4" role="alert">
                {{ session('update') }}
            </div>
        @endif

        <div class="text-end mb-3">
            <a href="{{ route('home') }}" class="text-light btn btn-primary">Add new
                record</a>
        </div>

        <div class="table-responsive data-table">
            <table class="table table-striped text-center table-bordered table-hover align-middle mb-0">
                <thead class="table-header">
                    <tr>
                        <th scope="col" class="text-center">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($data) == 0)
                        <tr>
                            <td colspan="5" class="bg-light">
                                no record found
                            </td>
                        </tr>
                    @else
                        @foreach ($data as $finalData)
                            <tr>
                                <th scope="row" class="text-center">{{ $finalData['id'] }}</th>
                                <td>{{ $finalData['name'] }}</td>
                                <td>{{ $finalData['email'] }}</td>
                                <td>{{ $finalData['phone'] }}</td>
                                <td><a href="{{ route('editEdit', $finalData['id']) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <form action="{{ route('delete', $finalData['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </form>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
