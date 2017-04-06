<?php namespace App\MyClasses;
  # -- Start of the Password Class
  class Password  {

    #-- Class properties to be populated from the HTML form
    private $length;
    private $case;
    private $numbers;
    private $specialChars;

    # -- Class helper properties for generating the password
    private $lowerCaseChars = "abcdefghijklmnopqrstuvwxyz";
    private $upperCaseChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    private $numberChars = "0123456789";
    private $specialCharsChars = "!@#$%^&*()+=-[]{}";
    private $userPassword;

    # -- Class methods

    # -- Class constructor method to create object properties
    function __construct($inputPasswordLength, $inputCase, $inputNumbers, $inputSpecialChars)
    {
      $this->length = $inputPasswordLength;
      $this->case = $inputCase;
      $this->numbers = $inputNumbers;
      $this->specialChars = $inputSpecialChars;
      $this->generatePassword();
    }

    # -- Getters and setters **Not all used now, but available if project expands
    public function setLength($inputLength) {
      $this->length = $inputLength;
    }

    public function getLength() {
      return $this->length . " Characters";
    }

    public function setCase($inputCase) {
      $this->case = $inputLowerCase;
    }

    public function getCase() {
      if ($this->case == 'mixed_case') {
        return "Lower and Upper Case";
      }
      else {
        return "Lower Case Only";
      }
    }

    public function setNumbers($inputNumbers) {
      $this->numbers = $inputNumbers;
    }

    public function getNumbers() {
      if ($this->numbers) {
        return "Yes";
      }
      else {
        return "No";
      }
    }

    public function setSpecialChars($inputSpecialChars) {
      $this->specialChars = $inputSpecialChars;
    }

    public function getSpecialChars() {
      if ($this->specialChars) {
        return "Yes";
      }
      else {
        return "No";
      }
    }

    public function getUserPassword() {
      return $this->userPassword;
    }

  # -- Class methods for generating the password
  # -- Method populates a string variable with one character from the required user elements (i.e. uppercase, lowercase, numbers, special characters)
  # -- This  method ensures that the returned user password includes at least one character from the requested character types
    public function createPasswordBucketSmall() {
      $passwordBucketSmall = '';

      if ($this->case == 'lower_case') {
        $passwordBucketSmall = substr(str_shuffle($this->lowerCaseChars), 0, 1);
      }
      else {
        $passwordBucketSmall = substr(str_shuffle($this->lowerCaseChars), 0, 1) . substr(str_shuffle($this->upperCaseChars), 0, 1);
      }
      if ($this->numbers) {
        $passwordBucketSmall .= substr(str_shuffle($this->numbers), 0, 1);
      }
      if ($this->specialChars) {
        $passwordBucketSmall .= substr(str_shuffle($this->specialCharsChars), 0, 1);
      }
      return $passwordBucketSmall;
    }

    # -- Method creates one long string with all possible password characters based on user input
    public function createPasswordBucketLarge() {
      $passwordBucketLarge = '';

      if ($this->case == 'lower_case') {
        $passwordBucketLarge = $this->lowerCaseChars;
      }
        else {
          $passwordBucketLarge = $this->lowerCaseChars . $this->upperCaseChars;
        }

      if ($this->numbers) {
        $passwordBucketLarge .= $this->numberChars;
      }

      if ($this->specialChars) {
        $passwordBucketLarge .= $this->specialCharsChars;
      }
      return $passwordBucketLarge;
    }

    # -- Method generates the random password using input from the previous two methods
    # -- This method is called in the contructor method
    public function generatePassword() {

      $this->userPassword = $this->createPasswordBucketSmall();
      $remainingChars = $this->length - strlen($this->userPassword);

      for ($i=0; $i < $remainingChars ; $i++) {
        $this->userPassword .= substr(str_shuffle($this->createPasswordBucketLarge()), 0, 1);
      }
      return str_shuffle($this->userPassword);
    }
  }
?>
