<?php
/**
 * Created by PhpStorm.
 * User: Gergana
 * Date: 03-Mar-17
 * Time: 4:43 PM
 */
?>

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <span class="site_title">Pet Shop</span>
        </div>

        <div class="clearfix"></div>
        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('home')}}"></i> Home <span class="fa fa-chevron-down"></span></a>
                    @if(Auth::check())
                        @if(Auth::user()->isAdmin == 1)
                    <li><a href="{{route('user.list')}}">List all User</a></li>
                    <li><a href="{{route('users.add')}}">Add an User</a></li>
                        @endif
                    <li><a href="{{route('pets.list')}}">List all Pets</a></li>
                    <li><a href="{{route('mypets.list')}}">List My Pets</a></li>
                        @if(Auth::user()->isAdmin == 1)
                    <li><a href="{{route('pets.add')}}">Add Pet</a></li>
                        @endif
                        <li><a href="{{route('contacts')}}">Contact Us</a></li>
                        <li><a href="{{route('logout')}}">Log Out</a></li>
                    @endif
                    @if(!Auth::check())
                        <li><a href="{{route('login')}}">Log In</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                </ul>
            </div>

        </div>

    </div>
</div>
