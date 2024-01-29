<?php
include "../connect.php";
include "../duyettrangthaive.php";
session_start();
if (!isset($_SESSION['mySessionAdmin'])){
  echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
  header("Refresh: 0;url=index.php");
} 
// $this_id = $_GET['this_id'];
// $sql = "SELECT * FROM  khachhang b,phieudatve a, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen s WHERE s.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND s.C_Ma=a.C_Ma and a.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma  group by PD_NgayDat";
// $query = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($query);
// if (isset($_POST['capnhatTT'])) {
//   $tt = $_POST['trangthai'];
//   foreach ($tt as $item) {


//     $trangthai = "0";
//     $item = "1";

//     $sql = "UPDATE phieudatve set PD_TrangThai ='$item' where PD_Ma=".$this_id;

//     mysqli_query($conn, $sql);

//     $sl = "UPDATE ghe set G_TrangThai='$trangthai' where G_Ma='".$row['G_Ma']."'";
//     mysqli_query($conn, $sl);
//     // header('location:thahtoan.php');
//   }
// }

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
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
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
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
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

            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLChuyen.php">
              <i class="fa fa-car"></i>
              <span class="ml-4">QUẢN LÝ CHUYẾN</span>
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
            <!-- /<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
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
      <?php
                if (isset($_POST['timkiem'])) {
                  $noidung = $_POST['noidung'];
                } else {
                  echo $noidung = false;
                }
             ?>
      <?php

      $sql = "SELECT * FROM  khachhang b,phieudatve a, chitietphieudat 
      k, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen s WHERE a.PD_Ma=k.PD_Ma and  s.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND s.C_Ma=a.C_Ma and k.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma  group by PD_NgayDat  ";
      $query = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($query);
      ?>
      <main class="h-full pb-16 overflow-y-auto">
        <!-- THÊM TUYẾN -->
        
        <form action="" method="post">
          <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              DANH SÁCH PHIẾU ĐẶT VÉ
              <span @click="togglePagesMenu" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"  >
                            <i class="fa fa-print"> IN</i>                  
                        </span>
                        <template x-if="isPagesMenuOpen" style="width: 50px;">
                            <ul class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900">
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;
                                    <a class="w-full" href="inDSDV.php">DANH SÁCH VÉ HOÀN TẤT</a>
                                </li>
                                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                    <i class="fa fa-genderless" aria-hidden="true"></i>&nbsp;
                                    <a class="w-full" href="inVe.php">
                                       VÉ ĐÃ ĐẶT
                                    </a>
                                </li>    
                    </li>
                </ul>
                </template>
            </h2>
            
           
                        
           
            <!-- DANH SÁCH TUYẾN -->

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class=" text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">STT</th>
                      <th class="px-4 py-3">Mã vé</th>
                      <th class="px-4 py-3" style="width: 5%">Trạng thái</th>
                      <!-- <th class="px-4 py-3" style="width: 30%">Hình Ảnh</th> -->
                      <th class="px-4 py-3" style="width: 20%">Thời gian</th>
                      <th class="px-4 py-3" style="width: 30%">Khách Hàng</th>
                      <th class="px-4 py-3" style="width: 10%">Chuyến</th>
                      <th class="px-4 py-3" style="width: 10%">Ghế</th>
                      <th class="px-4 py-3 " style="width: 10%">Điểm lên xe</th>
                      <th class="px-4 py-3 " style="width: 10%">Tổng tiền</th>
                      <!-- <th class="px-4 py-3" style="width: 30%">Hình Ảnh</th> -->
                      <th class="px-4 py-3 text-center">Hành độnng</th>

                    </tr>
                  </thead>
                
                  <?php

                  // $sql = "SELECT * FROM  khachhang b,phieudatve a,chitietphieudat k, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen e , thanhtoan s WHERE k.PD_Ma=a.PD_Ma and s.PD_Ma=a.PD_Ma and e.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND a.C_Ma=e.C_Ma and k.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma  and PD_TrangThai in (0,1,2,3)  and (a.PD_Ma LIKE '%$noidung%' or a.PD_NgayDat LIKE '%$noidung%' or b.KH_Ten LIKE '%$noidung%' or a.PD_TongTien LIKE '%$noidung%')group by PD_NgayDat order by PD_NgayDat DESC  ";
                  // $query = mysqli_query($conn, $sql);

                  $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;
                  $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                  $offset = ($current_page - 1) * $item_per_page;
                  $products = mysqli_query($conn, "SELECT * FROM  khachhang b,phieudatve a,chitietphieudat k, xe c, ghe d, tuyenchay f, loaixe g, taixe i, chuyen e , thanhtoan s WHERE k.PD_Ma=a.PD_Ma and s.PD_Ma=a.PD_Ma and e.TC_Ma=f.TC_Ma and a.KH_Ma=b.KH_Ma AND a.C_Ma=e.C_Ma and k.G_Ma=d.G_Ma and d.X_Ma=c.X_Ma and c.LX_Ma=g.LX_Ma  and PD_TrangThai in (0,1,2,3,4)  and (a.PD_Ma LIKE '%$noidung%' or a.PD_NgayDat LIKE '%$noidung%' or b.KH_Ten LIKE '%$noidung%' or a.PD_TongTien LIKE '%$noidung%') group by PD_NgayDat order by PD_NgayDat DESC  LIMIT " . $item_per_page . " OFFSET " . $offset);
                  $totalRecords = mysqli_query($conn, "SELECT * FROM phieudatve ");
                  $totalRecords = $totalRecords->num_rows;
                  $totalPages = ceil($totalRecords / $item_per_page);

                  $i = 0;

                  while ($row = mysqli_fetch_array($products)) {
                  ?>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      <tr class="text-gray-700 dark:text-gray-400">
                        <!-- MÃ TUYẾN -->
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <div>
                              <!-- <p class="font-semibold"><?php //echo $row['PD_Ma']; 
                                                            ?></p> -->
                              <?php
                              $i = $i + 1;
                              echo $i;

                              ?>

                              <?php $sl = "select * from chitietphieudat a, phieudatve b,ghe c where a.PD_Ma=b.PD_Ma and a.G_Ma=c.G_Ma and b.C_Ma ='" . $row['C_Ma'] . "' and PD_NgayDat='" . $row['PD_NgayDat'] . "'";
                              $res = mysqli_query($conn, $sl);



                              while ($ro = mysqli_fetch_array($res)) { ?>
                                <input type="hidden" name="PD_Ma" value=" <?php echo $ro["PD_Ma"]; ?> &nbsp;" />



                              <?php } ?>
                            </div>
                          </div>
                        </td>

                        <?php

                        if ($row['PD_TrangThai'] == 1) {
                          $row['PD_TrangThai'] = "Đặt thành công";
                        }
                        if ($row['PD_TrangThai'] == 2) {
                          $row['PD_TrangThai'] = "Đã hoàn thành";
                        }
                         if ($row['PD_TrangThai'] == 3) {
                          $row['PD_TrangThai'] = "Đã bị xoá";
                        }
                        if ($row['PD_TrangThai'] == 4) {
                          $row['PD_TrangThai'] = "Bị huỷ do hết thời hạn xác nhận";
                        }if  ($row['PD_TrangThai'] == 0){
                          $row['PD_TrangThai'] = "Đã huỷ";
                        }
                        ?>

                        <td class="px-4 py-3 text-xs">

                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                          <?php echo $row['PD_Ma']; ?>
                        </span>
                        </td>

                        <td class="px-4 py-3 text-xs">

                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <?php echo $row['PD_TrangThai']; ?>
                          </span>
                        </td>

                        <!-- TÊN TUYẾN -->

                        <!-- <td class="px-4 py-3 text-sm">
                          <div class="">
                            <img width="50%" class="" src="../img/Xe/ghe/<?php //echo $row["TC_Hinh"]; ?>" loading="lazy" />
                            <div class="  " aria-hidden="true"></div>
                          </div>
                        </td> -->

                        <!-- THỜI GIAN -->

                        <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <?php $date=date_create($row["PD_NgayDat"]); echo date_format( $date, "d-m-Y H:i:s") ; ?>
                          </span>
                        </td>

                        <td class="px-4 py-3 text-sm">
                          <?php echo $row['CT_TenKH']; ?>
                        </td>


                        <!-- GIÁ -->
                        <td class="px-4 py-3 text-sm ">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <?php echo $row['TC_Ten']; ?>
                          </span>
                        </td>



                        <td class="px-4 py-3 text-sm ">
                          <span class="text-center" style="color:crimson"> <b>
                          <?php $sl = "select * from  chitietphieudat,ghe where chitietphieudat.G_Ma=ghe.G_Ma and chitietphieudat.PD_Ma ='" . $row['PD_Ma'] . "' ";
                                                      $res = mysqli_query($conn, $sl);
                                                      while ($ro = mysqli_fetch_array($res)) { ?>
                            <?php echo $ro["G_MaSoGhe"]; ?> &nbsp;


                          <?php } ?></b> </span>
                        </td>

                      

                        <td class="px-4 py-3 text-sm">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <?php echo $row['PD_DiemDon']; ?>
                          </span>
                        </td>

                        <td class="px-4 py-3 text-sm">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <?php echo number_format($row["PD_TongTien"])  ?>
                          </span>
                        </td>


                        <td class="px-4 py-3">
                          <!-- SỬA -->
                          <div class="flex items-center space-x-4 text-sm">
                            <form action="" method="post">
                              <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Sua" href="xemPD.php?this_id=<?php echo $row['PD_Ma'] ?> ">
                                <i class="fa fa-eye"></i>

                              </a>
                              <input type="hidden" name="PD_Ma" value="<?php echo $row['PD_Ma']; ?>" />
                            </form>

                            <form action="" method="post">
                              <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Sua" href="capnhatTT.php?this_id=<?php echo $row['PD_Ma'] ?> ">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                </svg>

                              </a>
                              <input type="hidden" name="PD_Ma" value="<?php echo $row['PD_Ma']; ?>" />
                            </form>

                            <!-- XOÁ -->

                            <form action="" method="post">
                              <a style="color: red;" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Xoa" class="btn btn-info btn-sm" href="xoaPD.php?this_id=<?php echo $row['PD_Ma'] ?> ">

                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                              </a>
                              <input type="hidden" name="PD_Ma" value="<?php echo $row['PD_Ma']; ?>" />
                            </form>

                             <!-- IN -->
                            <form action="" method="post">
                              <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Xoa" class="btn btn-info btn-sm" href="inDV.php?this_id=<?php echo $row['PD_Ma'] ?> ">
                                <i class="fa fa-print"></i>
                              </a>
                              <input type="hidden" name="PD_Ma" value="<?php echo $row['PD_Ma']; ?>" />
                            </form>

                          </div>
                        </td>
                      </tr>
                    </tbody>
                  <?php } ?>

                </table>
              </div>
            </div>
        </form>
        <?php include "trang.php"?>
    </div>
  </div>
  </main>
  </div>
  </div>
</body>

</html>