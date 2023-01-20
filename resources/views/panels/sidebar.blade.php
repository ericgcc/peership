@php
$configData = Helper::applClasses();
@endphp
<div
  class="main-menu menu-fixed {{ $configData['theme'] === 'dark' || $configData['theme'] === 'semi-dark' ? 'menu-dark' : 'menu-light' }} menu-accordion menu-shadow"
  data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="{{ url('/') }}">
          <span class="brand-logo">
              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" height="28px" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                   viewBox="0 0 7.5 6"
                   xmlns:xlink="http://www.w3.org/1999/xlink">
                 <g id="Layer_x0020_1">
                      <path fill="#5289F6" d="M2.05 5.9c0.74,-1.85 0.74,-3.93 0,-5.82l-1.22 1.22c0.25,1.13 0.26,2.28 0.02,3.4l1.2 1.2z"/>
                      <path fill="#5289F6" d="M0.85 4.7c1.85,-0.74 3.93,-0.74 5.82,0l-1.22 1.22c-1.12,-0.25 -2.28,-0.26 -3.4,-0.02l-1.2 -1.2z"/>
                      <path fill="#3054EE" d="M0.85 4.7c0.54,-0.22 1.09,-0.37 1.66,-0.46 -0.09,0.57 -0.24,1.12 -0.46,1.66l-1.2 -1.2z"/>
                      <path fill="#5289F6" d="M6.65 1.3c-1.85,0.74 -3.93,0.74 -5.82,0l1.22 -1.22c1.13,0.25 2.28,0.26 3.4,0.02l1.2 1.2z"/>
                      <path fill="#5289F6" d="M5.45 0.1c-0.74,1.85 -0.74,3.93 0,5.82l1.22 -1.22c-0.25,-1.12 -0.26,-2.28 -0.02,-3.4l-1.2 -1.2z"/>
                      <path fill="#3054EE" d="M5.45 0.1c-0.22,0.54 -0.37,1.09 -0.46,1.66 0.57,-0.09 1.12,-0.24 1.66,-0.46l-1.2 -1.2z"/>
                      <path fill="#3054EE" d="M2.51 1.76c-0.09,-0.57 -0.24,-1.14 -0.46,-1.68l-1.22 1.22c0.55,0.22 1.11,0.37 1.68,0.46z"/>
                      <path fill="#3054EE" d="M4.99 4.24c0.57,0.09 1.14,0.24 1.68,0.46l0 0 -1.22 1.22 0 0c-0.22,-0.54 -0.37,-1.11 -0.46,-1.68z"/>
                      <path fill="#3054EE" d="M2.88 3c0,0.48 0.39,0.87 0.87,0.87 0.48,0 0.87,-0.39 0.87,-0.87 0,-0.48 -0.39,-0.87 -0.87,-0.87 -0.48,0 -0.87,0.39 -0.87,0.87z"/>
                      <rect fill="none" width="7.5" height="6"/>
                 </g>
              </svg>
          </span>
          <span class="brand-text" style="padding-left: 7px;">
              <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" height="24px" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                   viewBox="0 0 127.31 30.35"
                   xmlns:xlink="http://www.w3.org/1999/xlink">
                 <g id="Layer_x0020_1">
                      <polygon fill="#110B11" fill-rule="nonzero" points="100.17,1.42 105.8,0.5 106.65,5.54 101.05,6.49 "/>
                      <path fill="#110B11" fill-rule="nonzero" d="M110.06 27.39l1.89 -0.54 0 -14.33c0,-0.46 -0.03,-0.75 -0.09,-0.89 -0.06,-0.13 -0.23,-0.28 -0.52,-0.45l-1.37 -0.75 0.15 -2.34c0.1,-0.02 0.2,-0.04 0.3,-0.06 0.11,-0.02 0.22,-0.04 0.34,-0.07 0.96,-0.18 1.97,-0.36 3.04,-0.54 1.07,-0.18 1.95,-0.29 2.64,-0.33 0.18,0.44 0.3,0.94 0.37,1.5 0.63,-0.52 1.3,-0.92 2.03,-1.19 0.72,-0.27 1.43,-0.4 2.15,-0.4 2.03,0 3.59,0.73 4.68,2.2 1.09,1.46 1.64,3.55 1.64,6.26 0,2.81 -0.76,4.96 -2.26,6.45 -1.51,1.48 -3.69,1.88 -6.54,1.88 -0.3,0 -0.92,0 -1.43,0l0 2c0,0.46 0.03,0.76 0.09,0.91 0.06,0.14 0.23,0.29 0.52,0.43l1.8 1.03 -0.12 2.19 -9.16 0 -0.15 -2.96zm9.25 -7.12c0.96,0 1.73,-0.14 2.32,-0.41 0.16,-0.52 0.3,-1.15 0.41,-1.89 0.11,-0.74 0.17,-1.43 0.17,-2.07 0,-1.61 -0.27,-2.85 -0.81,-3.72 -0.54,-0.87 -1.29,-1.31 -2.24,-1.31 -0.59,0 -1.29,0.17 -2.08,0.53l0 8.49c0.59,0.25 1.33,0.38 2.23,0.38z"/>
                      <path fill="#110B11" fill-rule="nonzero" d="M100.43 21.05l2.14 -0.64 0 -7.42c0,-0.44 -0.04,-0.73 -0.11,-0.87 -0.07,-0.13 -0.25,-0.28 -0.53,-0.44l-1.35 -0.73 0.16 -2.29c1.69,-0.33 3,-0.57 3.92,-0.72 0.93,-0.15 1.78,-0.24 2.55,-0.26 0.26,0.88 0.43,1.53 0.49,1.95l0 9.77c0,0.43 0.03,0.72 0.09,0.86 0.06,0.14 0.23,0.29 0.52,0.46l1.49 0.85 -0.12 2.29 -9.16 0 -0.09 -2.81z"/>
                      <path fill="#110B11" fill-rule="nonzero" d="M79.13 20.83l1.98 -0.58 0 -15.29c0,-0.47 -0.03,-0.77 -0.09,-0.91 -0.07,-0.14 -0.24,-0.29 -0.52,-0.46l-1.4 -0.74 0.09 -2.42 0.99 -0.16c2.82,-0.46 4.98,-0.18 6.11,-0.23 0.19,0.51 0.22,0.46 0.22,1.06l0 7.28c1.17,-0.54 2.16,-0.92 2.98,-1.17 0.82,-0.24 1.63,-0.37 2.44,-0.37 3.32,0 4.98,2.03 4.98,6.07l0 6.29c0,0.45 0.04,0.74 0.1,0.89 0.06,0.15 0.24,0.31 0.54,0.48l1.53 0.9 -0.12 2.39 -8.81 0 -0.16 -3.03 1.56 -0.45 0 -6.06c0,-0.94 -0.03,-1.61 -0.08,-2 -0.05,-0.39 -0.23,-0.7 -0.53,-0.91 -0.29,-0.21 -0.79,-0.32 -1.5,-0.32 -0.68,0 -1.66,0.12 -2.93,0.35l0 7.76c0,0.45 0.03,0.74 0.09,0.89 0.07,0.15 0.24,0.31 0.51,0.48l1.57 0.9 -0.13 2.39 -9.26 0 -0.16 -3.03z"/>
                      <path fill="#110B11" fill-rule="nonzero" d="M71.01 23.79c-1.61,0 -3.47,-0.29 -5.59,-0.86 0.13,-1.99 0.26,-3.47 0.4,-4.42l1.74 -0.34 1.92 2.05c0.67,0.2 1.43,0.3 2.26,0.3 0.47,0 0.84,-0.03 1.1,-0.09 0.06,-0.16 0.09,-0.39 0.09,-0.67 0,-0.25 -0.05,-0.45 -0.17,-0.61 -0.11,-0.17 -0.36,-0.36 -0.74,-0.58 -0.39,-0.23 -1.06,-0.57 -2.02,-1.04 -1.2,-0.63 -2.11,-1.2 -2.75,-1.69 -0.63,-0.5 -1.08,-1.02 -1.35,-1.55 -0.28,-0.53 -0.42,-1.16 -0.42,-1.89 0,-1.63 0.61,-2.92 1.82,-3.88 1.21,-0.95 2.85,-1.43 4.93,-1.43 0.86,0 1.76,0.1 2.7,0.29 0.95,0.19 1.8,0.45 2.55,0.78 0,1.32 -0.09,2.79 -0.27,4.42l-1.59 0.25 -2.05 -2.2c-0.52,-0.16 -1.3,-0.24 -2.32,-0.24 -0.16,0 -0.48,0.01 -0.97,0.06 -0.06,0.12 -0.1,0.31 -0.1,0.58 0,0.28 0.09,0.53 0.25,0.74 0.16,0.22 0.45,0.45 0.87,0.71 0.42,0.25 1.08,0.61 2,1.08 1.34,0.65 2.36,1.22 3.04,1.69 0.68,0.48 1.16,0.97 1.43,1.45 0.28,0.49 0.41,1.08 0.41,1.78 0,1.66 -0.63,2.97 -1.9,3.9 -1.28,0.94 -3.03,1.41 -5.27,1.41z"/>
                      <path fill="#110B11" fill-rule="nonzero" d="M52.54 20.96l1.86 -0.55 0 -7.42c0,-0.44 -0.03,-0.73 -0.09,-0.87 -0.06,-0.13 -0.22,-0.28 -0.49,-0.44l-1.34 -0.73 0.09 -2.29c0.35,-0.08 0.64,-0.14 0.89,-0.15 2.46,-0.51 4.28,-0.79 5.46,-0.83 0.18,0.53 0.36,1.19 0.52,1.98 1.22,-0.95 2.26,-1.61 3.11,-1.98l1.74 0c-0.02,0.77 -0.07,1.61 -0.15,2.52 -0.08,0.9 -0.18,1.63 -0.31,2.18 -0.73,-0.04 -1.27,-0.06 -1.61,-0.06 -0.86,0 -1.74,0.05 -2.66,0.15l0 6.93c0,0.43 0.03,0.72 0.09,0.86 0.06,0.14 0.23,0.29 0.49,0.46l1.83 0.97 -0.12 2.17 -9.16 0 -0.15 -2.9z"/>
                      <path fill="#110B11" fill-rule="nonzero" d="M43.87 23.93c-2.38,0 -4.22,-0.72 -5.51,-2.17 -1.29,-1.44 -1.94,-3.44 -1.94,-5.98 0,-1.77 0.32,-3.29 0.95,-4.56 0.63,-1.28 1.52,-2.25 2.68,-2.92 1.16,-0.67 2.52,-1.01 4.06,-1.01 2.3,0 4.07,0.73 5.3,2.2 1.23,1.47 1.82,3.55 1.76,6.26l-9.28 1.71c0.28,0.85 0.68,1.48 1.2,1.88 0.52,0.39 1.21,0.59 2.06,0.59 0.59,0 1.29,-0.08 2.11,-0.26 0.81,-0.17 1.64,-0.41 2.47,-0.72l0.7 3.03c-0.75,0.57 -1.73,1.04 -2.93,1.4 -1.2,0.37 -2.41,0.55 -3.63,0.55zm2.29 -10.75c-0.04,-0.77 -0.26,-1.33 -0.66,-1.69 -0.39,-0.36 -0.95,-0.53 -1.66,-0.53 -0.59,0 -1.15,0.08 -1.68,0.24 -0.43,1 -0.62,2.08 -0.58,3.24l4.58 -1.26z"/>
                      <path fill="#110B11" fill-rule="nonzero" d="M27.11 23.93c-2.38,0 -4.22,-0.72 -5.51,-2.17 -1.29,-1.44 -1.94,-3.44 -1.94,-5.98 0,-1.77 0.32,-3.29 0.95,-4.56 0.63,-1.28 1.52,-2.25 2.68,-2.92 1.16,-0.67 2.52,-1.01 4.06,-1.01 2.3,0 4.07,0.73 5.3,2.2 1.23,1.47 1.82,3.55 1.76,6.26l-9.28 1.71c0.28,0.85 0.68,1.48 1.2,1.88 0.52,0.39 1.21,0.59 2.06,0.59 0.59,0 1.29,-0.08 2.11,-0.26 0.81,-0.17 1.64,-0.41 2.47,-0.72l0.7 3.03c-0.75,0.57 -1.73,1.04 -2.93,1.4 -1.2,0.37 -2.41,0.55 -3.63,0.55zm2.29 -10.75c-0.04,-0.77 -0.26,-1.33 -0.66,-1.69 -0.39,-0.36 -0.95,-0.53 -1.66,-0.53 -0.59,0 -1.15,0.08 -1.68,0.24 -0.43,1 -0.62,2.08 -0.58,3.24l4.58 -1.26z"/>
                      <path fill="#151515" fill-rule="nonzero" d="M0.14 20.31l2.54 -0.69 0 -13.25c0,-0.61 -0.05,-1.01 -0.14,-1.2 -0.09,-0.2 -0.34,-0.38 -0.73,-0.54l-1.81 -1.01 0.21 -2.82c1.76,-0.28 3.43,-0.48 5.01,-0.61 1.57,-0.13 3.27,-0.19 5.08,-0.19 2.5,0 4.51,0.27 6.03,0.8 1.52,0.53 2.63,1.37 3.34,2.5 0.71,1.14 1.06,2.65 1.06,4.53 0,2.43 -0.87,4.34 -2.63,5.73 -1.75,1.4 -4.14,2.09 -7.18,2.09l-1.91 -0.07 0 2.65c0,0.55 0.04,0.91 0.12,1.07 0.08,0.17 0.29,0.33 0.61,0.49l2.12 1.25 -0.14 2.82 -11.41 0 -0.17 -3.55zm11.1 -8.52c1.25,0 2.16,-0.13 2.74,-0.38 0.26,-1.14 0.39,-2.33 0.39,-3.58 0,-1.37 -0.26,-2.35 -0.79,-2.93 -0.52,-0.58 -1.36,-0.87 -2.52,-0.87 -0.39,0 -1.08,0.05 -2.05,0.14l0 7.41c0.62,0.14 1.37,0.21 2.23,0.21z"/>
                 </g>
              </svg>
          </span>
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-toggle="collapse">
          <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
            data-ticon="disc"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      {{-- Foreach menu item starts --}}
      @if (isset($menuData[0]))
        @foreach ($menuData[0]->menu as $menu)
          @if (isset($menu->navheader))
            <li class="navigation-header">
              <span>{{ __('locale.' . $menu->navheader) }}</span>
              <i data-feather="more-horizontal"></i>
            </li>
          @else
            {{-- Add Custom Class with nav-item --}}
            @php
              $custom_classes = '';
              if (isset($menu->classlist)) {
                  $custom_classes = $menu->classlist;
              }
            @endphp
            <li
              class="nav-item {{ $custom_classes }} {{str_contains($menu->slug, Route::currentRouteName()) ? 'active' : '' }}">
              <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0)' }}" class="d-flex align-items-center"
                target="{{ isset($menu->newTab) ? '_blank' : '_self' }}">
                @if(isset($menu->iconset))
                    <i class="{{ $menu->icon }}"></i>
                @else
                    <i data-feather="{{ $menu->icon }}"></i>
                @endif

                <span class="menu-title text-truncate">{{ __('locale.' . $menu->name) }}</span>
                @if (isset($menu->badge))
                  <?php $badgeClasses = 'badge rounded-pill badge-light-primary ms-auto me-1'; ?>
                  <span
                    class="{{ isset($menu->badgeClass) ? $menu->badgeClass : $badgeClasses }}">{{ $menu->badge }}</span>
                @endif
              </a>
              @if (isset($menu->submenu))
                @include('panels/submenu', ['menu' => $menu->submenu])
              @endif
            </li>
          @endif
        @endforeach
      @endif
      {{-- Foreach menu item ends --}}
    </ul>
  </div>
</div>
<!-- END: Main Menu-->
