<style>
.sidebar {
    width: 10px;
    height: 100px;
    background-color: none;
  }
  
  .sidebar-header {
    padding: 10px;
    text-align: center;
  }
  
  .sidebar-menu {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  .sidebar-menu li {
    margin-bottom: 10px;
  }
  
  .sidebar-menu li a {
    display: block;
    padding: 15px;
    text-decoration: none;
  }
  .profile-form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .profile-form h2 {
      text-align: left;
      margin-bottom: 20px;
    }
    
    .profile-form .form-group label {
      font-weight: bold;
      color: #002B5B;
    }
</style>
    <div class="card-sidebar">
        <img src="#" style="margin-bottom: 60px;" alt="">
        <ul style="padding-left: 0; text-decoration: none">
            <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li><a href="{{ route('dashboard.create-profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard.create-jadwal') }}">Jadwal</a></li>
            <li><a href="{{ route('dashboard.add-dokter') }}">Dokter</a></li>
            <li><a href="{{ route('dashboard.create-notes') }}">Notes</a></li>
            <li style="margin-top: 250px;"><a href="#">Logout</a></li>
        </ul>
    </div>