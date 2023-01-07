<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{route('user.index')}}">
          <i class="bi bi-people"></i>
          <span>User</span>
        </a>
      </li>
      <!-- End User Nav -->
      
      <li class="nav-item">
        <a class="nav-link " href="{{route('member.index')}}">
          <i class="bi bi-person-check"></i>
          <span>Member</span>
        </a>
      </li>
      <!-- End Member Nav -->

      <li class="nav-item">
        <a class="nav-link " href="{{route('barang.index')}}">
          <i class="bi bi-box"></i>
          <span>Barang</span>
        </a>
      </li>
      <!-- End Barang Nav -->


    </ul>

</aside>
<!-- End Sidebar-->