@extends('layouts.base')

@section('content')
    <div id="overlay-loader"></div>

    <div class="container canvas block">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="uppercase text-center block-xsmall">Our Retail-Right Process</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron text-center">
                <p class="text-muted">We deliver retail strategy rooted in insights that will drive your business to the next level.
                </p>
                
                <p class="text-muted">We have proven processes with repeatable results.</p>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Clients -->
    <div class="shaded block" id="chart">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center jumbotron pad-large">
                        <h2 class="first uppercase block-small">Retail-Right Process</h2>
                        
                        <div class="row">
                            <div class="col-xs-4">
                                <a href="/process/client-perspective" class="left process-container">
                                    <img class="img-overlay" data-type="client" src="/assets/images/process/client-hover.svg" />
                                    <img class="process-hover img-fluid" data-type="client" src="/assets/images/process/client.svg" />
                                </a>
                            </div>
                            
                            <div class="col-xs-4">
                                <a href="/process/retail-perspective" class="center process-container">
                                    <img class="img-overlay" data-type="retail" src="/assets/images/process/retail-hover.svg" />
                                    <img class="process-hover img-fluid" data-type="retail" src="/assets/images/process/retail.svg" />
                                </a>
                            </div>
                            
                            <div class="col-xs-4">
                                <a href="/process/consumer-perspective" class="right process-container">
                                    <img class="img-overlay" data-type="consumer" src="/assets/images/process/consumer-hover.svg" />
                                    <img class="process-hover img-fluid" data-type="consumer" src="/assets/images/process/consumer.svg" />
                                </a>
                            </div>
                        </div>
                        
                        <div class="row block-small">
                            <div class="col-xs-12">
                                <img src="/assets/images/process/arrows.svg" class="img-fluid" />    
                            </div>    
                        </div>
                        
                        <h2 class="uppercase text-muted block-small">Your strategic framework</h2>
                        
                        <p class="text-muted hidden-xs hidden-sm">Market Analysis &bull; Brand Strategy &bull; Positioning Strategy<br/>
                            Marketing Strategy &bull; Merchandising Strategy
                        </p>
                        
                        <p class="text-muted visible-sm">Market Analysis &bull; Brand Strategy &bull; Positioning Strategy &bull; Marketing Strategy &bull; Merchandising Strategy
                        </p>
                        
                        <p class="text-muted visible-xs">Market Analysis<br/>Brand Strategy<br/>Positioning Strategy<br/>
                            Marketing Strategy<br/>Merchandising Strategy
                        </p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- end Clients -->

    <!-- Image cache -->
    <div id="cache"></div>
@endsection