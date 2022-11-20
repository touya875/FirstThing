</head>

<body>

  <!-- header -->
  <header class="header-area">
            <!-- <div class="left">
               <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div> -->
            <!-- <div class="right">
               <a href="Javascript:void(0)" onclick="toggleMenu()"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div> -->
            <!-- <div class="sub-menu-wrap" id="subMenu">
                  <div class="sub-menu">
                     <div class="user-info">
                        <h3>No Name</h3>
                     </div>
                     <hr>

                     <a href="#" class="sub-menu-link">
                        <img src="../images/profile.png" alt="">
                        <p>Profile</p>
                     </a>
                     <a href="#" class="sub-menu-link">
                        <img src="../images/setting.png" alt="">
                        <p>Sign In</p>
                     </a>
                     <a href="#" class="sub-menu-link">
                        <img src="../images/logout.png" alt="">
                        <p>Logout</p>
                     </a>
                  </div>
            </div> -->
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.php"></a>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a class="active" href="index.php">HOME</a></li>
                              <li><a href="about.php">ABOUT</a></li>
                              <li><a href="action.php">ACTION</a></li>
                              <li><a href="index.php">AURORA</a></li>
                              <li><a href="news.php">DECLARATION</a></li>
                              <li><a href="ecom-checkout.php">EXPORT</a></li>
                              <li><a href="contact.php">CONTACT</a></li>
                           </ul>
                           <img src="../images/pro1" class="user-pic" onclick="toggleMenu()">
                           <!-- <button class="nav-toggler">
                           <span></span>
                           </button> -->
                           <div class="sub-menu-wrap" id="subMenu">
                              <div class="sub-menu">
                                 <div class="user-info">
                                    <h3>No Name</h3>
                                 </div>
                                 <hr>

                                 <a href="#" class="sub-menu-link">
                                    <img src="../images/profile.png" alt="">
                                    <p>Profile</p>
                                 </a>
                                 <a href="#" class="sub-menu-link">
                                    <img src="../images/setting.png" alt="">
                                    <p>Sign In</p>
                                 </a>
                                 <a href="#" class="sub-menu-link">
                                    <img src="../images/logout.png" alt="">
                                    <p>Logout</p>
                                 </a>
                              </div>
                           </div>
                        </nav>

                     </div>
                  </div>
               </div>
            </div>

<script>
   let subMenu = document.getElementById("subMenu");

   function toggleMenu() {
      subMenu.classList.toggle("open-menu");
   }
</script>
   </header>
<!-- end header -->