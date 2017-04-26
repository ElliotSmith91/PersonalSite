<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
 c::set('debug', true);
 c::set('panel.install', true);
 c::set('ka.image.shrink.maxDimension', 2000);
 c::set('email.service', 'mail');
 c::set('thumbs.driver', 'im');
 c::set('thumbs.bin', '"C:/imagemagick/convert.exe"');
 // c::set('routes', array(
 //   array(
 //     'pattern' => '(:any)',
 //     'action'  => function($uid) {
 //     	// see if a page with this UID actually exists
 //     	$page = page($uid);
 //
 //     	// if yes, AND if that page has an associated template, go to it.
 //     	if ($page && (string)$page->template() == (string)$page->intendedtemplate()) {
 //     		return site()->visit($page);
 //
 //     	// if not, go to the homepage, and send the UID along as a variable named 'scroll'
 //     	} else {
 // 	      $data = array(
 // 	        'scroll' => '#' . $uid,
 // 	      );
 // 	      return array('/home', $data);
 //     	}
 //      }
 //   )
 // ));
