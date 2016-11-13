Site has simple markup and is consistent from page to page. 
JSON arrays seemed appropriate for each type. Storing extension in addition to the other attributes made building the link easier.

Had some issues with my JSON and thus it wouldn't validate, I think some invisible characters made their way in when I pasted sections of it that repeated like the labs and lectures.

My research online suggests that .htaccess cannot support virtual hosts, see https://stackoverflow.com/questions/6275620/how-to-create-virtual-host-from-apache-htacess

"The context for VirtualHost has to be server config. 
This means that the directive may be used in the server configuration files (e.g., httpd.conf), but not within any or containers. It is not allowed in .htaccess files at all.
(Directive Dictionary)"
