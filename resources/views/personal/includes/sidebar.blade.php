<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">

        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            {{--Главная--}}
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>

                    <p>
                        Главная
                    </p>
                </a>
            </li>
            {{--Пользователи--}}
            <li class="nav-item">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>

                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            {{--Посты--}}
            <li class="nav-item">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="nav-icon far fa-comment"></i>

                    <p>
                        Комментарии
                    </p>
                </a>
            </li>


        </ul>


    </div>
    <!-- /.sidebar -->
</aside>
