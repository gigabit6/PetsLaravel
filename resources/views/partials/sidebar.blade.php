<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 4:43 PM
 */
?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('user.list')}}">List all User</a></li>
                    <li><a href="{{route('users.add')}}">Add an User</a></li>
                    <li><a href="{{route('pets.list')}}">List all Pets</a></li>
                    <li><a href="{{route('pets.add')}}">Add Pet</a></li>
                </ul>
            </li>

        </ul>
    </div>


</div>
