<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                @if($deleted= Session::get('success'))
                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                    <strong>{{ $deleted }}</strong> Record deleted successfully.
                </div>
                
                <script>
                    var alertList = document.querySelectorAll(".alert");
                    alertList.forEach(function (alert) {
                        new bootstrap.Alert(alert);
                    });
                </script>
                
                @endif
                
                <h1 class="text-primary fw-bolder display-3 text-center">Our Registered Students</h1>
                <div class="row">
                @foreach($students as $student)

                    <div class="col-lg-3 col-md-6 col-sm-12 my-3">
                    <div class="card" style="">
                     <img src="./student_uploads/{{ $student['image']}}" class="card-img-top" alt="..." style="height:350px">
                        <div class="card-body">
                        <h5 class="card-title">{{ $student['fullName']}}</h5>
                        <p class="card-text">{{ $student['email']}}</p>
                        <p class="card-text">{{ $student['contact']}}</p>
                        <p class="card-text">{{ $student['city']}}</p>
                        <a href="/editstudent/{{ $student->id}}" class="btn btn-primary">Edit</a>
                        <a href="/deletestudent/{{ $student['id']}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    </div>
                    @endforeach

                </div>
            </div>


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
