<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OLWS Ins.</title>
    <link rel="icon" type="image/png" href="assets/images/logo/olwsLogo.png"/>

    <link rel="stylesheet" href="/sass/login.css"/>

    <!-- Bootstrap CSS -->
    <link
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            rel="stylesheet"
    />

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
            rel="stylesheet"
    />
</head>
<body>
<?php
// Include the database connection file
include('src/db_connect.php');

$loginError = "";

// Check if the database connection is established
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Check if both username and password are provided
    if (!empty($user) && !empty($pass)) {
        // Sanitize inputs to prevent SQL injection
        $user = $conn->real_escape_string($user);
        $pass = $conn->real_escape_string($pass);

        // Query to check if the username and password exist
        $sql = "SELECT * FROM account WHERE username = '$user' AND password = '$pass'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // Login successful
            header("Location: dashboard.php");
            exit;
        } else {
            // Login failed
            $loginError = "Invalid username or password";
        }
    } else {
        // Username or password not provided
        $loginError = "Please provide both username and password";
    }
}


?>



<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5 header">
                <p class="text-center fs-1 mt-5 px-3 fw-bold py-0 welcome">WELCOME TO</p>
                <p class="text-center fs-6 m-0 px-3 fw-semibold py-1">
                    Our Lady of Walsingham School
                </p>
                <p class="text-center fw-normal mb-3 px-3 py-4 loginText">
                    Login to access your account
                </p>
                <img
                        src="/assets/images/logo/olwsLogo.png"
                        class="img-fluid"
                        alt="Sample image"
                />
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="dashboard.php" class="loginForm">
                    <div class="divider d-inline my-4">
                        <p class="text-left fs-3 ml-4 mt-5 fw-bold mx-3 mb-0">LOGIN</p>
                        <p class="text-left mx-3 ml-4 mb-0">Enter your account details</p>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-2">
                        <input
                                type="text"
                                name="username"
                                id="username"
                                class="form-control form-control-lg mt-4"
                                placeholder="Username :"
                                required
                        />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control form-control-lg"
                                placeholder="Password :"
                                required
                        />
                    </div>

                    <!-- Display login error if any -->
                    <?php if (!empty($loginError)) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $loginError; ?>
    </div>
<?php endif; ?>

                    <div class="d-flex justify-content-between align-items-center mb-4 button">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input
                                    class="form-check-input me-2"
                                    type="checkbox"
                                    value=""
                                    id="form2Example3"
                            />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>

                        <button
                                type="submit"
                                class="btn btn-primary btn-lg"
                        >
                            <p class="m-0">Login</p>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="component" class="container-fluid py-3 d-inline fixed-bottom footer">
        <p class="text-center fw-semibold font-family-Poppins mt-4 mb-0 py-2">
            Unit 1C Mangga St. Corner Lawaan Amparo Subdivision, Caloocan, Philippines
        </p>

        <div class="d-flex justify-content-center email">
            <div class="email d-flex align-items-center mt-1">
                <i class="bi bi-envelope"></i>
                <p class="text-center fw-medium font-family-Poppins col-11 m-0 px-3 py-2">
                    olwsacademic@gmail.com
                </p>
            </div>
            <div class="contact d-flex align-items-center">
                <i class="bi bi-telephone-fill"></i>
                <p class="text-center fw-medium font-family-Poppins  m-0 px-3 py-2">
                    +63 9453174980
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
