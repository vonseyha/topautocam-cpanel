@extends('front.layouts.app')

@section('content')

<article class="uk-comment uk-comment uk-width-2-3 uk-align-center">

<div class="uk-section uk-section-default">
    <div class="uk-container">

        <h2 style="color:gray;">Frequently Asked Questions</h2>
        <!-- <hr class="uk-divider-small uk-text-primary"> -->
        <hr class="uk-divider-icon">

        <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
            <div>
                <p>
                <a href="/contact" class="uk-text-primary">Contact us</a>
                anytime if you need further assistance.</p>
            </div>
        </div>

    </div>
</div>

    <header class="uk-comment-header">

    @foreach($fqas as $key => $fqa)
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <div>
                    <div class="uk-card uk-card-default uk-card-small uk-card-primary">
                        <div class="uk-text-center@s uk-card-body uk-text-primary">
                            <h3>{{$key+1}}</h3>
                        </div>
                    </div>
                </div>
                        </div>
            <div class="uk-width-expand uk-card uk-card-body uk-card-default">
                <h5 class="uk-title uk-margin-remove uk-text-primary" >
                    <a class="uk-link-reset" href="#">{{$fqa->question}}</a>
                </h5>
                <p>{!! $fqa->answer !!}</p>
            </div>
        </div>
    @endforeach
    </header>
</article>

@endsection