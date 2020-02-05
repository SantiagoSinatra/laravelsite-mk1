<nav class="mobile-nav">

    <div class="nav-button">
        <div></div>
        <div></div>
        <div></div>
    </div>


    <div class="nav-container">

        @for ($i = 0; $i < 5; $i++)
        <a href=""><div class="nav-item">this is an item</div></a>
        @endfor

    </div>


</nav>
<nav class="desktop-nav">

    <div class="desk-nav-container">

        @for ($i = 0; $i < 5; $i++)
        <a href=""><div class="desk-nav-item">this is a big item</div></a>
        @endfor

    </div>
</nav>

<script src=" {{ asset('js/main-layout-js/nav.js') }} "></script>
