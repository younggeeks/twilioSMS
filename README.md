twilioSMS
=========

Twillio SMS API for Laravel



## Installation

install through Composer. require `younggeeks/twilioSMS`.

	"require": {
		"younggeeks/twilioSMS":"dev-master",
	}

Then From Terminal Update Composer :

    composer update

  add the service provider.in `app/config/app.php`,

    'Younggeeks\Twiliosms\TwiliosmsServiceProvider',

Then Add Alias . In `app/config/app.php` 

        'Twilio' => 'Younggeeks\Twiliosms\Facades\TwilioFacade',

Publish config files from the Terminal

        php artisan config:publish younggeeks/twilioSMS
        
Edit `config/packages/younggeeks/twilioSMS` with your appropriate Twilio settings        


## Usage

 SMS Message 

<?php

Twilio::send('to', 'message');

Twilio::send('+255714095262','Hello World! How have you been?');
