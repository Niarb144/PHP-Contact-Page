# PHP-Contact-Page
A php contact page that uses phpmailer to send emails via the web

 Contact Page
The contact page is a web page within the website from which visitors to the site can communicate with the mall. It is a basic html form that sends the user data via email. 
 
User will key in their name for referencing, their email which will be used for reply, a subject or topic and their message. 
Technologies Used
For the functionality of the page, a few tools have been used. 
1.	HTML, CSS, Javascript
2.	PHP
3.	Gmail SMTP
4.	PHPMailer
The Contact page uses a php script to send the mail to the appropriate destination. In order to achieve the send email function, the PHPMailer class is used. 
To get the PHPailer to the root development folder, one can download it online or use Composer to download it.
Composer is a PHP dependency tool that is used to install and manage various libraries within a PHP project. Composer can be installed via download from the internet and once installed in the computer it can run for all terminals. 
For the project, PHPMailer was installed via **composer** into the project’s root folder via the command **composer require phpmailer/phpmailer**. This command installs all the required PHPMailer libraries which will include **SMTP**. 
For the Gmail SMTP to work, some set up is required. The settings are changed in the **account security settings**. Select apps, change to web app and request for the generation of the 16 digit google authentication code. This code will act in place of a password and will be used in the PHP code. 
       
The SMTP settings will use the email as the username and the 16 digits as the password. Encryption type is SSL hence why we use the port 465.

The code snippet above shows how to set up the receiving emails. On the addAddress line, the email to which the form info will be sent to is set. Other emails can be added the same or as a cc. The addReplyTo will take the email that has been keyed in and provide an option to reply to that email.

