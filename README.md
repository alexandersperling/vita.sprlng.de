# vita.sprlng.de - online curriculum vitae

[![pipeline status](https://gitlab.com/alexandersperling/vita.sprlng.de/badges/master/pipeline.svg)](https://gitlab.com/alexandersperling/vita.sprlng.de/commits/master)

simple online curriculum vitae

HTML,CSS,PHP,JS

## How to run this project local with Docker

### prerequisites

+ system with docker
+ basic docker knowledge

---
1. clone this repo to your local machine
2. build the container image
``` bash
docker build -t vita .
```
3. run the following command to start the container and expose its port 8082 to your localhost port 80
``` bash
docker run -d -p 80:8080 -v /path/to/the/src/code/folder:/var/www/vita vita
```

## TO DO

implement experiences effect via CSS ?
