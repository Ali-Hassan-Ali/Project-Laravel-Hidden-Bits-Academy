<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-th"></i><span>@lang('dashboard.dashboard')</span></a></li>

            @if (auth()->user()->hasPermission('users_read'))
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>@lang('dashboard.users')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('categories_read'))
                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('dashboard.categories')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('courses_read'))
                <li><a href="{{ route('dashboard.courses.index') }}"><i class="fa fa-th"></i><span>الكورس</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('certificates_read'))
                <li><a href="{{ route('dashboard.certificates.index') }}"><i class="fa fa-th"></i><span>@lang('home.certificates')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('courses_read'))
                <li><a href="{{ route('dashboard.purchase.index') }}"><i class="fa fa-th"></i><span>طلبات الكورسات</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('coaches_read'))
                <li><a href="{{ route('dashboard.coaches.index') }}"><i class="fa fa-th"></i><span>المدربين</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('posts_read'))
                <li><a href="{{ route('dashboard.posts.index') }}"><i class="fa fa-th"></i><span> @lang('dashboard.posts')</span></a></li>
            @endif
            
            @if (auth()->user()->hasPermission('advisoryServices_read'))
                <li><a href="{{ route('dashboard.advisoryServices.index') }}"><i class="fa fa-th"></i><span> @lang('dashboard.advisoryServices')</span></a></li>
            @endif

            <li class="treeview" style="height: auto;">
              <a href="#">
                <i class="fa fa-gear"></i> <span>الاعدادات</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="{{ route('dashboard.about_index') }}"><i class="fa fa-circle-o"></i> عن الاكادميه</a></li>
                <li><a href="{{ route('dashboard.links_index') }}"><i class="fa fa-circle-o"></i> روابط التواصل</a></li>
                <li><a href="{{ route('dashboard.title_index') }}"><i class="fa fa-circle-o"></i> العناوين</a></li>
                <li><a href="{{ route('dashboard.founder',1) }}"><i class="fa fa-circle-o"></i> المؤسس</a></li>
              </ul>

            </li>
        </ul>

    </section>

</aside>

