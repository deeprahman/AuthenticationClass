<?php
/*
*Log in system
*/
namespace \Auth_system\auth;  

class Auth
{
  //All variables are protected
  protected $username;
  protected $password;
  protected $email;
  private $min_lenth_array = ["username"=>4,"password"=>8];
  
  public function __construct(
     string $username,
     string $password,
     string $email
     )
     {
       $this->username = $username;
       $this->password = $password;
       $this->email = $email;
     }

  // Array for minimum lenth of username and $password
  

  /*************************************************************************
  * get methods.
  **************************************************************************/ 
  private function getUsername(): string {
    return $this->username;
  }
  
  private function getPassword(): string {
    return $this->password;
  }
  
  private function getEmail(): string {
    return $this->email;
  }
  
  /****************************************************************************
   * Set Methods
   ****************************************************************************/
  public function setUsername(string $username) {
    $this->username = $username;
  }
  
  public function setPassword(string $password) {
    $this->password = $password;
  }
  
  public function setEmail(string $email) {
    $this->email = $email;
  }
  
  /*****************************************************************************
   * Registration Methods
   *****************************************************************************/
  
  /**
   * 
   * @param array $lenth :contains minimum length of the username and password. 
   * @param string $user_or_pass :the password or the username
   * @return boolean : if the length of the username or password is less than or equal to the min length.
   */
  public function checMinkLenth (array $lenth, string $user_or_pass): bool {
    if ($user_or_pass === $this->username) {
      $min_lingth = $lenth["username"];
      if (strlen($user_or_pass) < $min_lingth) {
      return FALSE;
    }
      return TRUE;
      
    } elseif ($user_or_pass=== $this->password) {
      $min_lingth = $lenth["password"];
      if (strlen($user_or_pass) < $min_lingth) {
      return FALSE;
    }
      return TRUE;
      
    } else {
      return FALSE;
    }    
  } 
  
  /**
   * 
   * @param string $user_or_pass : Username or Password.
   * @return boolean : true if the Username/Password is valid.
   */
  
  public function validate(string $user_or_pass): bool {
    if (($user_or_pass=== $this->username)&&($this->checMinkLenth($this->min_lenth_array, $user_or_pass))) { // need to check the variable scope
      //////// I need to learn reguler expression to validate password.
      
    }
    
  }
  
}





















?>
