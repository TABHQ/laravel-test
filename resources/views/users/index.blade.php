<html>
<head>
    <title>TAB Recruitment Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
</head>
<body>
<div
    class="d-flex flex-column justify-content-center align-items-center col-12"
    style="min-height: 100vh"
>
    <div class="col-8 mb-4">
        <a href="{{route('home')}}" class="btn btn-info"
        >Back to dashboard</a
        >
    </div>
    <div class="col-8">
        <h1>All users</h1>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Bank value</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="align-middle">{{$user->id}}</td>
                    <td class="align-middle">{{$user->name}}</td>
                    <td class="align-middle">{{$user->email}}</td>
                    <td class="align-middle">£0</td>
                    <td
                        class="d-flex flex-row justify-content-end align-items-center"
                    >
                        <a href="{{route('users.show', ['id' => $user->id])}}" class="btn btn-warning"
                        >Open user</a
                        >
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
</body>
</html>
