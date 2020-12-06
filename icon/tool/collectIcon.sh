#!/bin/bash

count=1
while [ ${count} -lt 900 ]
do
    echo ${count}
    wget https://78npc3br.user.webaccel.jp/poke/icon32/n${count}.gif
    count=$(expr ${count} + 1)
done
