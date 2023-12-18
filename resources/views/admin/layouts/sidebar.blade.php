
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i>Store Keeper</a></div>
  <div class="sl-sideleft">
    <div class="sl-sideleft-menu">
      <a href="{{ url('admin/home') }}" class="sl-menu-link active">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div>
      </a>

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Products</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('add.product') }}" class="nav-link">Add Product</a></li>
        <li class="nav-item"><a href="{{ route('all.product') }}" class="nav-link">All Product</a></li>
      </ul>

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Transaction</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('add.transaction') }}" class="nav-link">New Sale</a></li>
        <li class="nav-item"><a href="{{ route('all.transaction') }}" class="nav-link">Transaction List</a></li>
      </ul>

    </div>
    <br>
  </div>
