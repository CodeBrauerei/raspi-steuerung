raspi-steuerung
===============

GPIO Steuerung via PHP mittels [WiringPi](https://projects.drogon.net/raspberry-pi/wiringpi/)

Da ich noch wenig Erfahrung mit dem RasPi und insbesondere mit der GPIO habe, gibt es noch ein paar Testskripte, die mir zu Übung dienen


## Dateien
* `pinwriter.php` &rarr; **(DEV)** jeden Port ein/auslesen und beschreiben
* `test.php` &rarr; Eine LED an/ausschalten `(@GPIO 014)` und blinken lassen
* `test2.php` &rarr; 5 verschiedene LEDs an/ausschalten & status einlesen **[Demo-Video](http://youtu.be/XosZvX8hkPE)**
* `lauflicht.sh` &rarr; einfaches Lauflicht (links nach rechts toggeln / gleichen GPIO-Pins)
* `lauflicht2.sh` &rarr; Lauflicht von links nach rechts und zurück

## Versuchsaufbau
```php
LED   1;   2;   3;  4;   5;
GPIO  7;  25;  24; 18;  14;
WPI  11;   6;   5;  1;  15;
```





![Versuchsaufbau](http://i.imgur.com/FXN5DiD.png "Versuchsaufbau")

__Achtung: Es handelt sich um ein RasperryPi REV 2.0__
