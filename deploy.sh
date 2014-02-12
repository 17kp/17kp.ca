#!/usr/bin/env bash

rsync -e ssh -a -r --delete --delete-excluded --progress --compress --chmod=u=rwx,go=rx --exclude-from 'rsync-exclude.txt' ./ one7kp:/home/one7kp/public_html
