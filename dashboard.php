<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OLWS Inc.</title>
    <link rel="icon" type="image/png" href="assets\images\logo\olwsLogo.png" />

    <link rel="stylesheet" href="sass\index.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar bg-body-tertiary fixed-top header">
      <div class="container-fluid">
        <button
          class="navbar-toggler navbtn"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <div class="navbaricon"><i class="bi bi-list"></i></div>
        </button>
        <div class="user">
          <div class="clock" id="clock"></div>
          <div class="usericoncontainer">
            <div class="usericon"><i class="bi bi-person-circle"></i></div>
          </div>
        </div>
        <div
          class="offcanvas offcanvas-start"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <img
              src="assets\images\logo\olwsLogo.png"
              class="img-fluid logo"
              alt="school logo"
            />
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              Our Lady of Walsingham School, Inc.
            </h5>
          </div>

          <div class="offcanvas-account">
            <div class="container-Account">
              <div class="card mt-5 mx-auto" style="max-width: 400px">
                <div class="card-body">
                  <div class="userAccount">
                    <i class="bi bi-person-circle"></i>
                    <i class="bi bi-bell-fill"></i>
                  </div>
                  <h5 class="Username">UserExample</h5>
                  <p class="gs">Grade / Section</p>
                </div>
              </div>
            </div>

            <div class="offcanvas-body">
              <!---->
            </div>
          </div>
        </div>

        <footer class="text-left py-4 footer fixed-bottom">
          <div class="container">
            <span>&copy; eLearning Commons @ 2024</span>
          </div>
        </footer>
      </div>
    </nav>

    <div class="container-fluid py-3 component">
      <div class="position-relative container">
        <ul class="list-unstyled">
          <span id="currentDate" class="text-white fw-normal"></span>
          <p class="text-white fw-bold welcome">WELCOME, User!</p>
          <p class="text-white fw-normal always">
            Always stay updated in your student portal
          </p>
        </ul>
      </div>
    </div>
    <div class="container-fluid py-3 dashboard">
      <ul class="list-unstyled">
        <p class="fw-normal dash">Dashboard</p>
        <p class="fw-bold announcement">Announcement</p>
      </ul>
    </div>
    <div class="container-fluid py-3 dailynotice">
      <ul class="list-unstyled">
        <p class="fw-normal daily">Daily notice</p>
        <p class="fw-bold activities">Upcoming School Activities</p>
      </ul>
    </div>

    <div class="container my-3">
      <div class="calendar">
        <div
          class="calendar-header d-flex justify-content-between align-items-center"
        >
          <button id="prevMonth" class="btn">&lt;</button>
          <h2 id="monthYear" class="m-0"></h2>
          <button id="nextMonth" class="btn">&gt;</button>
        </div>
        <div class="calendar-body mt-0">
          <div class="row fw-bold">
            <div class="col text-danger">Sun</div>
            <div class="col">Mon</div>
            <div class="col">Tue</div>
            <div class="col">Wed</div>
            <div class="col">Thu</div>
            <div class="col">Fri</div>
            <div class="col">Sat</div>
          </div>
          <div id="calendarDays">
            <div class="col empty"></div>
            <div class="col">1</div>
            <div class="col">2</div>
            <div class="col">3</div>
            <div class="col">4</div>
            <div class="col">5</div>
            <div class="col">6</div>
          </div>
        </div>
      </div>
    </div>

    <script src="script\main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>-->
    <script></script>
  </body>
</html>
