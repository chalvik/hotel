<div class="card-body">
    <h4> {{$hotel->title}} </h4>
    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" > Отель </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" >
                Страницы сайта
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" >
                Номера
            </a>
        </li>

        <li lass="nav-item">
            <a class="nav-link" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" >
                Спецпредложения
            </a>
        </li>

        <li lass="nav-item">
            <a class="nav-link" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" >
                Инфраструктура
            </a>
        </li>

        <li lass="nav-item">
            <a class="nav-link" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" >
                Слайдеры и Галереи
            </a>
        </li>

        <li lass="nav-item">
            <a class="nav-link" href="{{ route('hotels.show', ['hotel' => $hotel->id] ) }}" >
                Спецпредложения
            </a>
        </li>

    </ul>
</div>
