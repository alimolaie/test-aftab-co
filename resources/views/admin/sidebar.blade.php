<div class="iconsidebar-menu">
    <div class="sidebar">
      <ul class="iconMenu-bar custom-scrollbar">
        <li><a class="bar-icons" href="javascript:void(0)">
            <!--img(src='assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>عمومی    </span></a>
          <ul class="iconbar-mainmenu custom-scrollbar">
            <li class="iconbar-header">عمومی</li>
            <li><a href="{{url('admin')}}">داشبورد</a></li>

          </ul>
        </li>
   
        <li><a class="bar-icons" href="javascript:void(0)"><i class="fa fa-book"></i><span> کتاب </span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class = "iconbar-header"> کتاب </li>
                <li> <a href="{{ route('books.create') }}"> ساخت کتاب جدید </a> </li>
                <li> <a href="{{ route('books.index') }}"> همه کتاب ها </a> </li>

              </ul>
            </li>

      </ul>
    </div>
  </div>
