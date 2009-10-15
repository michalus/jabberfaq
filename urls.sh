#!/bin/bash
cat index.html | grep http | awk '{print $1}' | sort -u | grep http > urls.txt
gedit urls.txt

