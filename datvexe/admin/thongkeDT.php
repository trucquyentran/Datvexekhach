<?php
include "../connect.php";
session_start();
if (!isset($_SESSION['mySessionAdmin'])){
    echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
    header("Refresh: 0;url=index.php");
} 





?>




<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tables - Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
        <!-- Desktop sidebar -->
        <aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block">
            <div class="py-4 text-gray-500 dark:text-gray-400">
               
                    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="index1.php">
                        TRUC QUYEN
                    </a>
            
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKH.php" >

                            <i class="fa fa-users"></i>
                            <span class="ml-4">QUẢN LÝ KHÁCH HÀNG</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLNV.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ NHÂN VIÊN</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTX.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ TÀI XẾ</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">

                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTuyen.php">
                            <i class="fa fa-road"></i>
                            <span class="ml-4">QUẢN LÝ TUYẾN</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">

                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLChuyen.php">
                            <i class="fa fa-car"></i>
                            <span class="ml-4">QUẢN LÝ CHUYẾN</span>
                        </a>
                    </li>


                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLDV.php">
                            <i class="fa fa-ticket"></i>
                            </svg>
                            <span class="ml-4">QUẢN LÝ VÉ ĐẶT</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">

                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKM.php">
                            <i class="fa fa-tags"></i>
                            <span class="ml-4">QUẢN LÝ KHUYẾN MÃI</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLXe.php">
                            <i class="fa fa-bus"></i>
                            <span class="ml-4">QUẢN LÝ XE</span>
                        </a>
                    </li>


                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLBX.php">
                        <i class="fa fa-university" aria-hidden="true"></i>
                            <span class="ml-4">QUẢN LÝ BẾN XE</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="thongke.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4">THỐNG KÊ</span>
                        </a>
                    </li>


                    <!-- QUẢN LÝ TUYẾN -->

                </ul>

            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="index1.php">
                    TRUC QUYEN
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKH.php">
                            <i class="fa fa-users"></i>
                            <span class="ml-4">QUẢN LÝ KHÁCH HÀNG</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLNV.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ NHÂN VIÊN</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTX.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ TÀI XẾ</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">

                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTuyen.php">
                            <i class="fa fa-road"></i>
                            <span class="ml-4">QUẢN LÝ TUYẾN</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">

                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLChuyen.php">
                            <i class="fa fa-car"></i>
                            <span class="ml-4">QUẢN LÝ CHUYẾN</span>
                        </a>
                    </li>

                </ul>
                <ul>
                    <li class="relative px-6 py-3">

                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLDV.php">
                            <i class="fa fa-ticket"></i>
                            <span class="ml-4">QUẢN LÝ VÉ ĐẶT</span>
                        </a>
                    </li>



                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKM.php">
                            <i class="fa fa-tags"></i>
                            <span class="ml-4">QUẢN LÝ KHUYẾN MÃI</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLXe.php">
                            <i class="fa fa-bus"></i>
                            <span class="ml-4">QUẢN LÝ XE</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLBX.php">
                            <i class="fa fa-bus"></i>
                            <span class="ml-4">QUẢN LÝ BẾN XE</span>
                        </a>
                    </li>


                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="thongke.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4">THỐNG KÊ</span>
                        </a>
                    </li>



                </ul>

            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input name="noidung" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Tìm kiếm " aria-label="Tim kiem" />
                        </div>

                      

                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>
                        <!-- Notifications menu -->

                        <!-- Profile menu -->
                        <li class="relative">

                            <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                                <?php
                                $mail = $_SESSION['mySessionAdmin'];
                                $sql = "SELECT * FROM admin where A_Email='$mail' ";
                                $result = mysqli_query($conn, $sql);
                                if (isset($_SESSION['mySessionAdmin'])) {
                                    if ($row = mysqli_fetch_array($result)) {
                                ?>

                                        <img class="object-cover w-8 h-8 rounded-full" src="../img/Xe/ghe/<?php echo $row["A_Hinh"]; ?>" alt="" aria-hidden="true" />
                                <?php }
                                } ?>

                            </button>
                            <a class="btn  " data-toggle="dropdown" href="">
                                <?php
                                if (isset($_SESSION['mySessionAdmin'])) {
                                    echo '' . $_SESSION['mySessionAdmin'];
                                }
                                ?><i class="dropdown-toggle"> </i></a>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="taikhoan.php">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                            <span>Hồ sơ</span>
                                        </a>
                                    </li>

                                    <li class="flex">
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="dangxuat.php">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            <span>Đăng xuất</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                        <li class="relative">

                        </li>

                    </ul>

            </header>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">


                    <!-- Big section cards -->
                    <br>
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Khách hàng
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    <?php
                                    $sql = "SELECT count(*) as 'tong' FROM khachhang ";
                                    $query = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($query);
                                    echo $row['tong'];
                                    ?>
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Doanh thu
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    <?php
                                    $sql = " SELECT SUM(PD_TongTien) as 'tong' FROM phieudatve where PD_TrangThai = 2; ";

                                    $query = mysqli_query($conn, $sql);


                                    $row = mysqli_fetch_assoc($query);
                                    echo "".number_format($row["tong"])." VND";


                                    ?>

                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                                <i class="fa fa-ticket"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Đơn đặt vé
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    <?php

                                    $sql = "SELECT count(*) as 'tongve' FROM phieudatve where PD_TrangThai = 2 ";

                                    $query = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($query);
                                    echo $row['tongve'];

                                    ?>
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                                <i class="fa fa-road"></i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Số tuyến
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    <?php

                                    $sql = "SELECT count(*) as 'tongtuyen' FROM tuyenchay ";

                                    $query = mysqli_query($conn, $sql);

                                    $row = mysqli_fetch_assoc($query);
                                    echo $row['tongtuyen'];

                                    ?>
                                </p>
                            </div>
                        </div>
                        
                    </div>

                    <div >
                        
                        <span  @click="togglePagesMenu" class=" text-center flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  >
                            <i class="fa fa-server"> <b style="font-family: Roboto; font-size:20px " monospace > &emsp; Thống kê</b> </i>           
                        </span>

                       
                    </div>

                    <div style="margin-top: 1rem;border: 1px solid #ddd; padding: 12px; background-color:white;border-radius:10px;">
                    <form method="post">
                        <input name="tungay" value="<?php if(isset($_POST['thongke']) ){ echo $_POST['tungay'];} else {} ?>" type="date" />
                        <input name="denngay"  value="<?php if(isset($_POST['thongke']) ){ echo $_POST['denngay'];} else {} ?>" type="date" />
                        <button name="thongke" style="background-color: tomato; color:white; border-radius: 5px;width: 120px; height: 40px; "><i class="fa fa-search" ></i> Lọc dữ liệu</button>
                    
                       
                        <style>
                          
                            input{
                                width: 200px; 
                                height: 40px;
                                border: 1px solid gray;
                                border-radius: 5px;
                                border: 1px solid gray;
                            }
                            table {
                                border: 3px solid gray;
                                margin-top: 1rem;
                                border-collapse: collapse;
                                text-align: center;
                              
                              
                            }
                            th, td {
                                border: 1px solid #ccc;
                                padding: 5px;
                            } tr:hover {background-color: #e7eff6;}

                            /************* */
                            .my-btn {
                            
                                color: white;
                                border: none;
                                padding: 5px;
                                cursor: pointer;

                                border-radius:60px; 
                                font-size:16px;
                                background-color:#65c3ba;
                            
                            }

                            .my-btn:hover {
                                color: #fffef9;
                                background-color: #009688;
                            }
                            </style>
                             <?php
                                if(isset($_POST['thongke']) ){

                              
                                $sl = "SELECT sum(PD_TongTien) as 'tong' FROM phieudatve a, chuyen b, tuyenchay c WHERE a.C_Ma=b.C_Ma and b.TC_Ma = c.TC_Ma and PD_TrangThai = '2' and PD_NgayDat BETWEEN '".$_POST['tungay']."' AND '".$_POST['denngay']."'";
                                $re = mysqli_query($conn, $sl);
                                $ro = mysqli_fetch_assoc($re);
                                echo "<p style='text-align: center;margin-top:1rem'> Doanh thu từ ngày <b>".date_format(date_create($_POST['tungay']), "d-m-Y")."</b> đến ngày <b>".date_format(date_create($_POST['denngay']), "d-m-Y")."</b> = <b>".number_format($ro['tong'])." (VNĐ)</b> </p>";

                                }

                            ?>

                            
                            <table border="1">
                            <tr style="background-color: #009688;color:white">
                                <th class="px-4 py-3" style="width: 5%">STT</th>
                                <th class="px-4 py-3" style="width: 18%">Thời gian</th>
                                <th class="px-4 py-3" style="width: 13%">Mã phiếu đặt</th>
                                <th class="px-4 py-3" style="width: 25%">Chuyến</th>
                                <th class="px-4 py-3" style="width: 10%">Đơn giá</th>
                                <th class="px-4 py-3" style="width: 8%">SL ghế</th>
                               
                                <th class="px-4 py-3" style="width: 10%">Thành tiền</th>
                                <th>Hành động</th>
                                
                            </tr>
                            <?php
                                if(isset($_POST['thongke']) ){

                              
                                $sql = "SELECT * FROM phieudatve a, chuyen b, tuyenchay c WHERE a.C_Ma=b.C_Ma and b.TC_Ma = c.TC_Ma and PD_TrangThai = '2' and PD_NgayDat BETWEEN '".$_POST['tungay']."' AND '".$_POST['denngay']."'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) == true) {
                                    // Duyệt các đơn hàng và hiển thị lên bảng thống kê
                                    $i = 0;
                                    $total = 0;
                                   
                            
                                 while($row = mysqli_fetch_array($result)) {
                                    $i++;
                                    $total += $row['PD_TongTien'];
                            ?>
                                <tr>
                                    
                                    <td><?php echo $i ?></td>
                                    <td><?php $date=date_create($row["PD_NgayDat"]); echo date_format( $date, "d-m-Y H:i:s") ; ?></td>
                                    <td><?php echo $row['PD_Ma'] ?></td>
                                    <td><?php echo "".$row['TC_Ten']." (".$row['C_Ma'].")" ?></td>
                                    <td><?php echo number_format($row["C_DonGia"]) ?></td>
                                    <td>
                                        <?php
                                              $s = "select count(G_Ma) as 'tong' from chitietphieudat where PD_Ma ='" . $row['PD_Ma'] . "' ";
                                              $r = mysqli_query($conn, $s);
                                              $o = mysqli_fetch_assoc($r);
                                              echo $o['tong'];
                                        ?>
                                    </td>
                                    <td><?php echo number_format($row["PD_TongTien"]) ?></td>
                                    <td ><a style="color:tomato" href="xemPD.php?this_id=<?php echo $row['PD_Ma'] ?> ">Chi tiết</a></td>
                                    
                                </tr> 

                            <?php
                        } ?><tr>
                           <td style="text-align: center;" colspan="8"><b>Tổng doanh thu:</b>  <?php echo number_format($total) ?> (VNĐ)</td>   
                        
                        </tr> <?php
                            } else { ?><tr>
                                <td style="text-align: center;" colspan="8">Hiện tại chưa có dữ liệu</td>   
                            
                        </tr> <?php }   } else { }?>
                            
                                </table>  

                   
                    </div>
                    <!-- Cards with title -->
                    </form>
                </div>
        
        </div>
   
        </main>
        
    </div>
    </div>
</body>

</html>