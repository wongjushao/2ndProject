@extends('layout.app')

@section('content')
    <h1 class="mb-10 text-2xl">Add Review For{{$book->title}}</h1>

    <form method="POST" action="{{route('books.reviews.store',$book)}}">
    @csrf
    <label for="review">Review</label>
    <textarea name="review" id="review" cols="30" rows="10" required class="input mb-4"></textarea>
    <label for="rating">Rating</label>
    <select name="rating" id="rating" class="input mb-4 "required>
        <option value="">Select a Rating</option>
        @for ($i = 1; $i <= 5; $i++)
            <option value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
    <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
