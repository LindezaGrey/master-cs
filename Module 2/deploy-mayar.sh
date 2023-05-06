echo -n "username:"
read USERNM

scp -r "./Module 2/www/"* $USERNM@mayar.abertay.ac.uk:/home/$USERNM/public_html