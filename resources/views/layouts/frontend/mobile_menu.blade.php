<!-- mobile fix menu start -->
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="{{ route('home') }}">
                <i class="fa fa-home icli js-link"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="{{ route('dog.index') }}">
                <i class="fa fa-dog icli js-link"></i>
                <span>Dog</span>
            </a>
        </li>

        <li>
            <a href="{{ route('kennel.index') }}" class="search-box">
                <i class="fa fa-building icli"></i>
                <span>Kennel</span>
            </a>
        </li>

        <li>
            <a href="{{ route('faq.index') }}" class="notifi-wishlist">
                <i class="fa fa-question icli"></i>
                <span>Faqs</span>
            </a>
        </li>

        <li>
            <a href="{{ route('contact.index') }}">
                <i class="fa fa-phone icli fly-cate"></i>
                <span>Contact</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->
