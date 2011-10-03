Developers:

Baltazar, John David
Opena, Harvey Jake
Ybanez, Neil Patrick


Requirements:

1. MySQL Server (user='root', password='') must be installed.

2. WampServer must be installed.


Local Installation:

1. Extract the files to your desired location(e.g. "C:\wamp\www\").

2. Open the configuration file ("C:\wamp\bin\apache\Apache2.2.17\conf\httpd.conf");

3. Add the following lines to end of the file:
<VirtualHost 127.0.0.1:80>
  ServerName www.husai.com.localhost
  DocumentRoot "C:\wamp\www\Husai-Website\web"
  <Directory "C:\wamp\www\Husai-Website\web">
    AllowOverride All
    Allow from All
  </Directory>
</VirtualHost>

4. Execute the sql file("Husai-Website\db\database.sql");

5. Type "localhost" in your browser.

6. Log in using the credentials 'admin', 'admin'. Update your credentials.

7. Create a customer account to test the capabilities of a customer account.

 
 