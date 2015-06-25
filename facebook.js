/*
https://developers.facebook.com/docs/javascript/quickstart/v2.3
*/

window.fbAsyncInit = function() {
    FB.init ({
	appId      : '1106109866085176',
	xfbml      : true,
	version    : 'v2.3',
    });

//    foo();
};

function fb_feed()
{
    FB.ui({
      method: 'feed',	// post to own timeline
      link: 'http://normal.no',
      caption: 'An example caption',
    }, function(response){});
}

function fb_like ()
{
    FB.ui ({
	method: 'share_open_graph',
	action_type: 'og.likes',
	action_properties: JSON.stringify ({
	    object:'https://developers.facebook.com/docs/',
	}),
    }, function (response) {
	console.log (response);
    });
}

function fb_share ()
{
    FB.ui ({
	method: 'share',
	href: window.location.href,
    }, function(response) {
    });
}


(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/nb_NO/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
