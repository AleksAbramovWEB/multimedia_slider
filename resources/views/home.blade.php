@extends('layouts.app')
@section('content')
    @php
        /** @var Illuminate\Database\Eloquent\Collection $images  */
    @endphp


    <div class="swiper-container" ng-app = 'swiper_ang'>
        <div foo class="swiper-wrapper" ng-controller="swiper_ang_cntrl">
{{--            @foreach($images AS $image)--}}
{{--                @php--}}
{{--                    /** @var App\Models\ImagineForSlider $image  */--}}
{{--                @endphp--}}
{{--                <div class="swiper-slide">--}}
{{--                    <img id="img_{{$image->id}}" src="{{asset($image->path)}}">--}}
{{--                </div>--}}
{{--            @endforeach--}}
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>

    <div class="load_img">
        <h6 class="text-center m-2">Добавить изображение:</h6>
        <form class="col-md-10 offset-md-1" action="{{route('add_image')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="custom-file col mb-2 ">
                <input name="picture" type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">выберите фаил</label>
            </div>
            <button type="submit" class="font-weight-bold btn btn-light btn-block mt-1 mb-3">ЗАГРУЗИТЬ</button>
        </form>
    </div>
    <script>
        const CSRF_TOKEN = '{{ csrf_token() }}';
        const HREF_API = '{{ route('api_image')}}';
        let DataImages = {!! $images->toJson() !!} ;

    </script>
@endsection


