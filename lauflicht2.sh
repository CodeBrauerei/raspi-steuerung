#!/bin/bash
gpio mode 11 out
gpio mode 6 out
gpio mode 5 out
gpio mode 1 out
gpio mode 15 out

gpio write 11 0
gpio write 6 0
gpio write 5 0
gpio write 1 0
gpio write 15 0


while true
do
	gpio write 11 1
	sleep 0.03
	gpio write 11 0
	gpio write 6 1
	sleep 0.03
	gpio write 6 0
	gpio write 5 1
	sleep 0.03
	gpio write 5 0
	gpio write 1 1
	sleep 0.03
	gpio write 1 0
	gpio write 15 1
	sleep 0.03
	gpio write 15 0
	gpio write 1 1
	sleep 0.03
	gpio write 1 0
	gpio write 5 1
	sleep 0.03
	gpio write 5 0
	gpio write 6 1
	sleep 0.03
	gpio write 6 0
	sleep 0.03	
done

echo "Skript fertig!"
