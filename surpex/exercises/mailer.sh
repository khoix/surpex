#!/bin/bash

to="$1"
from="Surprise.Exercise@gmail.com"
reply="Surprise.Exercise@gmail.com"
exercise="$2"
description="$3"
time="$4"
DIV1="-------------------"
DIV2="...................."
DIV3="<<>><<>><<>><<>>"
email_subject="Surprise Exercise!"
email_body="${DIV3}\nToday's Workout:\n${DIV1}\n$exercise\n${DIV1}\n$description\n\n[Duration: $time minutes]http://se.khoix.net:8080"

echo -e "$email_body" | mailx -s "$email_subject" -r $reply $to
