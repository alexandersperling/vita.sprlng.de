# vita
simple curriculum vita

HTML,CSS,PHP,JS

## how to run this project local with Docker

### prerequisites

+ system with docker
+ basic docker knowledge

---
1. clone this repo to your local machine
2. build the container image
``` bash
docker build -t vita .
```
3. run the following command to start the container and expose its port 8080 to your localhost port 80
``` bash
docker run -d -p 80:8080 -v /path/to/the/repo/:/var/www/vita vita
```

## TO DO

implement experiences effect via CSS ?
