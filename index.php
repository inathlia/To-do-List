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
          <form action="" method="post">
            <div class="row g-2 justify-content-md-center">
              <div class="col-auto">
                <input type="text" class="form-control border-dark-subtle" name="chore" maxlength="50" size="50">
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
                <a class="nav-link active" href="#">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">To-do</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Doing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Done</a>
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
        <!-- task list start -->
        <div class="row px-4 task">
          <div class="row">
            <div class="col-5">
              <p class="" data-edit="task-name">Sample task</p>
              <div class="row edit-form d-none" data-edit="form">
                <!-- form row start -->
                <form action="" method="post">
                  <div class="row g-2">
                    <div class="col-auto">
                      <input type="text" class="form-control border-dark-subtle"data-edit="input" name="chore" maxlength="50" size="30">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn check" data-edit="check"><i class="bi bi-check-lg"></i></button>
                    </div>
                  </div>
                </form>
                <!--form row end  -->
              </div>
            </div>
            <div class="col-5" data-tab="status">
              <button type="button" class="btn btn-outline-danger active">To-do</button>
              <button type="button" class="btn btn-outline-warning">Doing</button>
              <button type="button" class="btn btn-outline-success">Done</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn delete"><i class="bi bi-trash3"></i></button>
              <button type="button" class="btn edit" data-edit="button"><i class="bi bi-pencil-square"></i></button>
            </div>
          </div>
          <div class="row gy-1">
            <!-- divider -->
            <hr>
          </div>
        </div>
        <!-- task list end -->
        <!-- task list start -->
        <div class="row px-4 task">
          <div class="row">
            <div class="col-5">
              <p class="" data-edit="task-name">Sample task 2</p>
              <div class="row edit-form d-none" data-edit="form">
                <!-- form row start -->
                <form action="" method="post">
                  <div class="row g-2">
                    <div class="col-auto">
                      <input type="text" class="form-control border-dark-subtle"data-edit="input" name="chore" maxlength="50" size="30">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn check" data-edit="check"><i class="bi bi-check-lg"></i></button>
                    </div>
                  </div>
                </form>
                <!--form row end  -->
              </div>
            </div>
            <div class="col-5" data-tab="status">
              <button type="button" class="btn btn-outline-danger active">To-do</button>
              <button type="button" class="btn btn-outline-warning">Doing</button>
              <button type="button" class="btn btn-outline-success">Done</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn delete"><i class="bi bi-trash3"></i></button>
              <button type="button" class="btn edit" data-edit="button"><i class="bi bi-pencil-square"></i></button>
            </div>
          </div>
          <div class="row gy-1">
            <!-- divider -->
            <hr>
          </div>
        </div>
        <!-- task list end -->
      </div>
      <!-- wrapper row end -->
    </div>
  </main>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="module" src="./dist/script.js"></script>
</body>
</html>