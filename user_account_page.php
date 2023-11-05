<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/user_account_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top bg-black" style="width: 280px;">
            <h1 class="text-white fs-5 text-center my-5">Rian's Choice Enterprise</h1>
            <ul class="nav flex-column mb-auto">
                <li class="">
                    <a href="Admin_page.php" class="nav-link mb-4 text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4">
                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="employee_report.php" class="nav-link text-white mb-4">
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="Payroll_page.php" class="nav-link text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="payroll_report.php" class="nav-link text-white  mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Laptops.php" class="nav-link text-white mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="pos_sales_report.php" class="nav-link text-white mb-4">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_account_page.php" class="nav-link active mb-4">
                        User Account
                    </a>
                </li>
                <li>
                    <a href="login_page.php" class="nav-link text-white  mb-4">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-grow-1 ">
            <div class="container d-flex my-5">
                <!--====== CONTACT ONE PART START ======-->
                <section class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="card" style="width: 100%;">
                                    <img src="Images/Assets/placeholder.jpg" class="card-img-top" alt="..." height="370">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8">
                                <div class="section-title mt-45">
                                    <h3 class="title">User account Information</h3>
                                </div>
                                <div class="contact-form form-style-four mt-15">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>First Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Middle Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Last name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Suffix</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Username</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Confirm Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>User type</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>User status</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Employee Number</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="well mt-5 d-flex justify-content-end gap-3">
                                            <button type="button" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-warning">Delete</button>
                                            <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- contact form -->
                            </div>

                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!--====== CONTACT ONE PART ENDS ======-->
            </div>
        </div>
    </div>
</body>

</html>