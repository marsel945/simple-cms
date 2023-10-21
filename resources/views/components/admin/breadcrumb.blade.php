<div class="mb-3 mb-md-0">
    <h1 class="mb-1 h2 fw-bold">{{ $pageTitle }}</h1>
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ $rootPageRoute }}">{{ $rootPage }}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ $subPageRoute }}">{{ $subPage }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $active }}
            </li>
        </ol>
    </nav>

</div>
