<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                    class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            <li style="padding: 70px 0 0;">
                <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                        aria-hidden="true"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{route('admin.questions')}}" class="waves-effect"><i class="fa fa-user fa-fw"
                        aria-hidden="true"></i>Unanswered Questions</a>
            </li>
            <li>
                <a href="{{route('admin.answered.questions')}}" class="waves-effect"><i class="fa fa-table fa-fw"
                        aria-hidden="true"></i>Answered Questions</a>
            </li>
            <li>
                <a href="{{route('admin.all.questions')}}" class="waves-effect"><i class="fa fa-font fa-fw"
                        aria-hidden="true"></i>All Questions</a>
            </li>
            <li>
                <a href="{{route('admin.articles')}}" class="waves-effect"><i class="fa fa-globe fa-fw"
                        aria-hidden="true"></i>Article</a>
            </li>
            <li>
                <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw"
                        aria-hidden="true"></i>Blank Page</a>
            </li>
        </ul>
    </div>
</div>