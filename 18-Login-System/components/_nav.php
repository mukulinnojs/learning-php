<?php
session_start();
?>
<!-- Nabar -->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Login System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 gap-2 pe-3">
                    <?php
                    if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'])) {
                        echo "
                        <li class='nav-item'>
                        <button class='btn btn-primary' data-bs-toggle='modal'
                        data-bs-target='#loginmodal'>Login</button>
                        </li>
                        <li class='nav-item'>
                        <button class='btn btn-success' data-bs-toggle='modal'
                        data-bs-target='#signupmodal'>Signup</button>
                        </li>";
                    } else {
                        echo "
                        <li class='nav-item'>
                        <a href='includes/logout.php' class='btn btn-danger'>Logout</a>
                        </li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>