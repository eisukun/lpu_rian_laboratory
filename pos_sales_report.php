<?php
include 'process/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM `salestbl`;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $item_name = $_POST['search'];
    $sql = "SELECT * FROM `salestbl` WHERE item_name = '$item_name' OR id = '$item_name';";
    $result = $conn->query($sql);
    if(!$item_name){
        $sql = "SELECT * FROM `salestbl`;";
        $result = $conn->query($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body style="background:black url(Images/Assets/pattern.webp);">
    <div class="d-flex">
        <!-- sidebar -->
        <div class="vh-100 sticky-top" style="width: 280px;">

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
                    <a href="Payroll_page.php" class="nav-link active text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="payroll_report.php" class="nav-link text text-white mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Laptops.php" class="nav-link text-white mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="pos_sales_report.php" class="nav-link mb-4">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="user_account_page.php" class="nav-link text-white mb-4">
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
        <!-- main content -->
        <div class="flex-grow-1 bg-white">
            <div class="container bg-white">
                <h1 class="d-flex justify-content-center m-2" style="font-size:30px;">POS Report</h1>
                <form action="" method="post" class="input-group mb-3 mt-3" style="height: 2rem; width:250px">
                    <input type="text" class="form-control" aria-describedby="button-addon2" placeholder="Search item name" name='search'>
                    <button class="btn btn-outline-secondary" type="submit" id="search_button"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" class="">
                            <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                        </svg></button>
                </form>
                <table class="table table-hover">
                    <thead class="border">
                        <tr>
                            <th scope="col" class="border bg-dark text-white">Product Name</th>
                            <th scope="col" class="border bg-dark text-white">Quantity</th>
                            <th scope="col" class="border bg-dark text-white">Product Price</th>
                            <th scope="col" class="border bg-dark text-white">Discount Amount</th>
                            <th scope="col" class="border bg-dark text-white">Discounted Amount</th>
                            <th scope="col" class="border bg-dark text-white">Cash Given</th>
                            <th scope="col" class="border bg-dark text-white">Change</th>
                            <th scope="col" class="border bg-dark text-white">Sale ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result) {
                            while ($item = $result->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td class='border'>$item[item_name]</td>
                                    <td class='border'>$item[quantity]</td>
                                    <td class='border'>$item[price]</td>
                                    <td class='border'>$item[discount_amount]</td>
                                    <td class='border'>$item[discounted_amount]</td>
                                    <td class='border'>$item[cash_given]</td>
                                    <td class='border'>$item[customer_change]</td>
                                    <td class='border'>$item[id]</td>
                                </tr>
                                ";
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href")
        })
    })
</script>
</html>