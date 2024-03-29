@props(['title' => '', 'items' => []])

<div class="breadcrumb-main">
    <h4 class="text-capitalize breadcrumb-title">{{ $title }}</h4>
    <div class="breadcrumb-action justify-content-center flex-wrap">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="uil uil-estate"></i>Dashboard</a>
                </li>
                @foreach ($items as $item)
                    <li class="breadcrumb-item">
                        <a href="{{ $item['url'] }}">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
