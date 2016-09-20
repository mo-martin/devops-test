#!/bin/bash
cd /www
date >> ../logs/deploy.log
git pull >> ../logs/deploy.log 2>&1
