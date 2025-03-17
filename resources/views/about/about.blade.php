@extends('layouts.base')

@section('content')
    <div id="overlay-loader"></div>
    <!-- Facts -->
    <div class="container canvas block">
        <div class="row block-small">
            <div class="col-xs-12">
                <h1 class="uppercase text-center">About Us</h1>
            </div>
        </div>
        
        <!-- Row -->
        <div class="row facts visible-md-block visible-lg-block">
            <div class="col-md-offset-1 col-md-2">
                <div class="work-intro fact">
                    <img class="img-responsive" alt="" src="/assets/images/home/facts-01.svg">
                    <img class="img-responsive transition-canvas hidden-xs hidden-sm hidden-md" id="fact-1-canvas" src="/assets/images/home/fact-plain-01.svg">
                    <div class="transition-overlay hidden-xs hidden-sm hidden-md" id="fact-1-overlay">0</div>
                    <p class="lead uppercase text-center text-muted">Years in Business</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="work-intro fact">
                    <img class="img-responsive" alt="" src="/assets/images/home/facts-02.svg">
                    <img class="img-responsive transition-canvas hidden-xs hidden-sm hidden-md" id="fact-2-canvas" src="/assets/images/home/fact-plain-02.svg">
                    <div class="transition-overlay hidden-xs hidden-sm hidden-md" id="fact-2-overlay">0</div>
                    <p class="lead uppercase text-center text-muted">Top retailers worked with</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="work-intro fact">
                    <img class="img-responsive" alt="" src="/assets/images/home/facts-03.svg">
                    <img class="img-responsive transition-canvas hidden-xs hidden-sm hidden-md" id="fact-3-canvas" src="/assets/images/home/fact-plain-03.svg">
                    <div class="transition-overlay hidden-xs hidden-sm hidden-md" id="fact-3-overlay">0</div>
                    <p class="lead uppercase text-center text-muted">Retail value created</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="work-intro fact">
                    <img class="img-responsive" alt="" src="/assets/images/home/facts-04.svg">
                    <img class="img-responsive transition-canvas hidden-xs hidden-sm hidden-md" id="fact-4-canvas" src="/assets/images/home/fact-plain-04.svg">
                    <div class="transition-overlay hidden-xs hidden-sm hidden-md" id="fact-4-overlay">0</div>
                    <p class="lead uppercase text-center text-muted">Languages spoken</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="work-intro fact">
                    <img class="img-responsive" alt="" src="/assets/images/home/facts-05.svg">
                    <img class="img-responsive transition-canvas hidden-xs hidden-sm hidden-md" id="fact-5-canvas" src="/assets/images/home/fact-plain-05.svg">
                    <div class="transition-overlay hidden-xs hidden-sm hidden-md" id="fact-5-overlay">0</div>
                    <p class="lead uppercase text-center text-muted">Brand Extensions</p>
                </div>
            </div> 
        </div>
        <!-- end Row -->
        
        <!-- Row -->
        <div class="row hidden-md hidden-lg">
            <div class="col-xs-12">
                <img class="img-responsive" src="/assets/images/home/facts.png">   
            </div>    
        </div>
        <!-- end Row -->
    </div>
    <!-- end Facts -->

    <!-- Clients -->
    <div class="shaded block-medium">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center pad-large">
                        <h1 class="first uppercase block-small">Our Clients</h1>
                        <h2 class="text-muted block-moderate">Leading brands and retailers at every channel of distribution</h2>
                        
                        <img src="/assets/images/about/clients.png" class="img-responsive hidden-xs" />
                        
                        <img src="/assets/images/about/clients-3-across.png" class="img-responsive visible-xs" />
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- end Clients -->

    <div class="container">
        <!-- Row -->
        <div class="row visible-xs lima block-medium" style="margin-top: -70px;">
            <div class="col-xs-12 text-center">
                <h2><img src="/assets/images/about/lima.gif" /></h2>
                <a href="http://www.licensing.org/" target="_blank">We are proud members of the International Licensing Industry Merchandisers’ Association.</a>
            </div>
        </div>
        <!-- end Row -->
    </div>

    <!-- Team -->
    <div class="container block-large" id="team">
        <!-- Row -->
        <div class="row block-moderate">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1 class="first uppercase block-small">Our Core Team</h1>
                    <h2 class="text-muted block-moderate">Experts who understand the business and creative side of brand extension</h2>
                    
                    <div class="row uppercase">
                        <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>
                        <div class="col-md-12 col-lg-10">
                            <div class="row no-gutter">
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/john" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>John</h2>
                                                    <p>President,<br />
    Director of Branding</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/273/parhamsantana_brandextension_john_parham__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/maruchi" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Maruchi</h2>
                                                    <p>Chief Client Officer</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/281/parhamsantana_brandextension_maruchi_santana__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/steve" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Steve</h2>
                                                    <p>Chief Development Officer</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/580/parhamsantana_brandextension_steve_puccia__x-large.jpeg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/maryann" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Maryann</h2>
                                                    <p>Vice President, <br />
    Director of Creative <br />
    Services</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/277/parhamsantana_brandextension_maryann_mitkowski__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/aaron" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Aaron</h2>
                                                    <p>Vice President, <br />
    Brand Strategy and <br />
    Licensing</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/279/parhamsantana_brandextension_aaron_spiegeland__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/susanne" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Susanne</h2>
                                                    <p>Retail Strategy Director</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/278/parhamsantana_brandextension_susanne_kernan-2__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/edward" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Edward</h2>
                                                    <p>Board of Advisors, <br />
    Research</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/275/parhamsantana_brandextension_edward_tauber__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/diana" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Diana</h2>
                                                    <p>Copy Director</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/276/parhamsantana_brandextension_diana_amsterdam__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/james" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>James</h2>
                                                    <p>DIGITAL STRATEGY DIRECTOR</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/602/parhamsantana_brandextension_james_kunert__x-large.jpeg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                                    <!-- staff -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <a href="/about/richard" class="thumb-wrapper team">
                                            <div class="overlay text-center">
                                                <div>
                                                    <h2>Richard</h2>
                                                    <p>Chief Legal Counsel</p>
                                                    <span>Tell me more</span>
                                                </div>  
                                            </div>
                                            
                                                <img class="img-responsive" alt="" src="/images/uploads/about/274/parhamsantana_brandextension_richard_bergovoy__x-large.jpg">
                                            
                                        </a>
                                    </div>
                                    <!-- end staff -->
                                
                            </div>
                        </div>
                        <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>    
                    </div>
                </div>
            </div>    
        </div>
        <!-- end Row -->
        
        <!-- Row -->
        <div class="row hidden-xs">
            <div class="col-xs-12 text-center lima">
                <h2><a href="http://www.licensing.org/" target="_blank"><img src="/assets/images/about/lima.gif" /></a></h2>
                <a href="http://www.licensing.org/" target="_blank">We are proud members of the International Licensing Industry Merchandisers’ Association.</a>
            </div>
        </div>
        <!-- end Row -->
    </div>
    <!-- end Team -->
@endsection