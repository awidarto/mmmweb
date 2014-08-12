<?php
    function sa($item){
        if(URL::to($item) == URL::full() ){
            return  'active';
        }else{
            return '';
        }
    }
?>
<style type="text/css">
    b.icon-caret-down{
        margin-left: 8px;
    }
</style>
<ul class="nav nav-tabs nav-stacked main-menu">
    @if(Auth::check())
        <li><a href="{{ URL::to('dashboard') }}" class="submenu {{ sa('dashboard') }}" ><i class="icon-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ URL::to('pos') }}" class="submenu {{ sa('pos') }}" ><i class="icon-shopping-cart"></i> POS</a></li>

        <li>
            <a class="dropmenu" href="#">
                <i class="icon-folder-close-alt"></i> Products <b class="icon-caret-down"></b>
            </a>
            <ul>
                <li><a class="submenu {{ sa('products') }}" href="{{ URL::to('products') }}"  >Catalog</a></li>
                <li><a class="submenu {{ sa('productcategory')}}" href="{{ URL::to('productcategory') }}" >Category</a></li>
            </ul>
        </li>
        <li>
            <a class="dropmenu" href="#">
                <i class="icon-check"></i> Stock<b class="icon-caret-down"></b>
            </a>
            <ul>
                <li><a href="{{ URL::to('inventory') }}" class="submenu {{ sa('inventory') }}" ><i class="icon-tags"></i> Stock List</a></li>
                <li><a href="{{ URL::to('dashboard') }}" class="submenu {{ sa('dashboard') }}" ><i class="icon-barcode"></i> Stock Check</a></li>
                <li><a href="{{ URL::to('stockcheck') }}" class="submenu {{ sa('stockcheck') }}" ><i class="icon-table"></i> Stock Check Log</a></li>
            </ul>
        </li>

        <li><a href="{{ URL::to('outlet') }}" class="submenu {{ sa('outlet') }}" >
            <i class="icon-external-link" ></i> Outlets</a></li>

        <li><a href="{{ URL::to('transaction') }}" class="submenu {{ sa('transaction') }}" ><i class="icon-credit-card"></i> Transactions</a></li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Marketing
                <b class="icon-caret-down"></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('event') }}" class="submenu {{ sa('event') }}" >Events</a></li>
                <li><a href="{{ URL::to('buyer') }}" class="submenu {{ sa('buyer') }}" >Contact List</a></li>
                <li><a href="{{ URL::to('contactgroup') }}" class="submenu {{ sa('contactgroup') }}" >Contact Groups</a></li>
                <li><a href="{{ URL::to('enquiry') }}" class="submenu {{ sa('enquiry') }}" >Enquiries</a></li>
                <li><a href="{{ URL::to('campaign') }}" class="submenu {{ sa('campaign') }}" >Campaign</a></li>
                <li><a href="{{ URL::to('newsletter') }}" class="submenu {{ sa('newsletter') }}" >Newsletter</a></li>
                <li><a href="{{ URL::to('brochure') }}" class="submenu {{ sa('brochure') }}" >Brochure</a></li>
            </ul>
        </li>



        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-file"></i> Templates
                <b class="icon-caret-down"></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('newsletter') }}" class="submenu {{ sa('newsletter') }}" >Newsletter</a></li>
                <li><a href="{{ URL::to('brochure') }}" class="submenu {{ sa('brochure') }}" >Brochure</a></li>
                <li><a href="{{ URL::to('templates') }}" class="submenu {{ sa('templates') }}" >Other Templates</a></li>
            </ul>
        </li>


        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bar-chart"></i> Reports
                <b class="icon-caret-down"></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('report/siteaccess') }}" class="submenu {{ sa('report/siteaccess') }}" >Site Access</a></li>
                <li><a href="{{ URL::to('report/activity') }}" class="submenu {{ sa('report/activity') }}" >Activity</a></li>
            </ul>
        </li>
        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-globe"></i> Site Content
                <b class="icon-caret-down"></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('content/pages') }}" class="submenu {{ sa('content/pages') }}" >Pages</a></li>
                <li><a href="{{ URL::to('content/posts') }}" class="submenu {{ sa('content/posts') }}" >Posts</a></li>
                <li><a href="{{ URL::to('content/section') }}" class="submenu {{ sa('content/section') }}" >Section</a></li>
                <li><a href="{{ URL::to('content/category') }}" class="submenu {{ sa('content/category') }}" >Category</a></li>
                <li><a href="{{ URL::to('content/menu') }}" class="submenu {{ sa('content/menu') }}" >Menu</a></li>
                <li><a href="{{ URL::to('showcase') }}" class="submenu {{ sa('showcase') }}" >Showcases</a></li>
                <li><a href="{{ URL::to('homeslide') }}" class="submenu {{ sa('homeslide') }}" >Home Slide Show</a></li>
                <li><a href="{{ URL::to('faq') }}" class="submenu {{ sa('faq') }}" >FAQ Entries</a></li>
                <li><a href="{{ URL::to('faqcat') }}" class="submenu {{ sa('faqcat') }}" >FAQ Category</a></li>
                <li><a href="{{ URL::to('glossary') }}" class="submenu {{ sa('glossary') }}" >Glossary Entries</a></li>
            </ul>
        </li>
        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-cogs"></i> System
                <b class="icon-caret-down"></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('user') }}" class="submenu {{ sa('user') }}" ><i class="icon-user"></i> Admins</a></li>
                <li><a href="{{ URL::to('option') }}" class="submenu {{ sa('option') }}" ><i class="icon-wrench"></i> Options</a></li>
            </ul>
        </li>

    @endif
</ul>
