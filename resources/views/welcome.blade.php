@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @forelse($projects as $project)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <ul class="icon-bar">
                            <li><i class="fa fa-btn fa-close"></i></li>
                            <li><i class="fa fa-btn fa-cog"></i></li>
                        </ul>
                        <a href="{{route('projects.show', $project->id )}}">
                        <img src="{{ asset('/thumbnails/'.$project->thumbnail) }}"
                             alt="{{ $project->name }}">
                        </a>
                    </div>
                    <div class="caption">
                        <a href="{{route('projects.show', $project->id )}}">
                            <h4 class="text-center">{{ $project->name }}</h4>
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
            <div class="col-md-10 col-md-offset-1">
                @include('projects/create')
            </div>
        </div>
    </div>
@endsection

@section('customJS')
    <script>
        $(document).ready(function(){
            $('.icon-bar').hide();
            $('.thumbnail').hover(function () {
                $(this).find('.icon-bar').toggle();
            })
        });
    </script>
@endsection
