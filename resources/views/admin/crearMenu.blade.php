@extends('layouts.app')

@section('content')

<div class="row mt-5">
    <div class="col-12">


        <div class="menu-container">
            <ul id="draggable-menu" class="menu">
                <li class="item">
                    <div class="item-content">
                        <span>Menu Item 1</span>
                        <span class="remove">x</span>
                    </div>
                    <ul class="sub-menu">
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 1</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <div class="item-content">
                        <span>Menu Item 2</span>
                        <span class="remove">x</span>
                    </div>
                    <ul class="sub-menu">
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 1</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <div class="item-content">
                        <span>Menu Item 3</span>
                        <span class="remove">x</span>
                    </div>
                    <ul class="sub-menu">
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 1</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 2</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 3</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 4</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <div class="item-content">
                        <span>Menu Item 4</span>
                        <span class="remove">x</span>
                    </div>
                    <ul class="sub-menu">
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 1</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="item">
                    <div class="item-content">
                        <span>Menu Item 5</span>
                        <span class="remove">x</span>
                    </div>
                    <ul class="sub-menu">
                        <li class="item">
                            <div class="item-content">
                                <span>Sub Item 1</span>
                                <span class="remove">x</span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


        <style>
            body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
}
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.menu-container {
    text-align: center;
}
.menu-container > ul {
    display: inline-block;
}
.menu:after {
    content: '';
    display: table;
    clear: both;
}
.menu .item {
    cursor: move;
    margin: 5px;
    float: left;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.menu .item-content {
    background: #eee;
    border: 1px solid #ddd;
    padding: 10px 50px 10px 10px;
}
.sub-menu  {
    position: absolute;
    top: 50px;
}
.sub-menu .item {
    width: 100%;
}
.sub-menu .item-content {
    background-color: #fcefa1;
}
.menu .remove {
    cursor: pointer;
    color: #fff;
    position: absolute;
    right: 10px;
    top: 10px;
    background-color: #ff7171;
    text-align: center;
    padding: 4px;
    font-size: 15px;
    line-height: 10px;
    width: 10px;
    height: 10px;
}
.sortable-placeholde {
    float: left;
    border: 1px dashed #000;
    width: 100%;
}
.ui-sortable-placeholder {
    border: 1px dashed;
    visibility: visible !important;
}
        </style>





{{-- <script>
    jQuery(document).ready(function () {
  jQuery("#draggable-menu").sortable({
    cancel: ".remove",
    items: ".item"
    //placeholder: 'sortable-placeholde',
  });

  jQuery(".item .remove").on("click", function () {
    $(this).closest(".item").remove();
  });
}); --}}

{{-- </script> --}}



    </div><!-- end col-->
</div> <!-- end row-->

@endsection