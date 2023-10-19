<div class="mb-3 mb-md-0">
    <h1 class="mb-1 h2 fw-bold">{{ $page }}</h1>
    <!-- Breadcrumb -->
@if(isset($rootRoutePage) && isset($rootPage) && isset($routeSubPage) && isset($subPage) && isset($active))
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ $rootRoutePage }}">{{ $rootPage }}</a>
        </li>
        <li class="breadcrumb-item"><a href="{{ $routeSubPage }}">{{ $subPage }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ $active }}
        </li>
    </ol>
</nav>
    
@endif
</div>