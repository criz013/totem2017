<?php
//1 - Settings (please update to math your own)
$consumer_key='wGZe3qrmv2keBlz6JyQOSUGDP'; //Provide your application consumer key
$consumer_secret='pikj9SJ2mmjpY8mXevBL6geXwCiPSUq1NPcWhxvk5Q5XuiRMyI'; //Provide your application consumer secret
$oauth_token = '854619489908011009-jLjZ5WAdAywARYqEUOOdi8fxtzl2TII'; //Provide your oAuth Token
$oauth_token_secret = 'LcicAxZFjDx9RIUqH93bmnGzU8vYBtr0fktFaKngaKuFs'; //Provide your oAuth Token Secret

//2 - Include @abraham's PHP twitteroauth Library

use \Abraham\TwitterOAuth\TwitterOAuth;
//3 - Authentication
/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

//4 - Start Querying
$query = 'https://api.twitter.com/1.1/search/tweets.json?q=%40ChallengeTOTEM2017'; //Your Twitter API query
$tweets = $connection->get($query);