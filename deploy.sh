#!/usr/bin/env bash

rsync -e ssh -a -r --delete --delete-excluded --progress --compress --chmod=u=rwx,go=rx --exclude-from 'rsync-exclude.txt' ./ thomasjbradley_17kp@nfsn:/fs7c/17kp/public
