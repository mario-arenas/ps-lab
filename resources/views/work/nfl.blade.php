@extends('layouts.base')

@section('content')
    <div id="overlay-loader"></div>
        
    <div class="container canvas block-moderate browser">
        <div class="row visible-xs block-small">
            <div class="col-xs-12">
                <a href="/?scrollTo=work" class="remove pull-right"><img class="btn-close" src="/assets/images/icons/close.svg" /></a>    
            </div>    
        </div>

        <div class="row">
            <div class="hidden-xs col-sm-2 col-md-3">
                <a href="#" class="visible-lg-inline pull-right arrow left-nav"><img class="btn-close" src="/assets/images/icons/chevron-left.svg" /></a>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6 text-center work-logos">
                
                    <img src="/images/uploads/blog/607/parhamsantana_brandextension_nfl_int_series_logo.png" class="hidden-xs" style="height: 65px; width: auto;" />
                    <img src="/images/uploads/blog/607/parhamsantana_brandextension_nfl_int_series_logo.png" class="img-responsive visible-xs" />
                
            </div>
            <div class="hidden-xs col-md-2 col-md-3">
                <a href="#" class="visible-lg-inline pull-left arrow right-nav"><img class="btn-close" src="/assets/images/icons/chevron-right.svg" /></a>
                <a href="/?scrollTo=work" class="remove pull-right"><img class="btn-close" src="/assets/images/icons/close.svg" /></a>
            </div>
        </div>
    </div>

    <!-- Images -->
    <div class="container-fluid block-medium">
        <div class="row no-gutter">
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/607/parhamsantana_brandextension_nfl_1__large.png">
            </div>
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/607/parhamsantana_brandextension_nfl_2__large.png">
            </div>
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/607/parhamsantana_brandextension_nfl_3__large.png">
            </div>
            
        </div>   
    </div>
    <!-- end Images -->

    <!-- Blurb -->
    <div class="container-fluid shaded-color block-medium" id="blurb">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="text-center pad-medium">
                <p class="block-small">For this 3-game series at London’s Wembley Stadium, we created an easy-to-follow system combining dozens of NFL logos to simplify the design process for manufacturers worldwide.</p>
                
                <a href="#" class="go-to-contact">Let's talk about it.</a>
                </div>
            </div>    
        </div>
    </div>
    <!-- end Blurb -->

    <!-- Second row of work images -->

                <div class="container-fluid block" id="more-images">
            <div class="row no-gutter">
                        <div class="col-sm-4">
                    <img class="img-responsive" alt="" src="/images/uploads/work/607/parhamsantana_brandextension_nfl_4__large.jpg">
                </div>
            
                        <div class="col-sm-4">
                    <img class="img-responsive" alt="" src="/images/uploads/work/607/parhamsantana_brandextension_nfl_5__large.jpg">
                </div>
            
                        <div class="col-sm-4">
                    <img class="img-responsive" alt="" src="/images/uploads/work/607/parhamsantana_brandextension_nfl_6__large.jpg">
                </div>
                    </div>   
        </div>
            

    <!-- Consistency -->
    <div class="container block-large hidden-xs">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-xs-12 col-sm-8">
                
                    <img class="img-responsive" alt="" src="/images/uploads/blog/607/parhamsantana_brandextension_nfl_guidelines__x-large.jpg">
                
            </div>
            <div class="hidden-xs col-sm-2"></div>
        </div>
    </div>
    <!-- end Consistency -->
@endsection