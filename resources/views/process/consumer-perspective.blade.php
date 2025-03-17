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
                        
                            <img src="/images/uploads/process/272/circle-consumer.png" class="img-responsive" />
                        
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
                <h3 class="text-center text-muted">Coffee conversations and research validation.</h3>
                
                <h4 class="text-center text-muted">To get the Consumer Perspective, we conduct Coffee Conversations: <br />
    Sessions with potential customers to identify key benefits.</h4> 
            </div>
        </div>
        
        <!-- row -->
        <div class="row">
            <div class="col-xs-12">
                
                    <img src="/images/uploads/process/272/parhamsantana_brandextension_consumerperspective__large.jpg" class="img-responsive" />
                
            </div>    
        </div>
    </div>


    <!-- Image cache -->
    <div id="cache"></div>
@endsection