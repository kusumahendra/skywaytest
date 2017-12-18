<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sky Way Test</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="grid-container" id="main-content">
            <div class="grid-x align-middle h-100">
                <div class="cell">
                    <div class="blurb-container grid-x grid-margin-x grid-margin-y grid-padding-x grid-padding-y text-center">
                        <div class="medium-4 cell">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-retweet fa-stack-1x fa-inverse"></i>
                            </span>
                            <h2>Test 1</h2>
                            <p>Reverse the words from sentence</p>
                            <a href="#" data-open="test-1-modal" class="button primary">
                                Try now
                            </a>
                        </div>
                        <div class="medium-4 cell">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-product-hunt fa-stack-1x fa-inverse"></i>
                            </span>
                            <h2>Test 2</h2>
                            <p>Get list of prime number from 1 to N</p>
                            <a href="#" data-open="test-2-modal" class="button primary">
                                Try now
                            </a>
                        </div>
                        <div class="medium-4 cell">
                            <span class="fa-stack fa-3x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-calculator fa-stack-1x fa-inverse"></i>
                            </span>
                            <h2>Test 3</h2>
                            <p>Sort Number and get smallest number, largest number, Average and Median</p>
                            <a href="#" data-open="test-3-modal" class=" button primary">
                                Try now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reveal" id="test-1-modal" data-reveal>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>

            <h1>Test 1</h1>
            <p class="lead">Reverse the words from sentence</p>
            <p class="">Please input your sentence below to reverse it</p>
            <form id="test-1-form" class="ajax-form">
                <textarea name="sentence" id="" cols="30" rows="5" placeholder="Your sentence here"></textarea>
                <div class="text-right">
                <button type="submit" class="button primary text-right">
                    Submit <i class="fa fa-circle-o-notch fa-spin fa-fw fa-inverse hide"></i>
                </button>
                </div>
            </form>
            <div class="result callout secondary hide"></div>
            <div class="result-error callout secondary hide"><p>Oops. Please check on your input.</p></div>
        </div>

        <div class="reveal" id="test-2-modal" data-reveal>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>

            <h1>Test 2</h1>
            <p class="lead">Get list of prime number from 1 to N</p>
            <p class="">Please input N number (maximum value)</p>
            <form id="test-2-form" class="ajax-form">
                <input type="number" name="limit" placeholder="Your N number here (must be numeric)"></input>
                <div class="text-right">
                {{-- <input type="submit" class="button primary text-right"> --}}
                <button type="submit" class="button primary text-right">
                    Submit <i class="fa fa-circle-o-notch fa-spin fa-fw fa-inverse hide"></i>
                </button>
                </div>
            </form>
            <div class="result callout secondary hide"></div>
            <div class="result-error callout secondary hide"><p>Oops. Please check on your input.</p></div>
        </div>

        <div class="reveal" id="test-3-modal" data-reveal>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>

            <h1>Test 3</h1>
            <p class="lead">Sort Number and get smallest number, largest number, average and median</p>
            <p class="">Please input your numbers on input fields below. Click on 'ada number' button to add new number.</p>
            <form id="test-3-form" class="ajax-form">
                <div id="input-container">
                    <div class="input-group">
                        <input type="number"  class="input-group-field" name="number[]" placeholder="Your number here (must be numeric)"></input>
                        <div class="input-group-button">
                            <button href="#" class=" button alert input-remove-button">
                                <i class="fa fa-remove fa-inverse"></i>
                            </button>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="number"  class="input-group-field" name="number[]" placeholder="Your number here (must be numeric)"></input>
                        <div class="input-group-button">
                            <button href="#" class="button alert input-remove-button">
                                <i class="fa fa-remove fa-inverse"></i>
                            </button>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="number"  class="input-group-field" name="number[]" placeholder="Your number here (must be numeric)"></input>
                        <div class="input-group-button">
                            <button href="#" class="button alert input-remove-button">
                                <i class="fa fa-remove fa-inverse"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-right">

                <a href="#" class="button secondary" id="add-number-button">Add Number</a>
                <button type="submit" class="button primary text-right">
                    Submit <i class="fa fa-circle-o-notch fa-spin fa-fw fa-inverse hide"></i>
                </button>
                </div>
            </form>
            <div class="result callout secondary hide">
                <p><strong>Sorted number:</strong><br>
                    <span id="sorted"></span>
                </p>
                <p><strong>Lowest number:</strong><br>
                    <span id="lowest"></span>
                </p>
                <p><strong>Highest number:</strong><br>
                    <span id="highest"></span>
                </p>
                 <p><strong>Average:</strong><br>
                    <span id="average"></span>
                </p>
                 <p><strong>Median:</strong><br>
                    <span id="median"></span>
                </p>
            </div>
            <div class="result-error callout secondary hide"><p>Oops. Please check on your input.</p></div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            jQuery(function($){
                inputString = '<div class="input-group">';
                inputString +=  '<input type="number"  class="input-group-field" name="number[]" placeholder="Your number here (must be numeric)"></input>';
                    inputString += '<div class="input-group-button">';
                        inputString += '<button href="#" class=" button alert input-remove-button">';
                            inputString += '<i class="fa fa-remove fa-inverse"></i>';
                        inputString += '</button>';
                    inputString += '</div>';
                inputString +='</div>';

                // test-3-form remove input
                $('body').on('click', '.input-remove-button', function() {
                    $(this).closest(".input-group").remove();
                });

                // test-3-form add input
                $('#add-number-button').click(function(){
                    $('#input-container').append(inputString);
                })

                // test-1-form submit event handler
                $('#test-1-form').submit(function(e){
                    $button = $(this).find('button[type="submit"]');
                    $button.attr("disabled", true);
                    $button.find('.fa-spin').removeClass('hide');
                    $data = $(this).serialize();
                    $.ajax({
                        url: '{{ url('/test-1') }}',
                        dataType: 'text',
                        type: 'post',
                        contentType: 'application/x-www-form-urlencoded',
                        data: $data,
                         headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function( data, textStatus, jQxhr ){
                            var json = $.parseJSON(data);
                            console.log(json['result']);
                            if(json.result){
                                $('#test-1-modal .result').html('<p><strong>Reversed sentence:</strong><br>'+json['result']+'</p>');
                                $('#test-1-modal .result').removeClass('hide');
                                $('#test-3-modal .result-error').addClass('hide');
                                $button.attr("disabled", false);
                                $button.find('.fa-spin').addClass('hide');
                                console.log(data);
                            }
                            else{
                                $('#test-1-modal .result').addClass('hide');
                                $('#test-1-modal .result-error').removeClass('hide');
                                $button.attr("disabled", false);
                                $button.find('.fa-spin').addClass('hide');
                                console.log(data);
                            }
                        },
                    })
                })

                // test-2-form submit event handler
                $('#test-2-form').submit(function(e){
                    $button = $(this).find('button[type="submit"]');
                    $button.attr("disabled", true);
                    $button.find('.fa-spin').removeClass('hide');
                    $data = $(this).serialize();
                    $.ajax({
                        url: '{{ url('/test-2') }}',
                        dataType: 'text',
                        type: 'post',
                        contentType: 'application/x-www-form-urlencoded',
                        data: $data,
                         headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function( data, textStatus, jQxhr ){
                            var json = $.parseJSON(data);
                            console.log(json['result']);
                            if(json.result){
                                $('#test-2-modal .result').html('<p><strong>Prime number found:</strong><br>'+json['result']+'</p>');
                                $('#test-2-modal .result').removeClass('hide');
                                $('#test-2-modal .result-error').addClass('hide');
                                $button.attr("disabled", false);
                                $button.find('.fa-spin').addClass('hide');
                                console.log(data);
                            }
                            else{
                                $('#test-2-modal .result').addClass('hide');
                                $('#test-2-modal .result-error').removeClass('hide');
                                $button.removeAttr("disabled");
                                $button.find('.fa-spin').removeClass('hide');
                                console.log(data);
                            }
                        },
                    })
                })

                // test-3-form submit event handler
                $('#test-3-form').submit(function(e){
                    $button = $(this).find('button[type="submit"]');
                    $button.attr("disabled", true);
                    $button.find('.fa-spin').removeClass('hide');
                    $data = $(this).serialize();
                    $.ajax({
                        url: '{{ url('/test-3') }}',
                        dataType: 'text',
                        type: 'post',
                        contentType: 'application/x-www-form-urlencoded',
                        data: $data,
                         headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function( data, textStatus, jQxhr ){
                            var json = $.parseJSON(data);
                            console.log(json['result']);
                            if(json.result){
                                $('#test-3-modal .result #sorted').html(json['result']);
                                $('#test-3-modal .result #highest').html(json['highest']);
                                $('#test-3-modal .result #lowest').html(json['lowest']);
                                $('#test-3-modal .result #median').html(json['median']);
                                $('#test-3-modal .result #average').html(json['average']);
                                $('#test-3-modal .result').removeClass('hide');
                                $('#test-3-modal .result-error').addClass('hide');
                                $button.attr("disabled", false);
                                $button.find('.fa-spin').addClass('hide');
                                console.log(data);
                            }
                            else{
                                $('#test-3-modal .result').addClass('hide');
                                $('#test-3-modal .result-error').removeClass('hide');
                                $button.attr("disabled", false);
                                $button.find('.fa-spin').addClass('hide');
                                console.log(data);
                            }
                        },
                    })
                })
            })
        </script>
    </body>
</html>
