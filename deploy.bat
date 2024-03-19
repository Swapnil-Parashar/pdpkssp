@echo off
call npm run prod
call git add .
call git commit -m "PKS1903"
call git push origin master
