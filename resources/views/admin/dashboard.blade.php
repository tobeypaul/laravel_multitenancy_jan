<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <title>Admin | Dashboard</title>
</head>

<body>
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-4">
        <h3>Welcome to admin Dashboard</h3>

        <table class="table table-striped">
          <thead>
            <th>Name</th>
            <th>Email</th>
          </thead>
          <tbody>
            <tr>
              <td>{{ $LoggedUserInfo['name'] }}</td>
              <td>{{ $LoggedUserInfo['email'] }}</td>
              <td><a href="{{ route('logout') }}" class="btn btn-danger">Logout</a></td>
            </tr>
          </tbody>
        </table>

        <ul>
          <li><a href="/admin/dashboard">Dashboard</a></li>
          <li><a href="/admin/settings">Settings</a></li>
          <li><a href="/admin/profile">Profile</a></li>
        </ul>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
