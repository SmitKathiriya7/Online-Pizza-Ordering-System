<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----===== Iconscout CSS ===== -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
<script src="fontawesome-free-6.2.1-web/js/all.js"></script>

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./images/LOGO2.jpg" alt="">
            </div>
            <span class="logo_name">K's Delicious</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="./admin.html">
                    <i class="fa-solid fa-home-user f-color-b f-color"></i>
                    <span class="link-name">&nbsp; Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-pizza-slice  f-color-b f-color"></i>
                    <!-- <a href="https://iconscout.com/icon/pizza-1440161"></a> -->
                    <span class="link-name">&nbsp; Products</span>
                </a></li>
                <li><a href="Customer.php">
                    <i class="fa-solid fa-people-line  f-color-b f-color"></i>
                    <span class="link-name">&nbsp; Customer</span>
                </a></li>
                <li><a href="./Order.html">
                    <i class="fa-solid fa-truck  f-color-b f-color"></i>
                    <span class="link-name">&nbsp; Orders</span>
                </a></li>
                <li><a href="./Administration.html">
                    <i class="fa-solid fa-user  f-color-b f-color"></i>
                    <span class="link-name">&nbsp; Administration</span>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-info-circle  f-color-b f-color"></i>
                    <span class="link-name">&nbsp; Payment Info</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="fa-solid fa-sign-out  f-color-b f-color"></i>
                    <span class="link-name">&nbsp; Logout</span>
                </a></li>
<!-- 
                <li class="mode">
                    <a href="#">
                        <i class="fa-solid fa-moon  f-color-b f-color"></i>
                    <span class="link-name">Dark Mode</span>
                </a> -->

                <div class="mode-toggle">
                  <!-- <span class="switch"></span> -->
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <!-- <i class="uil uil-bars sidebar-toggle"></i> -->
               <img class=" sidebar-toggle" src="./images/menu.png" alt="">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass searchbaricon"></i>
                <!-- <i class="fa-solid fa-line searchbaricon"></i> -->
                <input type="text" placeholder="Search here...">
            </div>
            <img src="./images/LOGO2.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-pizza-slice"></i>
                    <span class="text">Products</span>
                    <span class="addproduct">add product</span>
                </div>
            </div>

            <div class="activity">
                <div class="activity-data">
                    <div class="data type">
                        <span class="data-title">Item Id</span>
                        <span class="data-list ">001</span>
                        <span class="data-list ">002</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Image</span>
                          <img class="data-list "  src="./images/LOGO2.jpg" style="width: 35px; border-radius: 50%;">
                          <img class="data-list " src="./images/LOGO2.jpg" style="width: 35px; border-radius: 50%;">
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list ">Cheese pizza</span>
                        <span class="data-list ">Margherita pizza</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">description</span>
                        <span class="data-list ">this product is very good </span>
                        <span class="data-list ">this product is also very good</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Price</span>
                        <span class="data-list ">$20</span>
                        <span class="data-list ">$30</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Delete</span>
                        <span class="data-list fa-solid fa-trash-can-arrow-up productspace"></span>
                        <span class="data-list fa-solid fa-trash-can-arrow-up productspace"></span>
                    </div>

                    <!-- <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" class="data-title">Item Id</th>
                            <th scope="col" class="data-title">Name</th>
                            <th scope="col" class="data-title">description</th>
                            <th scope="col" class="data-title">Price</th>
                            <th scope="col" class="data-title">Edit</th>
                            <th scope="col" class="data-title">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="data">
                            <td class="data-list">001</td>
                            <td class="data-list">Cheese</td>
                            <td class="data-list">nice one</td>
                            <td class="data-list">$10</td>
                            <td><i class="data-list fa-solid fa-edit "></i></td>
                            <td><i  class="data-list fa-solid fa-delete-left "></i></td>
                          </tr>
                    
                        </tbody>
                      </table>
                    -->
                </div>
            </div>
        </div>
    </section>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="admin.js"></script>
</body>
</html>
