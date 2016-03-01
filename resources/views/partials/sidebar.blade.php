<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/superadmin.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->

        <form action="search" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="search" v-model = "query" v-on:keyup="search" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
           <!--     <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
             -->
                  <button type='submit' name='query' id='typeahead' class="btn btn-flat"><a href="{{ url('search') }}"><i class="fa fa-search"></i></a></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->





        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            <li><a href="{{ url('#') }}"><i class='fa fa-link'></i> <span>new link</span></a></li>
            <li class="treeview">
                <a href="{{ url('vlist') }}"><i class='fa fa-link'></i> <span>Supplier's List</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('vlist') }}">Mansoura Supplier List</a></li>
                    <li><a href="{{ url('vlist/create') }}">Register new Supplier</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('mrs') }}"><i class='fa fa-link'></i> <span>Materials Request</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="{{ url('mrs') }}">Material Requests</a></li>
                    <li><a href="{{ url('budgetries/create') }}">Register Budgetry Offers</a></li>
                    <li><a href="{{ url('mrs/create') }}">Register a new Material Request</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="{{ url('tenders') }}"><i class='fa fa-link'></i> <span>Tenders</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="{{ url('tenders') }}">Tenders</a></li>
                    <li><a href="{{ url('tenders/create') }}">Register a new Tender </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{ url('pos') }}"><i class='fa fa-link'></i> <span>Purchase Orders</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="{{ url('pos') }}">Purchase Orders</a></li>
                    <li><a href="{{ url('pos/create') }}">Register a new Purchase Order </a></li>
                </ul>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
