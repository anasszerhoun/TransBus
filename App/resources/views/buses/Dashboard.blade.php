
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <nav class="navbar">
                <div class="container">
                  <a class="navbar-brand text-white fs-6 fw-bold" >
                    <img src="{{asset('assets/images/bus.png')}}" alt="" width="30" height="30">
                    TransBus
                  </a>
                </div>
            </nav>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link active">
                        <i class="bi bi-speedometer2" ></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('buses.index') }}" class="sidebar-link">
                        <i class="bi bi-bus-front-fill"></i>
                        <span>Buses</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('drivers') }}" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Drivers</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('drivers') }}" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Itineraries</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Schedule</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-center">
                <div id="status">
                    <div id="Booking" class="info-box status-item">
                        <div class="heading">
                            <h5>Bookings</h5>
                            <div class="info">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Bookings</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="./booking.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Bus" class="info-box status-item">
                        <div class="heading">
                            <h5>Buses</h5>
                            <div class="info">
                                <i class="fas fa-bus"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Buses</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="./bus.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Route" class="info-box status-item">
                        <div class="heading">
                            <h5>Routes</h5>
                            <div class="info">
                                <i class="fas fa-road"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Routes</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="./route.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Drivers" class="info-box status-item">
                        <div class="heading">
                            <h5>Drivers</h5>
                            <div class="info">
                                <i class="fas fa-th"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Drivers</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="Customer" class="info-box user-item">
                        <div class="heading">
                            <h5>Customers</h5>
                            <div class="info">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Customers</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="">View More <i class="fas fa-arrow-right"></i></a>
                    </div>


                    <div id="Earning" class="info-box user-item">
                        <div class="heading">
                            <h5>Earnings</h5>
                            <div class="info">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <p>Total Earnings</p>
                            <p class="num" data-target="">
                                999
                            </p>
                        </div>
                        <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
