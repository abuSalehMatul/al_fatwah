<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header" style="background: #97BC62FF;max-height:60px">
        <div class="top-left-part">
            <!-- Logo -->
            
            <a class="logo" href="{{url('/')}}">
               <b style="color: black;--font-family-monospace: yellowgreen;font-weight: 600;"> Alfatawa-alhanafia</b>
            </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li> </li>
            <li> </li>
            <admin-search></admin-search>
            <li>
                <a style="position: absolute;right:0;top:0;color:white" class="profile-pic" href="#"> <b class="hidden-xs">{{auth()->user()->name}}</b></a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>