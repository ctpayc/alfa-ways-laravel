<ul class="nav" id="leftside-menu">
    <li>
        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">
            {{ $Main or '' }}
        </span> <span class="label label-primary pull-right">NEW</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">
            {{ $News or '' }}
        </span> <span class="label label-primary pull-right">NEW</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">
            {{ $About or '' }}
        </span> <span class="label label-primary pull-right">NEW</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">
            {{ $Contacts or '' }}
        </span> <span class="label label-primary pull-right">NEW</span></a>
    </li>
    <li>
        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">
            {{ $Search or 'Поиск' }}
        </span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li><a href="#">Магазины</a></li>
            <li><a href="#">Товары</a></li>
            <li><a href="#">Другое</a></li>
        </ul>
    </li>
</ul>