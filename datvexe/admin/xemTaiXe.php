<?php ob_start();
include "../connect.php";
session_start();

if (!isset($_SESSION['mySessionAdmin'])){
  echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
  header("Refresh: 0;url=index.php");
} 

?>

<?php




$this_id = $_GET['this_id'];

?>




<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tables - Windmill Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
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
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
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
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
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
                    <form method="post" class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input name="noidung" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Tìm kiếm " aria-label="Search" />
                        </div>
                        <button name="timkiem" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tìm kiếm</button>
                    </form>
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

        <?php

        $sql = "SELECT * FROM taixe a, xe b, tuyenchay c, chuyen d where a.TX_Ma = d.TX_Ma and b.X_Ma = d.X_Ma and c.TC_Ma = d.TC_Ma and a.TX_Ma=" . $this_id;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

    //     if ($row['PD_TrangThai'] == 1) {
    //       $row['PD_TrangThai'] = "Đặt thành công";
    //   } else if ($row['PD_TrangThai'] == 2) {
    //       $row['PD_TrangThai'] = "Đã hoàn thành";
    //   }
    //   else if ($row['PD_TrangThai'] == 3) {
    //       $row['PD_TrangThai'] = "Đã bị xoá";
    //   }else {
    //       $row['PD_TrangThai'] = "Đã huỷ";
    //   }
        ?>
        <div class="container px-6 mx-auto grid">

          <h2 class="text-center my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            CHI TIẾT TÀI XẾ
    
          </h2>
         <h2 class="text-center"style="font-size:18px; color:darkblue"  ><i class="fa fa-user"></i> <b >Thông tin cá nhân</b></h2>
        
          <div class="flex items-center  p-6 bg-gray-50 dark:bg-gray-900">
            <div class="flex-1 h-full mx-auto  bg-white  shadow-xl dark:bg-gray-800">


              <div class="flex flex-col overflow-y-auto md:flex-row">
                <div style="padding-top: 3rem;padding-left: 10rem" class="h-32 md:h-auto md:w-1/2">
                  <img width="70%" class="" src="../img/Xe/ghe/<?php echo $row["TX_Hinh"]; ?>" loading="lazy" />
                </div>
                <div class=" items-center justify-center p-6 sm:p-12 md:w-1/2">


                  <h3 ><b>Họ tên: </b><?php echo $row["TX_Ten"]; ?></h3>
                  <ul class="list-unstyled booking-info">
                    <li><b>Ngày sinh: </b><?php  $date = date_create($row["TX_NgaySinh"]);
                        echo date_format($date, "d-m-Y ") ; ?></li>
                
                    <li><b>Giới tính: </b><?php echo $row["TX_GioiTinh"]; ?></li>
                    <li><b>Số GPLX: </b><?php echo $row["TX_GPLX"]; ?></li>
                    <li><b>Số điện thoại: </b><?php echo $row["TX_Sdt"]; ?></li>
                    <li><b>Địa chỉ: </b><?php echo $row["TX_DiaChi"]; ?></li>
              
                
                  </ul>

                  <!-- You should use a button here, as the anchor is only used for the example  -->
                  <a style=" font-size:16px; width: 40%;" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="capnhatTX.php?this_id=<?php echo $row['TX_Ma'] ?> ">
                    SỬA
                  </a>
                </div>

                
              </div>

            </div>
           
        </div>
        <div class="container px-6 mx-auto grid">

         <h2 style="font-size:18px; color:darkblue" class="text-center" ><i class="fa fa-calendar" ></i> <b >Lịch làm việc</b></h2>
        
          <div class="flex items-center  p-6 bg-gray-50 dark:bg-gray-900">
            <div class="flex-1 h-full mx-auto    ">
            <style>
                                 
                                 th, td {
                                 padding: 8px;                           
                                 border-bottom: 1px solid #DDD;
                                 }
                                 tr:hover {background-color: #e7eff6;}

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

            <table style="width:100%;background-color: #fffef9; margin-bottom:2rem; margin-left: auto; margin-right: auto;border-color:white" border="2" border-color="white" border-style="solid" >
            <?php
                            $i=0;
                            $sl = "SELECT * FROM taixe a, xe b, tuyenchay c, chuyen d where a.TX_Ma = d.TX_Ma and b.X_Ma = d.X_Ma and c.TC_Ma = d.TC_Ma and C_ThoiGianDen > NOW() and a.TX_Ma='$this_id' ORDER BY C_ThoiGianXP ";
                            $re = mysqli_query($conn, $sl);
                            if(mysqli_num_rows($re) == false){ ?>
                                <h4 class="text-center"  style="color:blue">
                                    <span style="color: red;margin:2rem;">(Hiện tại chưa có lịch làm việc)</span> 
                                </h4>
                                <?php
                                
                                }else{ ?>
                           <tr style="background-color: #009688;color:white" >
                           <!-- <th  style="width: 15%;text-align:center;">Tuyến</th> -->
                           <th style="width: 5%;text-align:center;">STT</th>
                           <th style="width: 10%;text-align:center;">Thứ</th>
                           <th style="width: 20%;text-align:center;padding:20px;">Thời gian</th>
                            <th style="width: 20%;text-align:center;">Chuyến</th>
                            <th style="width: 13%;text-align:center;">Xe</th>
                            <th style="width: 15%;text-align:center;">Bến xe</th>

                            <th style="text-align:center;">Hành động</th>
                            
                           

                            </tr>
                           

                          
                          <?php
                             while ($ro = mysqli_fetch_array($re)) { 
                            $i++;
                        ?> 
                         <tr style="text-align:center;">
                         <td><?php echo $i ?></td>
                         <td><?php $days = array(
                                                'Chủ nhật',
                                                'Thứ hai',
                                                'Thứ ba',
                                                'Thứ tư',
                                                'Thứ năm',
                                                'Thứ sáu',
                                                'Thứ bảy'
                                            );
                                            $date = strtotime($ro["C_ThoiGianXP"]); 
                                            echo $days[date("w", $date)] ?></td>
                        <td ><?php $date=date_create($ro["C_ThoiGianXP"]); echo date_format( $date, "d-m-Y (H:i:s)");   ?> </td>
                        <td> <?php echo $ro['TC_Ten'] ?></td>   
                        <td> <?php echo $ro["X_BienSo"]?></td>
                        <?php
                                     $s = "SELECT * FROM chuyen a, benxe b where a.BXKH_Ma=b.BX_Ma and C_Ma = '".$ro['C_Ma']."'";
                                     $q = mysqli_query($conn, $s);
                                     $r = mysqli_fetch_assoc($q);
                                     ?>
                        <td> <?php echo $r['BX_Ten'] ?></td>
                       
                        <td ><a href="chitietLich.php?this_id=<?php echo $ro['C_Ma'] ?>" style="color: blue;text-decoration: none; cursor:pointer"><b>Chi tiết <i class="fa fa-eye"></i></b></a> </td>
                       
                            </tr>
                                  
                        <?php } 
                        ?> </table> <?php } ?>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>
</body>

</html>