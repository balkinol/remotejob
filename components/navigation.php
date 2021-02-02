  <div id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar">
        <div class="sidebar-heading">
          <img src="./assets/img/logo.png" alt="logo">
        </div>
        <div class="list-group ">
          <a href="page_home.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i>Home</a>
          <a href="page_job_info.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-info"></i>Job Info</a>
          <a href="page_jobs.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-file-alt"></i>Page Job</a>
          <a href="page_post_job.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-plus"></i> Post a Job</a>
          <a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-sign-in-alt"></i>Sign In</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
      <div id="content">
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-fixed-top main-navbar">
      <a class="navbar-brand" href="#">
        <img class="logo-black" src="./assets/img/black-logo.png" alt="logo">
        <img class="logo-white" src="./assets/img/logo.png" alt="logo">
      </a>
      <button type="button" id="sidebarCollapse">
          <div class="btn-menu" >
            <div class="open "style="display: none;">
              <p class="line-menu"></p>
              <p class="line-menu"></p>
              <p class="line-menu"></p>
            </div>
            <div class="close ">
              <i class="fas fa-times"></i>
            </div>
          </div>
      </button>
      <div class="navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="page_home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_job_info.php">Job Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_jobs.php">Page Job</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_post_job.php">Post Job</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto link-button">
          <li class="nav-item">
            <a  class="nav-link" href="#">
              <i class="fas fa-sign-in-alt"></i>Sign In
            </a>
          </li>
          <li class="nav-item">
            <a
            href="page_post_job.php"
            class="link-color"
            ><i class="fas fa-plus"></i> Post a Job</a
          >
          </li>
        </ul>
      </div>
    </nav>
    <!--Navigation End-->