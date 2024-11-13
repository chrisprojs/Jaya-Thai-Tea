@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-md-6">
        <img src="{{ asset('images/menu/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid">
    </div>
    <div class="col-md-6 menu-detail">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p><strong>Price:</strong> Rp. {{ number_format($product->price, 0, ',', '.') }},00</p>
        <a href="tel:+6285779083324" class="btn btn-primary">Order Sekarang Juga!</a>
    </div>
</div>
<div class="row my-4 d-flex justify-content-center flex-column flex-md-row">
    <div class="col-12 col-md-4 mb-4 mb-md-0">
        <form id="postReview">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
            <div class="form-group d-flex">
                <p class="mr-1">Rating:</p>
                <div id="starRating">
                    <i class="bi bi-star" data-value="1"></i>
                    <i class="bi bi-star" data-value="2"></i>
                    <i class="bi bi-star" data-value="3"></i>
                    <i class="bi bi-star" data-value="4"></i>
                    <i class="bi bi-star" data-value="5"></i>
                </div>
                <input type="hidden" name="rating" id="rating" required>
            </div>
            <div class="form-group d-flex">
                <p class="mr-1">Comment:</p>
                <textarea name="comment" id="comment" maxlength="255"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
    <div class="col-12 col-md-6">
        <ul class="list-unstyled">
            @foreach ($reviews as $review)
            <li>
                <div id="reviewStar">
                    @for ($i = 1; $i <= 5; $i++) <i class="bi bi-star{{ $i <= $review->rating ? '-fill' : '' }}"></i>
                        @endfor
                </div>
                <div>{{ $review->comment }}</div>
            </li>
            @endforeach
        </ul>
    </div>
</div>


<script src="{{ asset("js/api/PostReview.js") }}"></script>
@endsection