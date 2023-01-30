
<div class="row">
  <div class="col-12">
    <h4 class="fw-bold mb-1">@yield('title')</h4>
    <div>
      @if(@isset($breadcrumbs))
        <ol class="breadcrumb">
          {{-- this will load breadcrumbs dynamically from controller --}}
          @foreach ($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item text-muted">
              @if(isset($breadcrumb['link']))
                <a
                  href="{{ $breadcrumb['link'] == 'javascript:void(0)' ? $breadcrumb['link']:url($breadcrumb['link']) }}">
              @endif
              {{$breadcrumb['name']}}
              @if(isset($breadcrumb['link']))
                </a>
              @endif
            </li>
          @endforeach
        </ol>
      @endisset
    </div>
  </div>
</div>

