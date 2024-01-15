<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>To-Do</title>
</head>
<body>
  <header>
    <div class="container text-center align-items-center">
      <!-- wrapper row start -->
      <div class="row">
        <!-- title -->
        <div class="row gy-4">
          <h1>To-Do List</h1>
        </div>
        <!-- add chore form begin -->
        <div class="row gy-4">
          <!-- form row start -->
          <form action="./php/functions.php" method="post">
            <div class="row g-2 justify-content-md-center">
              <div class="col-auto">
                <input type="text" class="form-control border-dark-subtle" name="name" maxlength="50" size="50">
                <input type="text" name="verify" value="create" readonly class="d-none">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-outline-primary">Add</button>
              </div>
            </div>
          </form>
          <!--form row end  -->
        </div>
        <!-- add chore form end -->
      </div>
      <!-- wrapper row end -->
    </div>
  </header>

  <main>
    <div class="container overflow-hidden align-items-center">
      <!-- wrapper row start -->
      <div class="row">
        <!-- navegation start -->
        <div class="row gy-4">
          <nav>
            <ul class="nav nav-tabs" data-tab="menu">
              <li class="nav-item">
                <a class="nav-link" href="?">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?filter=0">To-do</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?filter=1">Doing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?filter=2">Done</a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- navegation end -->
        <!-- list header start -->
        <div class="row px-4 gy-2">
          <div class="col-5">
            <h5>Task</h5>
          </div>
          <div class="col-5">
            <h5>Status</h5>
          </div>
          <div class="col-2">
            <h5>Options</h5>
          </div>
          <hr>
        </div>
        <!-- list header end -->

        <?php
          require_once "php/conn.php";

          $query_filter = "";

          if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            if ($filter == "0") {
              $query_filter = " WHERE status = 0";
            } else if ($filter == "1") {
              $query_filter = " WHERE status = 1";
            } else if ($filter == "2") {
              $query_filter = " WHERE status = 2";
            }
          }

          $query = "SELECT chore.id_chore 'id', chore.name 'name', chore.status 'status' FROM chore" . $query_filter;

          $chores = mysqli_query($conn, $query);
          if ($chores -> num_rows != 0):
            while ($chore = mysqli_fetch_assoc($chores)):
        ?>

        <!-- task list start -->
        <div class="row px-4 task">
          <div class="row">
            <div class="col-5">
              <p class="" data-edit="task-name"><?= $chore['name'] ?></p>
              <div class="row edit-form d-none" data-edit="form">
                <!-- form row start -->
                <form action="./php/functions.php" method="post">
                  <div class="row g-2">
                    <div class="col-auto">
                      <input type="text" name="id" value=<?= $chore['id'] ?> readonly class="d-none">
                      <input type="text" class="form-control border-dark-subtle"data-edit="input" name="name" maxlength="50" size="30">
                      <input type="text" name="verify" value="updateName" readonly class="d-none">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn check" data-edit="check"><i class="bi bi-check-lg"></i></button>
                    </div>
                  </div>
                </form>
                <!--form row end  -->
              </div>
            </div>
            <div class="col-5">
              <form action="./php/functions.php" method="post">
                <input type="text" name="id" value=<?= $chore['id'] ?> readonly class="d-none">
                <input type="text" name="verify" value="updateStatus" readonly class="d-none">
                <div class="status-<?= $chore['status'] ?>" data-tab="status">
                  <button type="submit" name="status" value="0" class="btn btn-outline-danger">To-do</button>
                  <button type="submit" name="status" value="1" class="btn btn-outline-warning">Doing</button>
                  <button type="submit" name="status" value="2" class="btn btn-outline-success">Done</button>
                </div>
              </form>
            </div>
            <div class="col-2">
              <form action="./php/functions.php" method="post">
                <input type="text" name="id" value=<?= $chore['id'] ?> readonly class="d-none">
                <input type="text" name="verify" value="delete" readonly class="d-none">
                <button type="submit" class="btn delete"><i class="bi bi-trash3"></i></button>
                <button type="button" class="btn edit" data-edit="button"><i class="bi bi-pencil-square"></i></button>
              </form>
            </div>
          </div>
          <div class="row gy-1">
            <!-- divider -->
            <hr>
          </div>
        </div>
        <!-- task list end -->

        <?php
            endwhile;
          endif;
        ?>
      </div>
      <!-- wrapper row end -->
    </div>
  </main>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="module" src="./dist/script.js"></script>
</body>
</html>