<FilesMatch “.(ttf|otf|eot|woff)$”>
<IfModule mod_headers.c>
Header set Access-Control-Allow-Origin “*”
</IfModule>
</FilesMatch>