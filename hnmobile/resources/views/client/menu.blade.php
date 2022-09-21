<?php 
$categoies=DB::table('categories')->select('id','name')
->limit(6)->get();
?>
<div class="section-item-content nav-sections-item-content"
id="store.menu"
data-role="content">
<div class="container">
<div class="row">
<div class="efom-megamenu-wrapper col-md-7">
<nav class="efom-megamenu navigation p-0 m-0" role="navigation" data-action="navigation">
<div id="defaultmenu" class="navbar-collapse collapse">
@foreach ($categoies as $loai)
<li class="level0 dropdown category-item ui-menu-item" role="presentation">
    <a class="level-top ui-corner-all" href="" aria-haspopup="true" id="ui-id-3" tabindex="-1" role="menuitem">
        <span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>
        <span>{{$loai->name}}</span></a><ul class="groupmenu-drop ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-expanded="false" style="display: none; top: 64.1094px; left: 0px;" aria-hidden="true">
        <li class="sub-child ui-menu-item" role="presentation"><ol>
    </ol>
    </li></ul>
</li>
@endforeach
</nav>
</div>
<div class="menu-functions-wrapper col-md-5">
<a href="" class="menu-function menu-item-promotion float-right">
<div class="wrapper">

<span class="title font-caption">Khuyến mãi<br/>Tháng 09</span>
</div>
</a>
<a href="" class="menu-function hand-book float-right">
<div class="wrapper">
<i class="fa fa-hand-book"></i>
<span class="title font-caption">Công nghệ<br/>24h</span>
</div>
</a>
<a href="" class="menu-function trade-in float-right">
<div class="wrapper">
<i class="fa fa-swap"></i>
<span class="title font-caption">Thu cũ<br/>đổi mới</span>
</div>
</a>
</div>
</div>
</div></div>
</div>