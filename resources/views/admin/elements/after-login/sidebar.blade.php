<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Dashboard</div>
          <a class="nav-link @if(Route::currentRouteName()=='admin.dashboard') {{'active'}} @endif" href="{{ route('admin.dashboard') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Dashboard
          </a>

          @if(Auth:: guard('admin')->user()->can('manage-settings'))
          <div class="sb-sidenav-menu-heading">Manage Settings</div>
          <a class="nav-link @if(Route::currentRouteName()=='admin.settings') {{'active'}} @endif" href="{{ route('admin.settings') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Settings
          </a>
          @endif

          {{--@if(Auth:: guard('admin')->user()->can('manage-category'))
          <div class="sb-sidenav-menu-heading">Manage Category</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-category' || Route::currentRouteName()=='admin.category' || Route::currentRouteName()=='admin.edit-category') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Category
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-category' || Route::currentRouteName()=='admin.category' || Route::currentRouteName()=='admin.edit-category') {{'show'}} @endif" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.add-category') {{'active'}} @endif" href="{{ route('admin.add-category') }}">Add Category</a>
              <a class="nav-link @if(Route::currentRouteName()=='admin.category' || Route::currentRouteName()=='admin.edit-category') {{'active'}} @endif" href="{{ url('admin/category') }}">View Category</a>
            </nav>
          </div>
          @endif--}}
          {{--@if(Auth:: guard('admin')->user()->can('manage-cms'))
          <div class="sb-sidenav-menu-heading">Manage CMS</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-cms' || Route::currentRouteName()=='admin.cmslist' || Route::currentRouteName()=='admin.edit-cms') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsCMS" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            CMS
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-cms' || Route::currentRouteName()=='admin.cmslist' || Route::currentRouteName()=='admin.edit-cms') {{'show'}} @endif" id="collapseLayoutsCMS" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.add-cms') {{'active'}} @endif" href="{{ route('admin.add-cms') }}">Add CMS</a>
              <a class="nav-link @if(Route::currentRouteName()=='admin.cmslist' || Route::currentRouteName()=='admin.edit-cms') {{'active'}} @endif" href="{{ route('admin.cmslist') }}">View CMS</a>
            </nav>
          </div>
          @endif--}}

          <div class="sb-sidenav-menu-heading">Manage TYPE</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-type' || Route::currentRouteName()=='admin.typelist' || Route::currentRouteName()=='admin.edit-type') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsTYPE" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Type
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-type' || Route::currentRouteName()=='admin.typelist' || Route::currentRouteName()=='admin.edit-type') {{'show'}} @endif" id="collapseLayoutsTYPE" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.add-type') {{'active'}} @endif" href="{{ route('admin.add-type') }}">Add TYPE</a>
              <a class="nav-link @if(Route::currentRouteName()=='admin.typelist' || Route::currentRouteName()=='admin.edit-type') {{'active'}} @endif" href="{{ route('admin.typelist') }}">View TYPE</a>
            </nav>
          </div>
          
          <div class="sb-sidenav-menu-heading">Manage LOCATION</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-location' || Route::currentRouteName()=='admin.locationlist' || Route::currentRouteName()=='admin.edit-location') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsLOCATION" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Location
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-location' || Route::currentRouteName()=='admin.locationlist' || Route::currentRouteName()=='admin.edit-location') {{'show'}} @endif" id="collapseLayoutsLOCATION" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.add-location') {{'active'}} @endif" href="{{ route('admin.add-location') }}">Add LOCATION</a>
              <a class="nav-link @if(Route::currentRouteName()=='admin.locationlist' || Route::currentRouteName()=='admin.edit-location') {{'active'}} @endif" href="{{ route('admin.locationlist') }}">View LOCATION</a>
            </nav>
          </div>

          <div class="sb-sidenav-menu-heading">Manage AUDIO</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-audio' || Route::currentRouteName()=='admin.audiolist' || Route::currentRouteName()=='admin.edit-audio') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsAUDIO" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Audio
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-audio' || Route::currentRouteName()=='admin.audiolist' || Route::currentRouteName()=='admin.edit-audio') {{'show'}} @endif" id="collapseLayoutsAUDIO" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.add-audio') {{'active'}} @endif" href="{{ route('admin.add-audio') }}">Add AUDIO</a>
              <a class="nav-link @if(Route::currentRouteName()=='admin.audiolist' || Route::currentRouteName()=='admin.edit-audio') {{'active'}} @endif" href="{{ route('admin.audiolist') }}">View AUDIO</a>
            </nav>
          </div>
          

         {{-- @if(Auth:: guard('admin')->user()->can('manage-photo-gallery'))
          <div class="sb-sidenav-menu-heading">Manage Photo Gallery</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-photogallery' || Route::currentRouteName()=='admin.photogallerylist' || Route::currentRouteName()=='admin.edit-photogallery') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPhotoGallery" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Photo Gallery
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-photogallery' || Route::currentRouteName()=='admin.photogallerylist' || Route::currentRouteName()=='admin.edit-photogallery') {{'show'}} @endif" id="collapseLayoutsPhotoGallery" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.add-photogallery') {{'active'}} @endif" href="{{ route('admin.add-photogallery') }}">Add Photo Gallery</a>
              <a class="nav-link @if(Route::currentRouteName()=='admin.photogallerylist' || Route::currentRouteName()=='admin.edit-photogallery') {{'active'}} @endif" href="{{ route('admin.photogallerylist') }}">View Photo Gallery</a>
            </nav>
          </div>
          @endif--}}

          <!---Manage Permission---->
          {{--@if(Auth:: guard('admin')->user()->can('manage-permission'))
          <div class="sb-sidenav-menu-heading">Manage Permission</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-permission' || Route::currentRouteName()=='admin.permissionlist' || Route::currentRouteName()=='admin.edit-permission') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPermission" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Permission
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>

          <div class="collapse @if(Route::currentRouteName()=='admin.add-permission' || Route::currentRouteName()=='admin.permissionlist' || Route::currentRouteName()=='admin.edit-permission') {{'show'}} @endif" id="collapseLayoutsPermission" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.permissionlist') {{'active'}} @endif" href="{{ route('admin.permissionlist') }}">Permission List</a>
            </nav>
          </div>
          @endif--}}


          <!---Manage Role---->
          {{--@if(Auth:: guard('admin')->user()->can('manage-role'))
          <div class="sb-sidenav-menu-heading">Manage Role</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-role' || Route::currentRouteName()=='admin.rolelist' || Route::currentRouteName()=='admin.edit-role') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsRole" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Role
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-role' || Route::currentRouteName()=='admin.rolelist' || Route::currentRouteName()=='admin.edit-role') {{'show'}} @endif" id="collapseLayoutsRole" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.rolelist') {{'active'}} @endif" href="{{ route('admin.rolelist') }}">Role List</a>
            </nav>
          </div>
          @endif--}}

          <!---Manage Subadmin---->

          {{--@if(Auth:: guard('admin')->user()->can('manage-subadmin'))
          <div class="sb-sidenav-menu-heading">Manage Subadmin</div>
          <a class="nav-link collapsed @if(Route::currentRouteName()=='admin.add-subadmin' || Route::currentRouteName()=='admin.subadmin' || Route::currentRouteName()=='admin.edit-subadmin') {{'active'}} @endif" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutssubadmin" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Subadmin
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse @if(Route::currentRouteName()=='admin.add-subadmin' || Route::currentRouteName()=='admin.subadmin' || Route::currentRouteName()=='admin.edit-subadmin') {{'show'}} @endif" id="collapseLayoutssubadmin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link @if(Route::currentRouteName()=='admin.subadmin') {{'active'}} @endif" href="{{ route('admin.subadmin') }}">Subadmin List</a>
            </nav>
          </div>
          @endif--}}
          

        </div>
      </div>
      <!-- <div class="sb-sidenav-footer">
              <div class="small">Logged in as:</div>
              Start Bootstrap
          </div> -->
    </nav>
  </div>
  <div id="layoutSidenav_content">
    <main>
      @yield('unique-content')
    </main>
    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; Your Website 2022</div>
          <div>
            <a href="#">Privacy Policy</a>
            &middot;
            <a href="#">Terms &amp; Conditions</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>