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
                
                    <img src="/images/uploads/blog/605/parhamsantana_brandextension_rollingstone_logo.png" class="hidden-xs" style="height: 60px; width: auto;" />
                    <img src="/images/uploads/blog/605/parhamsantana_brandextension_rollingstone_logo.png" class="img-responsive visible-xs" />
                
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
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/605/parhamsantana_brandextension_rollingstone_1__large.jpg">
            </div>
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/605/parhamsantana_brandextension_rollingstone_2__large.jpg">
            </div>
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/605/parhamsantana_brandextension_rollingstone_3__large.png">
            </div>
            
        </div>   
    </div>
    <!-- end Images -->

    <!-- Blurb -->
    <div class="container-fluid shaded-color block-medium" id="blurb">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="text-center pad-medium">
                <p class="block-small">We leveraged the iconic Rolling Stone aesthetic and attitude in a licensing toolkit to rock the future with new categories, partners and distribution channels.</p>
                
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
                    <img class="img-responsive" alt="" src="/images/uploads/work/605/parhamsantana_brandextension_rollingstone_4__large.png">
                </div>
            
                        <div class="col-sm-4">
                    <img class="img-responsive" alt="" src="/images/uploads/work/605/parhamsantana_brandextension_rollingstone_5__large.jpg">
                </div>
            
                        <div class="col-sm-4">
                    <img class="img-responsive" alt="" src="/images/uploads/work/605/parhamsantana_brandextension_rollingstone_6__large.jpg">
                </div>
                    </div>   
        </div>
            

    <!-- Consistency -->
    <div class="container block-large hidden-xs">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-xs-12 col-sm-8">
                
                    <img class="img-responsive" alt="" src="/images/uploads/blog/605/parhamsantana_brandextension_rollingstone_consistency_across_touchpoints__x-large.jpg">
                
            </div>
            <div class="hidden-xs col-sm-2"></div>
        </div>
    </div>
    <!-- end Consistency -->
@endsection