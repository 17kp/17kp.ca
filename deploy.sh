#!/usr/bin/env bash

rsync -e ssh -a -r --progress --compress --exclude-from 'rsync-exclude.txt' ./ one7kp:/home/one7kp/public_html
