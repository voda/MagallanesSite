#!/bin/bash
rsync -avz --exclude=.git --delete . thor:/home/sites/magephp.com/
