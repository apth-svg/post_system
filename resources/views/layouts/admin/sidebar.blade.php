<nav class="active" id="sidebar">
  <ul class="list-unstyled lead">
      <li>
          <a href=""> <i class="fas fa-home"></i>Home</a>
      </li>
      <li>
          <a href="{{ route('orders.index') }}"><i class="fas fa-box"></i>Order</a>
      </li>
      <li>
          <a href="{{ route('transactions.index') }}"><i class="fas fa-money-bill-wave"></i>Transaction</a>
      </li>
      <li>
          <a href="{{ route('products.index') }}"><i class="fas fa-truck-moving"></i>Products</a>
      </li>
      <li>
          <a href="">Home</a>
      </li>

  </ul>
</nav>

<style>
    #sidebar ul.lead{
        border-bottom:1px solid #47748b;
        width:fit-content;
    }
    #sidebar ul li a{
        padding:10px;
        font-size:1.1em;
        display:block;
        width:30vh;
        color:#008B8B;
    }
     #sidebar ul li a i{
        margin-right:10px;
     }
    #sidebar ul li.active>a ,a[aria-expanded="true"]{
           color:#fff;
           background:#008B8B;
    }
    #sidebar ul li a:hover{
      
        color:#fff;
        background:#008B8B;
        text-decoration:none !important;
    }

</style>