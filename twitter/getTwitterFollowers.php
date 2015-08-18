<?php 
function getTwitterFollowers($screenName = 'codeforest')
{
    require_once(dirname(__FILE__).'/Cache.php');
    require_once(dirname(__FILE__).'/TwitterAPIExchange.php');
    // this variables can be obtained in http://dev.twitter.com/apps
    // to create the app, follow former tutorial on http://www.codeforest.net/get-twitter-follower-count
    $settings = array(
        'oauth_access_token' => "103931205-xqHsXTr7gzuQnJF7T1e0tlNsmhQHyC3Kc3yf1LGw",
        'oauth_access_token_secret' => "3Zvrjg0q2oWKXMBWab6FQgIaCCYiPd9EKc9MjSeLFuSb2",
        'consumer_key' => "9Yof9q86CmNlNt2prkNc56ske",
        'consumer_secret' => "yLFQgXqH3GVD7Q9qyCapXrDb9wM9R9nDcqU55u1gfNLRytzDRM"
    );
 
    $cache = new Cache();
  
    // get follower count from cache
    $numberOfFollowers = $cache->read('cfTwitterFollowers.cache');
    // cache version does not exist or expired
    if (false === $numberOfFollowers) {
        // forming data for request
        $apiUrl = "https://api.twitter.com/1.1/users/show.json";
        $requestMethod = 'GET';
        $getField = '?screen_name=' . $screenName;
 
        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getField)
             ->buildOauth($apiUrl, $requestMethod)
             ->performRequest();
 
        $followers = json_decode($response);
        $numberOfFollowers = $followers->followers_count;
  
        // cache for an hour
        $cache->write('cfTwitterFollowers.cache', $numberOfFollowers, 1*60*60);
    }
  
    return $numberOfFollowers;
}
 ?>