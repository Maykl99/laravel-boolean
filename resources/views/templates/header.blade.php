{{-- porzione di codice riutilizzabile in più pagine, incluso nel layout --}}
<div class="offset-md-1 col-md-9">
  <i class="fa fa-address-card" aria-hidden="true"></i>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img id="logo-page" src="https://www.boolean.careers/images/misc/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto inf-contatti">
        <li class="nav-item active">
        <a class="nav-link {{ Route::currentRouteName() == 'Nome.home' ? 'text-success' : 'no-a'}}" href="{{ route('Nome.home') }}"><u>Home</u></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{url()->current() == route('Nome.chisiamo') ? 'text-success' : 'no-a'}}" href="{{ route('Nome.chisiamo') }}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{url()->current() == route('Students.studenti') ? 'text-success' : 'no-a'}}" href="{{ route('Students.studenti') }}">Studenti</a>
        </li>
        <li>
          <button type="button" class="btn btn-outline-success">Candidati ora</button>
        </li>
      </ul>
    </div>
  </nav>
</div>
