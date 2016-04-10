# PHP EMAIL TRACKER

## Simple pixel based email tracker with PHP.

### This script allows you to track opens of HTML emails.

#### How to:
1. Set-up a local environment in order to test and run the PHP script.
2. Once you've run the script, each time you open the email in your browser your IP address will be logged on the log.txt file.
3. When you're satisfied with the script, you can host the script on the server. However don't forget to change the local path of the tracking pixel to the actual URL. 
4. When properly set-up each time a person opens the email, his IP-address should be logged on the log.txt file. 

```HTML
<img src="tracker.php?image=tracking.gif" alt="">
```

##### Replace local path by your URL path

```HTML
<img src="http://yourpath/tracker.php?image=tracking.gif" alt="">
```





#### Useful Tips:
1. You can use geo-location services like [http://ip-api.com/docs/](http://ip-api.com/docs/) to return the actual location of the IP-address.
2. Additionally you could use the [MAPBOX API](https://www.mapbox.com/) to visualize the locations on a map. 


