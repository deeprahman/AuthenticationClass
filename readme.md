Authentication System

Modules:
1.Registration Module.
2.Log In module.
3.Log Out Module
4.Password Recovery Module

Description:
Part1: Registration: 1.Unique Username of at least 4 characters.
                     2.8 Characters Password- has at least an Uppercase letter, a lower case letter, a digit; does not                              contain  the username.
                     3.A unique and valid email address.
                     4.After submitting without error, notifies the user. 
                     5.Send email to the email address contains a link that activates the account.
                     6.After successful activation, it notifies the user.

Part2: Log In: 1. Input registered username/email.
               2. Input corresponding password.
               3. 'Remember Me' option.
               4. Forget password option-   i) Change password page.
                                           ii) Input the email/username.
                                          iii) A 8 digit code is sent to the email address.
                                           iV) Input the code.
                                            v) Let the user change the password.
                                           vi) After successfully changing the password, notify the user.

Part3: Log Out: 1) User can log out from the account.

********************************************************************************
Variables:

1) Username, string, 
2) Password, string,
3) email address

Methods:

Registration: 1) Check the validity of the username.
              2) Check the validity of the password.
              3) Check the validity of the email.  
              4) When no error, Connects to the Database.
                               Stores the values
                               Notify the user and send email with a link.
              5) When at least one error, notify the user. 

Activation: 1)    

Log In : 1) Check for the valid username/email.
         2) Check for the corresponding valid password.
         3) When no errors, Log In, and notify the user.
         4) When at least one error, notify the user.

Remember Me: 1) ................


              

                                          

