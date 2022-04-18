<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark position-fixed top-0 vh-100 col-sm-2"
     style="width: 300px;">
    <a href="{{ route('home') }}"
       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">{{ __('shop.name') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('shop.home') }}"
                    @class([
                        'nav-link',
                        'text-white',
                        'active' => request()->route()->getName() === 'shop.home'
                    ])
            >
                <i class="bi bi-house"></i>
                {{ __('menu.home') }}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('shop.product.index') }}"
                    @class([
                        'nav-link',
                        'text-white',
                        'active' => in_array(request()->route()->getName(), ['shop.product.index', 'shop.product.show'])
                    ])
            >
                <i class="bi bi-basket"></i>
                {{ __('menu.products') }}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('shop.product.index') }}"
                    @class([
                        'nav-link',
                        'text-white',
                        'active' => in_array(request()->route()->getName(), ['shop.product.index', 'shop.product.show'])
                    ])
            >
                <i class="bi bi-box-seam"></i>
                {{ __('menu.stock') }}
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
           data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
            <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="{{ route('home') }}">{{ __('menu.settings') }}</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('logout') }}">{{ __('action.logout') }}</a></li>
        </ul>
    </div>
</div>