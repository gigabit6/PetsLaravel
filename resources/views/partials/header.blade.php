<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 6:05 PM
 */
?>
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            @if(Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="{{route('user.details',Auth::user()->id)}}" class="user-profile dropdown-toggle"
                       data-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                </li>

            </ul>
            @endif
        </nav>
    </div>
</div>
