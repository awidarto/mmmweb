<script type="text/javascript">
    $(document).ready(function(){

    });

</script>
<style type="text/css">
    b.icon-caret-down{
        margin-left: 8px;
    }

    .nav-tabs.nav-stacked>li>ul>li>a {
        padding: 10px 25px;
    }

    .nav-tabs.nav-stacked>li>ul>li>ul>li>a {
        padding: 10px 28px;
    }

    .nav-tabs.nav-stacked>li>ul>li>ul>li>a{
        color: #fff;
        border: 0;
        background: transparent;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        text-decoration: none;
        display: block;
    }

    .box{
        overflow-x: auto !important;
        background-color: white;
    }

    .box-content{
        display:block !important;
    }

    #sidebar-left .label {
        -webkit-border-radius: 2px 0 0 2px;
        -moz-border-radius: 2px 0 0 2px;
        border-radius: 2px 0 0 2px;
        position: absolute;
        right: 0;
        background: transparent;
        color: white;
    }
</style>
{{ print_r(Auth::user()->organization['apptype']) }}
<ul class="nav nav-tabs nav-stacked main-menu">
    @if(Auth::check())
        <li><a href="{{ URL::to('dashboard') }}" class="submenu {{ sa('dashboard') }}" ><i class="icon-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ URL::to('pos') }}" class="submenu {{ sa('pos') }}" ><i class="icon-desktop"></i> POS</a></li>

        <li>
            <a class="dropmenu" href="#">
                <i class="icon-folder-close-alt"></i> Products <span class="label"><b class="icon-caret-down"></b></span></b>
            </a>
            <ul>
                <li><a class="submenu {{ sa('products') }}" href="{{ URL::to('products') }}"  ><i class="icon-th-list"></i> Catalog</a></li>
                <li><a class="submenu {{ sa('productcategory')}}" href="{{ URL::to('productcategory') }}" ><i class="icon-sitemap"></i> Category</a></li>
            </ul>
        </li>
        <li>
            <a class="dropmenu" href="#">
                <i class="icon-check"></i> Stock<span class="label"><b class="icon-caret-down"></b></span></b>
            </a>
            <ul>
                <li><a href="{{ URL::to('inventory') }}" class="submenu {{ sa('inventory') }}" ><i class="icon-tags"></i> Stock List</a></li>
                <li><a href="{{ URL::to('stockcheck') }}" class="submenu {{ sa('stockcheck') }}" ><i class="icon-barcode"></i> Stock Check</a></li>
                <li><a href="{{ URL::to('stockchecklist') }}" class="submenu {{ sa('stockchecklist') }}" ><i class="icon-table"></i> Stock Check Log</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" href="#">
                <i class="icon-money"></i> Sales<span class="label"><b class="icon-caret-down"></b></span>
            </a>
            <ul>
                <li><a href="{{ URL::to('outlet') }}" class="submenu {{ sa('outlet') }}" ><i class="icon-external-link" ></i> Outlets</a></li>
                <li><a href="{{ URL::to('transaction') }}" class="submenu {{ sa('transaction') }}" ><i class="icon-credit-card"></i> Transactions List</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" href="#">
                <i class="icon-money"></i> Building<span class="label"><b class="icon-caret-down"></b></span>
            </a>
            <ul>
                <li><a href="{{ URL::to('unit') }}" class="submenu {{ sa('unit') }}" ><i class="icon-external-link" ></i> Units</a></li>
                <li><a href="{{ URL::to('tenant') }}" class="submenu {{ sa('tenant') }}" ><i class="icon-external-link" ></i> Tenants</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" href="#">
                <i class="icon-check"></i> Supplies<span class="label"><b class="icon-caret-down"></b></span></b>
            </a>
            <ul>
                <li><a href="{{ URL::to('inventory') }}" class="submenu {{ sa('inventory') }}" ><i class="icon-tags"></i> Stock List</a></li>
                <li><a href="{{ URL::to('stockcheck') }}" class="submenu {{ sa('stockcheck') }}" ><i class="icon-barcode"></i> Stock Check</a></li>
                <li><a href="{{ URL::to('stockchecklist') }}" class="submenu {{ sa('stockchecklist') }}" ><i class="icon-table"></i> Stock Check Log</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Office
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('document') }}" class="submenu {{ sa('document') }}" ><i class="icon-copy"></i> Documents</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Finance
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('expenses') }}" class="submenu {{ sa('expenses') }}" ><i class="icon-money"></i> Expenses</a></li>
                <li><a href="{{ URL::to('billings') }}" class="submenu {{ sa('billings') }}" ><i class="icon-money"></i> Bills to Pay</a></li>
                <li><a href="{{ URL::to('invoices') }}" class="submenu {{ sa('invoices') }}" ><i class="icon-money"></i> Invoices</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bullhorn"></i> Marketing
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('event') }}" class="submenu {{ sa('event') }}" ><i class="icon-lightbulb"></i> Events</a></li>
                <li><a href="{{ URL::to('buyer') }}" class="submenu {{ sa('buyer') }}" ><i class="icon-group"></i> Buyers</a></li>
                <li><a href="{{ URL::to('contactgroup') }}" class="submenu {{ sa('contactgroup') }}" ><i class="icon-folder-close"></i> Contact Groups</a></li>
                <li><a href="{{ URL::to('enquiry') }}" class="submenu {{ sa('enquiry') }}" ><i class="icon-question-sign"></i> Enquiries</a></li>
                <li><a href="{{ URL::to('campaign') }}" class="submenu {{ sa('campaign') }}" ><i class="icon-bullhorn"></i> Campaign</a></li>

            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-file"></i> Templates
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('newsletter') }}" class="submenu {{ sa('newsletter') }}" ><i class="icon-file-alt"></i> Newsletter</a></li>
                <li><a href="{{ URL::to('brochure') }}" class="submenu {{ sa('brochure') }}" ><i class="icon-file-alt"></i> Brochure</a></li>
                <li><a href="{{ URL::to('templates') }}" class="submenu {{ sa('templates') }}" ><i class="icon-file-alt"></i> Other Templates</a></li>
            </ul>
        </li>

        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-bar-chart"></i> Reports
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('report/siteaccess') }}" class="submenu {{ sa('report/siteaccess') }}" ><i class="icon-globe"></i> Site Access</a></li>
                <li><a href="{{ URL::to('report/activity') }}" class="submenu {{ sa('report/activity') }}" ><i class="icon-refresh"></i> Activity</a></li>
            </ul>
        </li>
        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-sitemap"></i> Site Content
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('content/pages') }}" class="submenu {{ sa('content/pages') }}" ><i class="icon-copy"></i> Pages</a></li>
                <li><a href="{{ URL::to('content/posts') }}" class="submenu {{ sa('content/posts') }}" ><i class="icon-copy"></i> Posts</a></li>
                <li><a href="{{ URL::to('content/section') }}" class="submenu {{ sa('content/section') }}" ><i class="icon-sitemap"></i> Section</a></li>
                <li><a href="{{ URL::to('content/category') }}" class="submenu {{ sa('content/category') }}" ><i class="icon-sitemap"></i> Category</a></li>
                <li><a href="{{ URL::to('content/menu') }}" class="submenu {{ sa('content/menu') }}" ><i class="icon-sitemap"></i> Menu</a></li>
                <li><a href="{{ URL::to('showcase') }}" class="submenu {{ sa('showcase') }}" ><i class="icon-eye-open"></i> Showcases</a></li>
                <li><a href="{{ URL::to('homeslide') }}" class="submenu {{ sa('homeslide') }}" ><i class="icon-home"></i> Home Slide Show</a></li>
                <li><a href="{{ URL::to('faq') }}" class="submenu {{ sa('faq') }}" ><i class="icon-question-sign"></i> FAQ Entries</a></li>
                <li><a href="{{ URL::to('faqcat') }}" class="submenu {{ sa('faqcat') }}" ><i class="icon-sitemap"></i> FAQ Category</a></li>
                <li><a href="{{ URL::to('glossary') }}" class="submenu {{ sa('glossary') }}" ><i class="icon-list"></i> Glossary Entries</a></li>
            </ul>
        </li>
        <li>
            <a class="dropmenu" data-toggle="dropdown" href="#">
                <i class="icon-cogs"></i> System
                <span class="label"><b class="icon-caret-down"></b></span></b>
              </a>
            <ul>
                <li><a href="{{ URL::to('user') }}" class="submenu {{ sa('user') }}" ><i class="icon-group"></i> Admins</a></li>
                <li><a href="{{ URL::to('departments') }}" class="submenu {{ sa('departments') }}" ><i class="icon-group"></i> Departments</a></li>
                <li><a href="{{ URL::to('option') }}" class="submenu {{ sa('option') }}" ><i class="icon-wrench"></i> Options</a></li>
            </ul>
        </li>

    @endif
</ul>
