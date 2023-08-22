 <style>
     .active{
        background: #ffffff ;
     }
     .active .nav-link-text{
        color: #964b00;
        font-weight: bold;
     }

      .active i{
        color: #964b00;
        font-weight: bold;
     }
 </style>

 @php

function checkRouteActive($route){
if(Route::current()->uri == $route) return 'active';
}
@endphp


 <div class="nicescroll-bar" style="color: #ffffff !important;">
    <div class="navbar-nav-wrap text-white">

        <ul class="navbar-nav flex-column mt-3 text-white">
            <li class="nav-item {{checkRouteActive('admin/beranda')}}">
                <a class="nav-link text-white" href="{{url('admin/beranda')}}" >
                    <span class="mr-4"><i class="fa fa-dashboard fa-lg"></i></span>
                    <span class="nav-link-text">Beranda</span>
                </a>
            </li>
            <li class="nav-item {{checkRouteActive('admin/data-gejala')}}">
                <a class="nav-link link-with-badge text-white" href="{{url('admin/data-gejala')}}">
                    <span class="mr-4"><i class="fa fa-user-md fa-lg"></i></span>
                    <span class="nav-link-text">Data Gejala</span>
                </a>
            </li>
            <li class="nav-item {{checkRouteActive('admin/rule')}}">
                <a class="nav-link text-white text-white" href="{{url('admin/rule')}}">
                    <span class="mr-4"><i class="fa fa-stethoscope fa-lg"></i></span>
                    <span class="nav-link-text">Data Rule / Aturan</span>
                </a>
            </li>
            <li class="nav-item {{checkRouteActive('admin/data-penyakit')}}">
                <a class="nav-link text-white text-white" href="{{url('admin/data-penyakit')}}">
                    <span class="mr-4"><i class="fa fa-stethoscope fa-lg"></i></span>
                    <span class="nav-link-text">Data Penyakit</span>
                </a>
            </li>
            
            <li class="nav-item {{checkRouteActive('admin/history')}}">
                <a class="nav-link text-white" href="{{url('admin/history')}}">
                   <span class="mr-4"><i class="fa fa-history fa-lg"></i></span>
                   <span class="nav-link-text">History Pengguna</span>
               </a>
           </li>

           <li class="nav-item {{checkRouteActive('admin/profil')}}">
            <a class="nav-link text-white" href="{{url('admin/profil')}}">
               <span class="mr-4"><i class="fa fa-cogs fa-lg"></i></span>
               <span class="nav-link-text">Profil</span>
           </a>
       </li>
   </ul>
</div>
</div>