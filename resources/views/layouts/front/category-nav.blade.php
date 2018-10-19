<ul class="list-unstyled list-inline nav navbar-nav">
    @foreach($categories as $category)
        <li>
            {{--@if($category->children()->count() > 0)--}}
                {{--@include('layouts.front.category-sub', ['subs' => null])--}}
                        {{--$category->children--}}
            {{--@else--}}

                <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{$category->name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                {{--<a class="dropdown-item" @if(request()->segment(2) == $category->slug) class="active" @endif href="{{route('front.category.slug', $category->slug)}}">{{$category->name}} </a>--}}
                                @foreach($category->subCategories as $subCategory)
                                        <div class="dropdown-divider"></div>
                                        <a  class="dropdown-item" href="{{route('front.category.slug', $subCategory->slug)}}" class="list-group-item list-group-item-action">{{$subCategory->name}}</a>
                                @endforeach
                        </div>
                </div>

            {{--@endif--}}
        </li>
    @endforeach
</ul>