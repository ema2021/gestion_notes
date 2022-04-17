RED='\033[0;31m'
NC='\033[0m' # No Color
BLUE='\033[0;34m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
CYAN='\033[0;34m'
DEFAULT='\033[0;39m'
printf " ${CYAN} Configuration de mysql et phpmyadmin\n"
printf " ${YELLOW} mise a jour des list des packages ${DEFAULT}\n"
# update the package list
sudo apt update -y
 # insall phpmyadmin
 printf " ${YELLOW} installation de MYSQL${DEFAULT} \n"
# install mysql server
sudo apt install mysql-server  
printf " ${YELLOW} Install phpmyadmin and apache2 ${DEFAULT}\n"

sudo apt install apache2 phpmyadmin php-mbstring php-zip php-gd php-json php-curl
# install mysql server
# add "Include /etc/phpmyadmin/apache.conf" at the end of the file /etc/apache2/apache2.conf
printf " Visit ""${BLUE} http://localhost/phpmyadmin ${DEFAULT} to verifier si  phpmyadmin est installed"
printf " Si il n'est pas installé, il faut ajouter la ligne suivante "  
printf "${RED}Include /etc/phpmyadmin/apache.conf : ${DEFAULT}"
printf " dans le fichier /etc/apache2/apache2.conf et redemarer apache2 avec la commande "
printf "${RED} sudo systemctl restart apache2 ${DEFAULT}\n"
# sudo systemctl restart apache2

# sudo echo "Include /etc/phpmyadmin/apache.conf">>/etc/apache2/apache2.conf
# sudo mysql_secure_installation # secure mysql server
# sudo mysql -u root -p # enter mysql server password
#create database from terminal

#run  an sql file from terminal
sudo mysql -u root -p < createdb.sql




