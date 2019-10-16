<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" href="http://example.com/favicon.png"><!--Icon for tab in browser-->
    </head>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Maintenance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Views/Maintenance/MaintenanceCreate.php">Create</a>
          <a class="dropdown-item" href="Views/Maintenance/MaintenanceRead.php">Read</a>
          <a class="dropdown-item" href="Views/Maintenance/MaintenanceUpdate.php">Update</a>
          <a class="dropdown-item" href="Views/Maintenance/MaintenanceDelete.php">Delete</a>
        </div>
        </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reception
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Views/Reception/ReceptionCreate">Create</a>
          <a class="dropdown-item" href="Views/Reception/ReceptionRead">Read</a>
          <a class="dropdown-item" href="Views/Reception/ReceptionUpdate">Update</a>
          <a class="dropdown-item" href="Views/Reception/ReceptionDelete">Delete</a>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Views/User/UserCreate">Create</a>
          <a class="dropdown-item" href="Views/User/UserRead">Read</a>
          <a class="dropdown-item" href="Views/User/UserUpdate">Update</a>
          <a class="dropdown-item" href="Views/User/UserDelete">Delete</a>
        </div>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Golf
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Views/Golf/GolfCreate">Create</a>
          <a class="dropdown-item" href="Views/Golf/GolfRead">Read</a>
          <a class="dropdown-item" href="Views/Golf/GolfUpdate">Update</a>
          <a class="dropdown-item" href="Views/Golf/GolfDelete">Delete</a>
        </div>
        </li>

    </ul>
  </div>
</nav>
