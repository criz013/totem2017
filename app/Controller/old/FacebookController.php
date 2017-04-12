<?php

namespace Controller;

class FacebookController extends \W\Controller\Controller
{
    protected $fb;
    protected $fbApp;
    public $accessToken;
    protected $pageID;
    public $challengeTag;
    public $albumID;
    
    public function __construct ()
    {
      
      $challengeTab = new \Model\ChallengeModel;
      $challenge = $challengeTab->findAll();
      
      debug($challenge);
      
      $this->pageID = $challenge["facebook_page_id"];
      $this->challengeTag = $challenge["challenge_hashtag"];
      $this->albumID = $challenge["facebook_album_id"];
      
      $this->accessToken = $_SESSION['fb_access_token'];
      //$this->accessToken = 'EAANCZCN3d2D8BAHOwobkxAnmQ1mkfFbKgrzLQZCavUNca4rJ6OBLGuJPIVfEz8dNxKpZBonmtIDZCxdufSq8s87ZCBjNLf9CNRb8HBBABgCrvIsDHGXwM2KHCAQWX9gkGcFPDKE9LVF4DYFmyzquZC2yYODRAZAlXIZD';
      
      $this->fb = new \Facebook\Facebook([
        'app_id' => '918078751627327',
        'app_secret' => 'a52d19b112bdf5e48a1718e944a248d0',
        'default_graph_version' => 'v2.5',
      ]);
      
      $this->fbApp = new \Facebook\FacebookApp(
          '918078751627327', 
          'a52d19b112bdf5e48a1718e944a248d0'
      );
      
    }
    
    public function login ()
    {
        $helper = $this->fb->getRedirectLoginHelper();

        $permissions = ['email', 'manage_pages']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('https://dev-zoubida.c9users.io/branche-master/public/auth/callback', $permissions);
        
        echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    }
    
    public function callback ()
    {
        $helper = $this->fb->getRedirectLoginHelper();

        try {
          $this->accessToken = $helper->getAccessToken();
        } 
        catch(\Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } 
        catch(\Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }
        
        if (!isset($this->accessToken)) {
          if ($helper->getError()) {
            header('HTTP/1.0 401 Unauthorized');
            echo "Error: " . $helper->getError() . "\n";
            echo "Error Code: " . $helper->getErrorCode() . "\n";
            echo "Error Reason: " . $helper->getErrorReason() . "\n";
            echo "Error Description: " . $helper->getErrorDescription() . "\n";
          } else {
            header('HTTP/1.0 400 Bad Request');
          }
          exit;
        }
        
        // Logged in
        echo '<h3>Access Token</h3>';
        var_dump($this->accessToken->getValue());
        
        // The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $this->fb->getOAuth2Client();
        
        // Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($this->accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);
        
        // Validation (these will throw FacebookSDKException's when they fail)
        $tokenMetadata->validateAppId('918078751627327'); // Replace {app-id} with your app id
        // If you know the user ID this access token belongs to, you can validate it here
        $tokenMetadata->validateUserId('805676672903873');
        $tokenMetadata->validateExpiration();
        
        if (! $this->accessToken->isLongLived()) {
          // Exchanges a short-lived access token for a long-lived one
          try {
            $this->accessToken = $oAuth2Client->getLongLivedAccessToken($this->accessToken);
          } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
            exit;
          }
        
          echo '<h3>Long-lived</h3>';
          var_dump($this->accessToken->getValue());
        }
        
        $_SESSION['fb_access_token'] = (string) $this->accessToken;
        
        try {
    		  // Returns a `Facebook\FacebookResponse` object
    		  $response = $this->fb->get('/me?fields=id,name,location', $this->accessToken);
    		} catch(\Facebook\Exceptions\FacebookResponseException $e) {
    		  echo 'Graph returned an error: ' . $e->getMessage();
    		  exit;
    		} catch(\Facebook\Exceptions\FacebookSDKException $e) {
    		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
    		  exit;
    		}
		
    		$user = $response->getGraphUser();
    		
    		echo 'ID: ' . $user->getId();
    		echo 'Name: ' . $user->getName();
        
        // User is logged in with a long-lived access token.
        // You can redirect them to a members-only page.
       $this->getPhotoDetail();
    }
    
    private function getRequest ($endpoint)
    {
        //$request = $this->fb->request('GET', $endpoint);
        $request = new \Facebook\FacebookRequest($this->fbApp, $this->accessToken, 'GET', $endpoint);
        
        try {
          $response = $this->fb->getClient()->sendRequest($request);
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          exit;
        }
        
        return $response;
    }
    
    public function getAlbumsPictures($albumID)
    {
        $photos = $this->getRequest('/'.$albumID.'/photos');
        return $photos->getGraphEdge();
    }
    
    public function getPhotoDetails ($pictureID)
    {
        $req = $this->getRequest('/'.$pictureID);
        $photo = $req->getGraphObject();
        $pictureDescription = $photo["name"];
        
        return $this->getHashTags($pictureDescription);
    }
    
    public function getPhotoLikes ($pictureID)
    {
        $req = $this->getRequest('/'.$pictureID.'/likes');
        return $req->getGraphEdge();
    }
    
    private function getHashTags ($string)
    {
        preg_match_all('/#(\w+)/', $string, $matches);
        
        foreach($matches[1] as $match)
        {
            $keyword[] = $match;
        }
        return $keyword;
    }
    
}