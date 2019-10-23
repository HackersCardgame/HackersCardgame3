#!/bin/bash

clear

if  [ "$1" = "" ]
then
echo -e "
\e[39m
Usage:
------
To generate the Enlgish PNGs sheets: \e[36m./generatePNGs.sh EN\e[39m
To generate the German  PNGs sheets: \e[36m./generatePNGs.sh DE\e[39m


"
exit 0
fi


clear


find ../cards/$1 -name "*.svg" >./SVGs.txt

svgpath=$(dirname $(pwd))/svg

mkdir -p $svgpath/$1

counter=0

for i in $(cat ./SVGs.txt)
  do
  let counter=counter+1
  /usr/bin/inkscape $i &
  sleep 5
  xdotool key Ctrl+Alt+a
  sleep 5
  xdotool key Ctrl+Shift+s
  sleep 5
  xdotool key Shift+Tab Shift+Tab Shift+Tab Home Down
  sleep 5
  xdotool key Tab Tab Tab
  sleep 5
  echo $svgpath/$1/
  xdotool type "$svgpath/$1/"
  sleep 5
  xdotool type $(basename $i .svg)
  sleep 5
  xdotool key KP_Enter
  sleep 5
  xdotool key Ctrl+w
  sleep 5
  xdotool key Alt+F4
  sleep 5
  xdotool key Alt+w
done



