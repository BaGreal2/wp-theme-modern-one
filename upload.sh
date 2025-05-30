#!/bin/bash

if [ ! -f .env ]; then
  echo "[ERROR] .env file not found in $(pwd)" >&2
  exit 1
fi

set -a
source .env
set +a

sftp -o Port=$SFTP_PORT -b remote-commands.txt $SFTP_USER@$SFTP_HOST
