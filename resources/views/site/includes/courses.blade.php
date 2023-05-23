<div style="height: 370px" class="product-item">
    <div class="product-thumb">
        <span class="bage">Sale</span>
        <img style="max-height: 300px !important ; min-height: 300px" class="img-responsive" src="{{ asset('uploads/courses/' . $course->image) }}" alt="product-img" />
        <div class="preview-meta">
            <ul>
                <li>
                    <span data-toggle="modal" data-target="#product-modal">
                        <i class="tf-ion-ios-search-strong"></i>
                    </span>
                </li>
                <li>
                    <a href="#!"><i class="tf-ion-ios-heart"></i></a>
                </li>
                <li>
                    <a href="#!"><i class="tf-ion-android-cart"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="product-content">
        <h4><a href="{{ route('site.course', $course->slug) }}">{{ $course->title }}</a></h4>
        <p class="price">${{ $course->price }}</p>
    </div>
</div>
