<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegawai List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }
        .table-container {
            padding: 20px;
        }
        .table-card {
            background-color: #fff; /* White background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Soft shadow */
        }
        .table-card-header {
            padding: 20px;
            background-color: #f0f0f0; /* Light grey background for header */
            border-bottom: 1px solid #ccc; /* Border bottom */
        }
        .table-card-body {
            padding: 20px;
        }
        .table-card-footer {
            padding: 20px;
            text-align: center;
        }
        .table-actions {
            white-space: nowrap; /* Prevent button wrap */
        }
        .logout-form {
            margin-top: 10px; /* Spacing for logout button */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="{{ route('logout.post') }}" method="post" class="logout-form">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Table Content -->
    <div class="table-container mt-5">
        <div class="table-card">
            <div class="table-card-header">
                <h2 class="text-center">Pegawai List</h2>
                <a href="/pegawai/create" class="btn btn-primary mb-3">Create New Pegawai</a>
            </div>
            <div class="table-card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1 @endphp
                        @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td class="table-actions">
                                <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                <a onclick="return confirm('Are you sure you want to delete?')" href="/pegawai/delete/{{ $p->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="table-card-footer">
                <p class="mb-0">Total Pegawai: {{ count($pegawai) }}</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
