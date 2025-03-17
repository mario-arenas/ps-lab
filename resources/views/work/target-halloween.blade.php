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
                
                    <img src="/images/uploads/blog/266/target.png" class="hidden-xs" style="height: 70px; width: auto;" />
                    <img src="/images/uploads/blog/266/target.png" class="img-responsive visible-xs" />
                
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
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/266/parhamsantana_brandextension_target_halloween_1__large.jpg">
            </div>
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/266/parhamsantana_brandextension_target_halloween_2-2__large.jpg">
            </div>
            
            <div class="col-sm-4">
                <img class="img-responsive work-top-images" alt="" src="/images/uploads/work/266/parhamsantana_brandextension_target_halloween_3-2__large.jpg">
            </div>
            
        </div>   
    </div>
    <!-- end Images -->

    <!-- Blurb -->
    <div class="container-fluid shaded-color block-medium" id="blurb">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="text-center pad-medium">
                <p class="block-small">We optimized sales of the second largest holiday at Target with an
    integrated merchandising campaign that had cross-cultural appeal for
    all demographics. Target enjoyed their most successful Halloween.</p>
                
                <a href="#" class="go-to-contact">Let's talk about it.</a>
                </div>
            </div>    
        </div>
    </div>
    <!-- end Blurb -->

    <!-- Second row of work images -->


    <!-- Consistency -->
    <div class="container block-large hidden-xs">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-xs-12 col-sm-8">
                
                    <img class="img-responsive" alt="" src="/images/uploads/blog/266/parhamsantana_brandextension_target_festival_of_fright_consistency_across_touchpoints__x-large.jpg">
                
            </div>
            <div class="hidden-xs col-sm-2"></div>
        </div>
    </div>
    <!-- end Consistency -->
@endsection