<style>
  .sidebar {
    display: flex;
    width: 281px;
    height: 1194px;
    padding: 40px 32px 226px 32px;
    flex-direction: column;
    align-items: flex-start;
    gap: 84px;
    flex-shrink: 0;
  }
  
  .sidebar-header {
    padding: 10px;
    text-align: center;
  }
  
  .sidebar-menu {
    list-style-type: none;
    padding: 10px;
    margin: 0;
  }
  
  .sidebar-menu li {
    margin-bottom: 32px;
  }
  
  .sidebar-menu li a {
    width: 217px;
    height: 56px;
    display: block;
    padding: 15px;
    text-decoration: none;
    color: white;
    background-color: #159895;
    border-radius: 12px;
  }
</style>

<div class="container-fluid">
  <div class="row content-wrap">
    <div class="col-sm sidebar">
      <div class="sidebar-header">
      <a href="#"><img src="{{ asset('images/logo.svg') }}"></a>
      </div>
      <ul class="col-sm sidebar-menu">
        <li><a href="{{ route('dashboard.index') }}"><img src="{{ asset('images/House.svg') }}" alt="dashboard"><span>Dashboard</span></a></li>
        <li><a href="{{ route('dashboard.create-profile') }}"><img src="{{ asset('images/user.svg') }}" alt="user"><span>Profile</span></a></li>
        <li><a href="{{ route('dashboard.create-jadwal') }}"><img src="{{ asset('images/jadwal.svg') }}" alt="jadwal"><span>Jadwal</span></a></li>
        <li><a href="{{ route('dashboard.add-dokter') }}"><img src="{{ asset('images/kelas.svg') }}" alt="dokter"><span>Dokter</span></a></li>
        <li><a href="{{ route('dashboard.create-notes') }}"><img src="{{ asset('images/House.svg') }}" alt="notes"><span>Notes</span></a></li>
      </ul>
    </div>
  </div>
</div>