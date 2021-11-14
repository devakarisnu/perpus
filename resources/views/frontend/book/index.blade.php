@extends('frontend.templates.default')

@section('content')
<h2>Books Collection</h2>
<blockquote>
    <p class="flow-text">Koleksi buku yang bisa dipinjam !</p>
</blockquote>
<div class="row">
   @foreach ($books as $book)
   @include('frontend.templates.components.card-book', ['book' => $book])
   @endforeach
</div>
{{-- Pagination --}}
{{ $books->links('vendor.pagination.materialize') }}
@endsection