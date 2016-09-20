#!/bin/bash
cd /www
date +"%m-%d-%Y %T %Z" >> ../logs/deploy.log
git pull >> ../logs/deploy.log 2>&1
