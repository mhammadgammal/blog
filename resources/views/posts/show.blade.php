<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://unpkg.com/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Codezilla Blog Post</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">All Posts</a>
                    </li>

            </div>
    </nav>

    <div class="card" style="margin:10px;">
        <div class="card">
            <div class="card-header">
                Post info
            </div>

        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $post['title'] }}</h5>
            <p class="card-text">Description: This is Description</p>
        </div>
    </div>
    <div class="card" style="margin:10px;">
        <div class="card">
            <div class="card-header">
                Post Createor Info
            </div>

        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $post['posted_by'] }}</h5>
            <p class="card-text">Created at: {{ $post['created_at'] }}</p>
        </div>
    </div>
    <script src="https://unpkg.com/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
