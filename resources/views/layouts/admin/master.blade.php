<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Dashboard </title>
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Separate CSS file -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-header">
      <div class="logo-icon"><i class="fas fa-layer-group"></i></div>
      <span class="logo-text">Admin Pannel</span>
    </div>

    <div class="sidebar-menu">
      <p class="menu-category">NAVIGATION</p>
      
      <a href="#" class="menu-item active">
        <i class="fas fa-home"></i>
        <span>Dashboard</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-columns"></i>
        <span>Layouts</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-th-large"></i>
        <span>Widget</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>

      <p class="menu-category mt-4">ADMIN PANEL</p>
      
      <a href="#" class="menu-item">
        <i class="fas fa-graduation-cap"></i>
        <span>Online Courses</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-user-friends"></i>
        <span>Membership</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-headset"></i>
        <span>Helpdesk</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-file-invoice"></i>
        <span>Invoice</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>

      <p class="menu-category mt-4">UI COMPONENTS</p>
      
      <a href="#" class="menu-item">
        <i class="fas fa-cube"></i>
        <span>Basic</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-rocket"></i>
        <span>Advance</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-magic"></i>
        <span>Animation</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
      <a href="#" class="menu-item">
        <i class="fas fa-pen-nib"></i>
        <span>Icons</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>

      <p class="menu-category mt-4">FORMS</p>
      
      <a href="#" class="menu-item">
        <i class="fas fa-file-alt"></i>
        <span>Forms Elements</span>
        <i class="fas fa-chevron-right arrow"></i>
      </a>
    </div>
  </aside>

  <!-- MAIN WRAPPER -->
  <div class="main-wrapper">
    
    <!-- TOP NAVBAR -->
    <header class="top-navbar">
      <div class="nav-left">
        <button class="icon-btn"><i class="fas fa-bars"></i></button>
        <button class="icon-btn"><i class="fas fa-search"></i></button>
        <div class="breadcrumbs">
          <span>Home</span>
          <span class="separator">/</span>
          <span>Dashboard</span>
          <span class="separator">/</span>
          <span class="current">Home</span>
        </div>
      </div>
      <div class="nav-right">
        <button class="icon-btn"><i class="fas fa-sun"></i></button>
        <button class="icon-btn"><i class="fas fa-cog"></i></button>
        <button class="icon-btn"><i class="fas fa-bell"></i></button>
        <button class="icon-btn"><i class="fas fa-user"></i></button>
        
        <div class="profile-dropdown-wrapper">
            <button class="settings-float" id="profileMenuBtn">
                <i class="fas fa-cog"></i>
            </button>
            <div class="dropdown-menu" id="profileDropdown">
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                  <i class="fas fa-user-circle"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                
                <!-- Correct Logout Form -->
                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger" style="width: 100%; border: none; background: transparent; text-align: left; cursor: pointer;">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
                
            </div>
        </div>
      </div>
    </header>

    <!-- DASHBOARD CONTENT (This is where the dashboard content will be injected) -->
    <main class="dashboard-content">
      @yield('content')
    </main>
  </div>

  <!-- External JavaScript file -->
  <script src="{{ asset('jss/admincustom.js') }}" defer></script>

</body>
</html>