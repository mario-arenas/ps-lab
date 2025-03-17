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
                        
                            <img src="/images/uploads/process/270/circle-client.png" class="img-responsive" />
                        
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
                <h3 class="text-center text-muted">Live the client culture.</h3>
                
                <h4 class="text-center text-muted">To get the Client Perspective, we conduct immersion sessions with key stakeholders: <br />
    Reviews of business intelligence and competitive landscape.</h4> 
            </div>
        </div>
        
        <!-- row -->
        <div class="row">
            <div class="col-xs-12">
                
                <img src="/images/uploads/process/270/parhamsantana_brandextension_clientperspective-2__large.jpg" class="img-responsive" />
                    
            </div>    
        </div>
    </div>

    <!-- Image cache -->
    <div id="cache"></div>
@endsection