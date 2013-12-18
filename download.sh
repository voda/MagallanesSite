#!/bin/bash
VERSION=$1

wget "https://github.com/andres-montanez/Magallanes/archive/$VERSION.tar.gz"

tar xfz $VERSION.tar.gz
mv Magallanes-$VERSION magallanes
rm $VERSION.tar.gz

tar cfz download/magallanes.$VERSION.tar.gz magallanes
rm -rf magallanes
