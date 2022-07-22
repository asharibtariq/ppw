{{--
$usersrole = $this->session->userdata['logged_in']['role_id'];
$uri = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$user_menu = user_menu();
//pre($user_menu,1);
--}}
<!--
<a href="#" class="list-group-item-action-main"><i class="fa fa-search" aria-hidden="true"></i> Quick Search(ctrl+q)</a>
<a href="#" class="list-group-item-action-main"><i class="fa fa-share share-icon" aria-hidden="true"></i> Shortcuts (ctrl+;)</a>
<div class="list-group-item-action-main bg-navmenu"><img style="opacity: 0;" src="images/2.png" alt="logo"> Main Navigation</div>
-->
<a href="{{ url('home') }}" class="list-group-item-action-main"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="{{ url('news') }}" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> News <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="{{ url('event') }}" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Events <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="{{ url('contact') }}" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Contacts <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="{{ url('team') }}" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Teams <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="{{ url('publication') }}" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Publications <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="{{ url('training') }}" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Trainings <!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></a>
<a href="javascript:;" data-toggle="collapse" data-target="#gallery-menu" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Gallery <i style="float: right;margin-right: 0;" class="fa fa-angle-down" aria-hidden="true"></i></a>
<div id="gallery-menu" class="collapse left-bar-main-collapse">
    <a class="left-bar-submenu" href="{{ url('gallery') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Gallery List</a>
    <a class="left-bar-submenu" href="{{ url('add_gallery') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Add Image</a>
</div>
