#!/bin/bash
cd theme || exit
sass --watch scss/*.scss css/style.css
