@extends('layouts.app')
@section('title', $story->name . ' - ' . $chapter->subname . ' :' . $chapter->name)
@section('breadcrumb', showBreadcrumb($breadcrumb))
@section('content')
    <div class="container chapter" id="chapterBody" style="margin-top: 0px;">
        <div class="row">
            <div class="col-xs-12">
                <button type="button" class="btn btn-responsive btn-success toggle-nav-open">
                    <span class="glyphicon glyphicon-menu-up"></span>
                </button>

                <a class="truyen-title" href="{{ route('story.show', $story->alias)  }}" title="{{ $story->name }}">{{ $story->name }}</a>
                <h2>
                    <a class="chapter-title" href="{{ route('chapter.show', [$story->alias, $chapter->alias]) }}" title="{{ $story->name }} - {{ $chapter->subname }}: {{ $chapter->name }}">
                        <span class="chapter-text">{{ $chapter->subname }}</span>: {{ $chapter->name }}
                    </a>
                </h2>
                <hr class="chapter-start">
                @include('partials.chapter')
                <hr class="chapter-end">
            <!--
            <div class="title-list">
                <h2><a>Có thể bạn quan tâm <span class="glyphicon"></span></a></h2>
            </div>
                <div style="padding: 8px; border: 2px solid #696969; word-wrap: break-word;">
                    <center>
                    </center>
                </div>
            -->    
                <div class="chapter-content">
                    {!! ($chapter->content) !!}
                </div>
                <div class="ads container">
                    {!! \App\Option::getvalue('ads_chapter') !!}
                </div>
            <!--
            <div class="title-list">
                <h2><a>Có thể bạn quan tâm <span class="glyphicon"></span></a></h2>
            </div>
                <div style="padding: 8px; border: 2px solid #696969; word-wrap: break-word;">
                    <center>
                    </center>
                </div>
            -->
                <hr class="chapter-end">
                <div class="chapter-nav" id="chapter-nav-bot">
                    @include('partials.chapter')
                    <div class="text-center">
                        <button type="button" class="btn btn-warning" id="chapter_error" chapter-id="{{ $chapter->id }}"><span class="glyphicon glyphicon-exclamation-sign"></span> Báo lỗi chương</button>
                        <button type="button" class="btn btn-info" id="chapter_comment"><span class="glyphicon glyphicon-comment"></span> Bình luận</button>
                    </div>
                    <div class="bg-info text-center visible-md visible-lg box-notice">TopTit chúc các bạn đọc truyện vui vẻ. Nếu gặp chương bị lỗi hãy "Báo lỗi chương" để TopTit xử lý. Cảm ơn các bạn!</div>
                    <div class="col-xs-12">
                        <div class="row" id="fb-comment-chapter">
                            <div class="fb-comments fb_iframe_widget" data-href="{{ route('chapter.show', [$story->alias, $chapter->alias]) }}" data-width="832" data-numposts="5" data-colorscheme="light" fb-xfbml-state="rendered"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
