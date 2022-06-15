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
<a href="javascript:;" data-toggle="collapse" data-target="#events-menu" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Events <i style="float: right;margin-right: 0;" class="fa fa-angle-down" aria-hidden="true"></i></a>
<div id="events-menu" class="collapse left-bar-main-collapse">
    <a class="left-bar-submenu" href="{{ url('event') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Events</a>
    <a class="left-bar-submenu" href="{{ url('add_event') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Add Event</a>
</div>
<a href="javascript:;" data-toggle="collapse" data-target="#contacts-menu" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Contacts <i style="float: right;margin-right: 0;" class="fa fa-angle-down" aria-hidden="true"></i></a>
<div id="contacts-menu" class="collapse left-bar-main-collapse">
    <a class="left-bar-submenu" href="{{ url('contact') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Contacts</a>
    <a class="left-bar-submenu" href="{{ url('add_contact') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Add Contact</a>
</div>
<a href="javascript:;" data-toggle="collapse" data-target="#teams-menu" class="list-group-item-action-main"><i class="fa fa-database" aria-hidden="true"></i> Teams <i style="float: right;margin-right: 0;" class="fa fa-angle-down" aria-hidden="true"></i></a>
<div id="teams-menu" class="collapse left-bar-main-collapse">
    <a class="left-bar-submenu" href="{{ url('team') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Teams</a>
    <a class="left-bar-submenu" href="{{ url('add_team') }}"><i class="fa fa-medkit" aria-hidden="true"></i> Add Teams</a>
</div>
