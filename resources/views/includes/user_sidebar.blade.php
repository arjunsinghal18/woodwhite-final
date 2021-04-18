<div class="user">
    <div class="user_image_div">
        <img src="{{$user[0]->avatar}}" alt="" class="user_image">
    </div>
    <div class="user_name_div">
        <p>Hello,</p>
        <p class="user_name" >{{$user[0]->name}}</p>
    </div>
</div>

<div class="user_menu">
    <ul>
        <a href="{{url('')}}" class="user_menu_anc"><li class="user_menu_list">Home</li></a>
        <a href="{{url('')}}" class="user_menu_anc"><li class="user_menu_list">Product</li></a>
        <a href="{{url('')}}" class="user_menu_anc"><li class="user_menu_list">About Us</li></a>
        <a href="{{url('account')}}" class="user_menu_anc"><li class="user_menu_list">My Account</li></a>
        <a class="user_menu_anc"><li class="user_menu_list user_side_cart">My Cart <span class="cart_no">  {{ Cart::count() }}  </span></li></a>
        <a href="{{url('order')}}" class="user_menu_anc"><li class="user_menu_list user_menu_list_active">My Orders</li></a>
        <a href="{{url('query')}}" class="user_menu_anc"><li class="user_menu_list">Queries</li></a>
        <a href="{{url('')}}" class="user_menu_anc"><li class="user_menu_list">Logout</li></a>
    </ul>
</div>