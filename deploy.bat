@echo off
call npm run prod
call git add .
call git commit -m "SP1903"
call git push origin master
