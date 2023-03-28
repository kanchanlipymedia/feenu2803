@php
$categories = App\Models\Category::orderBy('category_id','DESC')->get();
@endphp
@foreach($categories as $category)
<li><a href="{{route('frontend-index',['categoryId'=>$category->category_id])}}">{{($category)-> name}}</a></li>
@endforeach
