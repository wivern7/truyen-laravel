@extends('layouts.app')
@section('title', 'Đọc Truyện Online Mới Nhất - ' . \App\Option::getvalue('sitename'))
@section('seo')
    <meta name="description" content="{{\App\Option::getvalue('description')}}">
    <meta name="keywords" content="{{\App\Option::getvalue('keyword')}}">
    <link rel="image_src" href="link_to_thumbnail" />
    <meta property="og:description" />
@endsection
@section('breadcrumb', showtrangchu())
@section('content')

    <div class="container visible-md-block visible-lg-block" id="intro-index">
        <div class="title-list">
            <h2><a href="{{route('danhsach.truyenhot')}}" title="Truyện hot">Truyện hot <span class="glyphicon glyphicon-fire"></span></a></h2>
            <select id="hot-select" class="form-control new-select">
                <option value="all">Thể Loại: Tất cả</option>
                {{ category_parent(\App\Category::get()) }}
            </select>
        </div>
        <div class="index-intro">
            {!! \App\Story::getListHotStories() !!}
        </div>
    </div>

    <div class="container" id="list-index">
      @include('partials.reading')
        <div class="list list-truyen list-new col-xs-12 col-sm-12 col-md-8 col-truyen-main">
            <div class="title-list">
                <h2><a href="{{route('danhsach.truyenmoi')}}" title="Truyện mới cập nhật">Mới cập nhật<span class="glyphicon glyphicon-menu-right"></span></a></h2>
                <select id="new-select" class="form-control new-select">
                    <option value="all">Chọn Thể Loại</option>
                    {{ category_parent(\App\Category::get()) }}
                </select>
            </div>
                {!!  \App\Story::getListNewStories()  !!}
            <!--
            <div class="title-list">
                <h2><a>Có thể bạn quan tâm <span class="glyphicon"></span></a></h2>
            </div>
                <div style="padding: 8px; border: 2px solid #696969; word-wrap: break-word;">
                    <center>
                    </center>
                </div>
            -->
        </div>
        {{--Sidebar--}}
        <div class="visible-md-block visible-lg-block col-md-4 text-center col-truyen-side">
		@include('widgets.ads')
		@include('widgets.categories')
        </div>
    </div>
    {!!  \App\Story::getListDoneStories()  !!}
@endsection
