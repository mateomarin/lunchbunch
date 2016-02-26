<!-- This is my dropdown menu code -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="/profile_view">User Profile</a></li>
  <li class="divider"></li>
  <li><a href="/logout">Log Out</a></li>
</ul>

<nav>
    <div class="nav-wrapper">
        <a href="/index" class="brand-logo"><img width="104" height="64" src="/assets/img/munchbunches.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/Notifications/notifications_page"><i class="material-icons left">markunread_mailbox</i>Notifications</a></li>
            <li><a href="/Rides/add_new_ride_page"><i class="material-icons left">room</i>Create New Ride</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">reorder</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="sass.html">User Profile</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>
    </div>
</nav>