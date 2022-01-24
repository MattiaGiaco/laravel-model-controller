<header>
  <ul class="nav nav-pills mt-3 justify-content-center">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href=" {{ route('home') }} ">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}" href=" {{ route('about') }} ">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'contacts') ? 'active' : '' }}" href=" {{ route('contacts') }} ">Contacts</a>
    </li>
</header>