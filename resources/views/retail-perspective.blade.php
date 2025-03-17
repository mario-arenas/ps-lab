@extends('layouts.base')

@section('content')
    <div id="overlay-loader"></div>
    
    <div class="container canvas block-large">
        <!-- row -->
        <div class="row block-xsmall">
            <!-- column -->
            <div class="col-xs-offset-2 col-xs-8">
                <div class="row">
                    <div class="col-sm-12 col-md-offset-4 col-md-4">
                        
                            <img src="/images/uploads/process/271/circle-retail.png" class="img-responsive" />
                        
                    </div>
                </div>   
            </div>
            <!-- end column -->
            
            <div class="col-xs-2 browser">
                <a href="/process?scrollTo=chart" class="remove pull-left"><img class="btn-close" src="/assets/images/icons/close.svg" /></a>
            </div>
        </div>
        <!-- end row -->
        
        <div class="row block-small">
            <div class="col-xs-12">
                <h3 class="text-center text-muted">A shelf-back approach.</h3>
                
                <h4 class="text-center text-muted">To get the Retail Perspective, we conduct a best practices audit: <br />
    Retail anthropology, competitive review and interviews with industry experts.</h4> 
            </div>
        </div>
        
        <!-- row -->
        <div class="row">
            <div class="col-xs-12">
                
                    <img src="/images/uploads/process/271/parhamsantana_brandextension_retailperspective-2__large.jpg" class="img-responsive" />
                
            </div>    
        </div>
    </div>


    <!-- Image cache -->
    <div id="cache"></div>
@endsection