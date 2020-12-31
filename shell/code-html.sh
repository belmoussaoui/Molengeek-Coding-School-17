#!/bin/bash
# to move in /user/local/bin/ in mac

FOLDER=$1
S=false
B=false

opts_flag () {
    shift  # shift FOLDER args
    for arg in "$@"; do
        case $arg in
            -s | --sass) S=true ;;
            -b | --bootstrap)  B=true ;;
        esac
    done
}

html_project () {
    mkdir $FOLDER
    mkdir $FOLDER/public
    mkdir $FOLDER/public/css
    mkdir $FOLDER/public/js
    mkdir $FOLDER/public/html
    mkdir $FOLDER/public/html
    touch $FOLDER/index.html
    touch $FOLDER/public/css/style.css
}

add_sass () {
    mkdir $FOLDER/public/sass
    touch $FOLDER/public/sass/style.sass
}


opts_flag "$@"

html_project

if [ "$S" = true ] ; then
    add_sass
fi

code $FOLDER
