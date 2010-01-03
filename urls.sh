#!/bin/bash
cat index.html | grep "http:" | sed 's/^.*http/http/' | cut -d'"' -f1 | sort -u > odnosniki
