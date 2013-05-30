raspi-steuerung
===============

GPIO Steuerung via PHP mittels [WiringPi](https://projects.drogon.net/raspberry-pi/wiringpi/)

Da ich noch wenig Erfahrung mit dem RasPi und insbesondere mit der GPIO habe, gibt es noch ein paar Testskripte, die mir zu Übung dienen


## Dateien
* pinwriter.php - (DEV) jeden Port ein/auslesen und beschreiben
* test.php - Eine LED an/ausschalten (@GPIO 014) und blinken lassen
* test2.php - 5 verschiedene LEDs an/ausschalten (@GPIO 07, 025, 024, 018, 014)
* lauflicht.sh - einfaches Lauflicht (links nach rechts toggeln / gleichen GPIO-Pins)
* lauflicht2.sh - Lauflicht von links nach rechts und zurück



## Versuchsaufbau
![Versuchsaufbau](http://i.imgur.com/FXN5DiD.png "Versuchsaufbau")

_Achtung: Es handelt sich um ein RasperryPi REV 2.0_
