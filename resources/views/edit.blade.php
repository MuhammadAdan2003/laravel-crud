<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Form</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            margin-bottom: 30px;
            color: #0d6efd;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="form-container bg-white">

            <h2 class="form-title text-center">Edit Form</h2>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <button class="btn btn-primary float-end mb-2"> <a class="text-light" href="{{ route('show') }}">Show
                    records</a></button>

            <form action="{{ route('update') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $editData['id'] }}" name="id">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input name="name" type="text" class="form-control" id="name"
                        placeholder="Enter your name" value="{{ $editData['name'] }}">
                    @error('name')
                        <span class="text-danger text-sm"> {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email address</label>
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="name@example.com" value="{{ $editData['email'] }}">
                    <div class="form-text">We'll never share your email with anyone else.</div>
                    @error('email')
                        <span class="text-danger text-sm"> {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold">Phone Number</label>
                    <input name="phone" type="tel" class="form-control" id="phone"
                        placeholder="+92 (123) 456-7890" value="{{ $editData['phone'] }}">
                    @error('phone')
                        <span class="text-danger text-sm"> {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary submit-btn">Edit</button>
                </div>
            </form>
            @if (session('success'))
                <div class="alert alert-success mt-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script></script>
</body>

</html>
