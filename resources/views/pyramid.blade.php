<h1> Pyramid </h1>

@php
    $maxDot = 9
@endphp

@for ($i = $maxDot; $i >= 1; $i -= 2)

    @for ($z = 0; $z < ($maxDot - $i) / 2; $z++)
        *
    @endfor

    @for ($a = 1; $a <=$i; $a++)
        *
    @endfor
    <br>
@endfor